<?php

include 'enablerror.php';
require 'Task.php';

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
    // see https://www.php.net/manual/en/book.pdo.php

    // $pdo= new PDO("mysql:host=127.0.0.1;dbname={$dbname}","root", "MDBroot");
    $dsn = sprintf('mysql:host=%s;dbname=%s', $params['host'], $params['db']);
    $pdo = new PDO($dsn, $params['user'], $params['pwd']);

    echo "Connessione stabilita al database {$dbname}";
} catch (PDOException $ex) {
    die("Connessione fallita <br>"  .  $ex->getMessage());
}

$tablename = $_POST['tabella'];

$results = null;

if ($_POST['query'] == 'p') {
    $stmt = $pdo->prepare("select * from {$tablename}");

    try {
        $stmt->execute();
    } catch (PDOException $ex) {
        die("Errore <br>"  .  $ex->getMessage());
    }
    
    $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Task');
}else{
    try {
        $data = $pdo->query("select * from {$tablename}", PDO::FETCH_ASSOC);
        // $results = $data->fetchAll();
    } catch (PDOException $ex) {
        die("Errore <br>"  .  $ex->getMessage());
    } catch (\Throwable $th){
        die("Errore <br>"  .  $th->getMessage());
    }

    
}



// var_dump($results);
// die();

if ($_POST['query'] == 'p') {
    require 'esempio3.1.view.php';
}else{
    require 'esempio3.view.php';
}
