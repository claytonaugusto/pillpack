<?php

$pdo = new PDO("mysql:host=localhost;dbname=pillpack", "root", "2004231010");
try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}