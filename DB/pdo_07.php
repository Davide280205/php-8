<?php

require_once 'includes/connection.php';
require_once 'includes/utility_funcs.php';
$conn = dbConnect('read');

$sql = 'SELECT * FROM images WHERE image_id > 5 ORDER BY caption DESC'; 

//esegue la query e salva il risultato in $result
$result = $conn->query($sql);

$error = $conn->errorInfo()[2];


if (!$error) {


	$numRows = $result->rowCount();

}



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php

if ($error){

	echo "<p>$error</p>";


} else { //non viene chiusa qui

	echo "<p> Nella tabella ci sono $numRows righe</p>";

?>

<table>

	<tr>
		<th>image_id</th>
		<th>filename</th>
		<th>caption</th>
	</tr>

	<?php foreach ($conn->query($sql) as $row) { ?>

	<tr>
		<td><?= $row['image_id'] ?></td>
		<td><?= $row['filename'] ?></td>
		<td><?= safe($row['caption']) ?></td>
	</tr>

	<?php } ?>
</table>

<?php } //ma viene chiusa qui?>
</body>
</html>