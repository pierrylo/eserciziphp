<?php

// include 'enablerror.php';
require 'Task.php';

$dbname = $_POST['database'];

$params = [
    'host' => 'localhost',
    'user' => 'todos',
    'pwd' => '45GLItsxZCt0vtRs',
    'db'  => $dbname
];


if (!isset($dbname) || empty($dbname)) {
    die("Nome database non impostato");
};

try {
    // see https://www.php.net/manual/en/book.pdo.php

    // $conn= new PDO("mysql:host=127.0.0.1;dbname={$dbname}","root", "MDBroot");
    $dsn = sprintf('mysql:host=%s;dbname=%s', $params['host'], $params['db']);
    $conn = new PDO($dsn, $params['user'], $params['pwd']);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connessione stabilita al database {$dbname}<p/>";
} catch (PDOException $ex) {
    die("Connessione fallita <br>"  .  $ex->getMessage());
}

$query = "select * from {$_POST['tabella']}";

if ($_POST['query'] == 'p') {

    try {
        $stmt = $conn->prepare($query);
        $stmt->execute();
    } catch (PDOException $ex) {
        die("Errore <br>"  .  $ex->getMessage());
    }

    $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Task');

    require 'esempio3.1.view.php';
} else {
    try {
        $data = $conn->query($query, PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        die("PDOException <br>"  .  $ex->getMessage());
    } catch (\Throwable $th) {
        die("Throwable <br>"  .  $th->getMessage());
    }

    require 'esempio3.view.php';
}


// var_dump($results);
// die();

