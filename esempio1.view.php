<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Elenco <?= $scelta ?></title>
</head>

<body>
    <div>
        <h2>Elenco <?= $scelta ?> ciclo foreach1</h2>
        <ul>
            <?php
            foreach ($dati as $dato) {
                echo "<li>$dato</li>";
            }
            ?>
        </ul>
    </div>
    <div>
        <h2>Elenco <?= $scelta ?> ciclo foreach2</h2>
        <ul>
            <?php foreach ($dati as $dato) : ?>
                <li><?= $dato ?></li>

            <?php endforeach; ?>
        </ul>
    </div>
    <div>
        <h2>Elenco <?= $scelta ?> ciclo for</h2>
        <ul>
            <?php
            for ($i = 0; $i <= count($dati); $i++) {
                echo "<li>{$i}&nbsp;{$dati[$i]}</li>";
            }
            ?>
        </ul>
    </div>
    <div>
        <p>
            <a href=<?= $_SERVER['HTTP_REFERER'] ?>>Ritorna all'esempio1</a>
        </p>
        <p>
            <a href=<?= "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['HTTP_HOST']}/elena" ?>>Ritorna alla pagina iniziale</a>
        </p>
    </div>
</body>

</html>