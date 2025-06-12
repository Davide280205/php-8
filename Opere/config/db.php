<?php
$host = 'localhost';
$db = 'opere_elettriche';
$user = 'root';
$pass = '';


$conn = "mysql:host=$host;dbname=$db";


try {
    $pdo = new PDO($conn, $user, $pass);
} catch (PDOException $e) {
    die("Errore connessione DB: " . $e->getMessage());
}
