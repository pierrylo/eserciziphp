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
            while ($row = $data->fetch()) {
                echo "<li><strong>Descrizione: </strong>{$row["description"]}<br/>
                <strong>Completato: </strong>{$row["completed"]}<br/>
                <strong>Data: </strong> {$row["date"]}</li>";
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