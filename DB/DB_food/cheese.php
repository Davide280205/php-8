<?php

require_once 'includes/connection_cheese.php';
$conn = dbConnect('read');

$sql = 'SELECT * FROM cheeses'; 

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
		<th>name</th>
		<th>type</th>
		<th>description</th>
	</tr>

	<?php foreach ($conn->query($sql) as $row) { ?>

	<tr>
		<td><?= $row['name'] ?></td>
		<td><?= $row['cheese_type'] ?></td>
		<td><?= $row['description'] ?></td>
	</tr>

	<?php } ?>
</table>

<?php } //ma viene chiusa qui?>
</body>
</html>