<?php 
$host = "localhost";
$db = "mvc_studenti";
$user = "root";
$pass = "";

$conn = "mysql:host=$host;dbname=$db";

try {
	$pdo = new PDO($conn, $user, $pass);
} catch (PDOException $e) {
	die("Errore di connessione DB" . $e->intl_get_error_message());
}

 ?>