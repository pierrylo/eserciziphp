<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Elenco <?= $scelta ?></title>
</head>

<body>
    <div>
        <h2>Persona</h2>
        <ul>
            <?php
            foreach ($persona as $key => $value) {
                echo "<li><strong>{$key}</strong> {$value}</li>";
            }
            ?>
        </ul>
    </div>
    <div>
        <h2>Persone</h2>
        <ul>
            <?php
            foreach ($persone as $key => $value) {
                echo "<li><strong>{$key}</strong> {$value}</li>";
            }
            ?>
        </ul>
    </div>
    <div>
        <p>
            <a href=<?= $_SERVER['HTTP_REFERER'] ?>>Ritorna all'esempio2</a>
        </p>
        <p>
            <a href=<?= "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['HTTP_HOST']}/elena" ?>>Ritorna alla pagina iniziale</a>
        </p>
    </div>
</body>

</html>