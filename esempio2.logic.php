<?php

$persona = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $persona['nome'] = $_POST['nome'];
    $persona['eta'] = $_POST['eta'];
    $persona['professione'] = $_POST['professione'];
    $persona['sesso'] = $_POST['sesso'];
}

$persona2 = [
    'nome'  => 'Mario Rossi',
    'eta'   => 30,
    'professione'   => 'Programmatore',
    'sesso' => 'M'

];

// $persone = [$persona, $persona2];
$persone = [];
$persone[0] = $persona;
$persone[1] = $persona2;



// echo "<pre>";
// var_dump($persona);
// var_dump($persone);
// echo "</pre>";
// die();

require 'esempio2.view.php';