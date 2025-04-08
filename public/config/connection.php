<?php
$type= 'mysql';
$host= 'localhost';
$dbname = 'pillpack';
$port='3306';

$password = '2004231010';
$user = 'root';

$options=[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$dsn = "$type:host=$host;dbname=$dbname;port=$port";
try {
    $pdo = new PDO($dsn, $user, $password, $options);
    // echo "Conexão com banco de dados realizada com sucesso.";
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), $e->getCode());
}
?>

