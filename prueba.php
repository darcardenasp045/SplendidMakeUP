<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Splendid";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa.";
} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}
?>