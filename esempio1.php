<?php include 'enablerror.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pagina iniziale</title>
</head>

<body>
    <h2>Scegli cosa visualizzare</h2>
    <div>
        <form method="GET" action="esempio1.logic.php">
            <input type="radio" name="scelta" value="attori"> Attori<br>
            <input type="radio" name="scelta" value="registi"> Registi<br>
            <input type="submit" name="submit" value="Invia">
            <button type="reset">Pulisci</button>
        </form>
    </div>
    <div>
        <?php
        if (isset($_GET['message']) && !empty($_GET['message'])) {
            echo "<h2>{$_GET['message']}</h2>";
        }
        ?>
    </div>
    <p>
    <a href=<?= "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['HTTP_HOST']}/elena" ?>>Ritorna alla pagina iniziale</a>
        <a href="<?php $_SERVER['HTTP_REFERER'] ?>">Ritorna alla pagina iniziale</a>
        <?php var_dump($_SERVER) ?>
    </p>

</body>

</html>