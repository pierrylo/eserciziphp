<?php

$params = [
    'host' => 'localhost',
    'user' => 'root',
    'pwd' => 'MDBroot',
    'db'  => $_POST['database']
    ];
    

$dbname ="";
$tablename = "";

$dbname=$_POST['database'];

if (!isset($dbname) && empty($dbname)) {
    die("Nome database non impostato");
};

try {
    // $pdo= new PDO("mysql:host=127.0.0.1;dbname={$dbname}","root", "MDBroot");
    $dsn = sprintf('mysql:host=%s;dbname=%s', $params['host'], $params['db']);
    $pdo = new PDO($dsn, $params['user'], $params['pwd']);
    echo "Connessione stabilita al database {$dbname}";
} catch (PDOException $ex) {
    die("Connessione fallita <br>"  .  $ex->getMessage());
}

$tablename = $_POST['tabella'];

$stmt = $pdo->prepare("select * from {$tablename}");

try {
    $stmt->execute();
} catch (PDOException $ex) {
    die("Tabella inesistente <br>"  .  $ex->getMessage());
}

$results = $stmt->fetchAll(PDO::FETCH_OBJ);

var_dump($results);