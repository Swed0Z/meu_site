<?php
$host = 'meticulous-empathy.railway.internal';
$dbname = 'railway';
$user = 'postgres';
$password = 'FlNPxxvQFTBlFDuPQIGjRKZeUTFHrOtl';
$port = '5432';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conexão bem-sucedida!';
} catch (PDOException $e) {
    echo 'Conexão falhou: ' . $e->getMessage();
}
?>