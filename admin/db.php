<?php
$host = 'localhost';
$dbname = 'serconeo_dbprod';
$user = 'serconeo_dbprod';
$pass = 'dbprodserconeo';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>