<?php

    require_once 'includes/connection.php';
    $conn = dbConnect('read');

    $sql = 'SELECT * FROM teachers ORDER BY school, hire_date DESC';

    $result = $conn->query($sql);
    
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
    <title>insegnanti-assunti-recente</title>
</head>
<body>

    <?php

        if($error){

            echo "<p>$error</p>";

        }else{

            echo "<p>Nella tabella ci sono $numRows records</p>";
    ?>

<table>

<tr>
    <th>Last Name</th>
    <th>School</th>
    <th>Hire Date</th>
</tr>

<?php foreach ($conn->query($sql) as $row) { ?>

<tr>
    <td><?= $row['last_name'] ?></td>
    <td><?= $row['school'] ?></td>
    <td><?= $row['hire_date'] ?></td>
</tr>

<?php } ?>
</table>
<?php } ?>
</body>
</html>