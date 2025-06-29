<?php
$host = 'localhost';
$db = 'coffee';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (\PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
