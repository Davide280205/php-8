<?php

require_once 'includes/connection.php';
$conn = dbConnect('read');

$sql = 'SELECT * FROM images';

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


} else {

	echo "<p> Nella tabella ci sono $numRows righe</p>";


}


?>



</body>
</html>