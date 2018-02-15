<?php
global $pdo;
try {
    $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $dsn = "mysql:dbname=escola;host=localhost";
    $dbuser = "root";
    $dbpass = 729686;
    
    $pdo = new PDO($dsn, $dbuser, $dbpass, $opcoes);
    
} catch (PDOException $e) {
    echo "Falhou ".$e->getMessage();
    exit;
}

