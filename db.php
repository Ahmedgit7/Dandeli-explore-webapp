<?php
$host = 'localhost';
$dbname = 'dandeli_explorer';
$username = 'root'; // Use your MariaDB username
$password = 'Ahmed'; // Use your MariaDB password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

