<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "projeto_js_php";

try {
    $pdo = new PDO("mysql:host=$server_name;dbname=$database_name", $user_name, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
