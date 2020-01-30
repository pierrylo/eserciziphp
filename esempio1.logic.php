<?php
// include 'enablerror.php';

if (isset($_GET['scelta']) && !empty($_GET['scelta'])) {
    $scelta = $_GET['scelta'];
    $dati = [];
    // echo "Hai scelto, $scelta";
    if ($scelta == 'attori') {
        $dati = ['Valeria Golino', 'Sophia Loren', 'Alberto Sordi', 'Riccardo Scamarcio'];
    } elseif ($scelta == 'registi') {
        $dati = ['Federico Fellini', 'Valeria Golino', 'Vittorio De Sica', 'Matteo Garrone'];
    }
} else {
    header("Location: {$_SERVER['HTTP_REFERER']}?message=Non hai selezionato nulla");
    die();
}


require 'esempio1.view.php';
