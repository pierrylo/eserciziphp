<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Elenco</title>
</head>

<body>
    <div>
        <h2>Todos</h2>
        <ul>
            <?php
            foreach ($results as $res ) {
                echo "<li><strong>{$res->description}</strong> {$res->completed}</li>";
            }
            ?>
        </ul>
    </div>
    <div>
        <p>
            <a href=<?= $_SERVER['HTTP_REFERER'] ?>>Ritorna all'esempio3</a>
        </p>
        <p>
            <a href=<?= "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['HTTP_HOST']}/elena" ?>>Ritorna alla pagina iniziale</a>
        </p>
    </div>
</body>

</html>