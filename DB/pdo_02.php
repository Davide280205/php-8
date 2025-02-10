<?php

    require_once 'includes/connection.php';
    require_once 'includes/utility_funcs.php';
    $conn = dbConnect('read');

    // l'asterisco unisce tutto

    $sql = 'SELECT * FROM images';

    // esegue la query e salva il risultato nella variabile $result
    $result = $conn->query($sql);

    // nell'array mettere SEMPRE 2 perchè se c'è un errore è utile il terzo paragrafo
    $error = $conn->errorInfo()[2];

    if (!$error) {

        $numRows = $result->rowCount();

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>

    <?php

        if ($error){

            echo "<p>$error</p>";

        } else {

            echo "<p>Nella tabella ci sono $numRows righe</p>";

    ?>

    <table>

        <tr>
            <th>image_id</th>
            <th>filename</th>
            <th>caption</th>
        </tr>

    <?php foreach($conn->query($sql) as $row) { ?>

        <tr>
            <td><?= $row['image_id'] ?></td>
            <td><?= $row['filename'] ?></td>
            <td><?= $row['caption'] ?></td>
        </tr>

    <?php } ?>

    </table>

    <?php } ?>
    
</body>
</html>