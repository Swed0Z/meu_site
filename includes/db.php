<?php
$host = 'localhost';
$dbname = 'Livros';
$user = 'postgres';
$password = '24183416';

try {
    // Adiciona o parâmetro sslmode=disable à string de conexão
    $dsn = "pgsql:host=$host;dbname=$dbname;sslmode=disable";
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conexão bem-sucedida!';
} catch (PDOException $e) {
    echo 'Conexão falhou: ' . $e->getMessage();
}
?>