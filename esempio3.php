<?php include 'enablerror.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Esempio 3</title>
</head>

<body>
    <h2>Scegli cosa visualizzare</h2>
    <div>
        <form method="POST" action="esempio3.logic.php">
        <p></p>
            <input type="text" name="database"> Database<br>
            <input type="text" name="tabella" value=""> Tabella<br>
            <input type="radio" name="query" value="p" checked>Prepared
            <input type="radio" name="query" value="q">Query<br>
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
    </p>

</body>

</html>