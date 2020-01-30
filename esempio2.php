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
        <form method="POST" action="esempio2.logic.php">
            <label>Nome</label></br>
            <input type="text" name="nome" value="" required></br>
            <label>Età</label></br>
            <input type="number" name="eta" value="" required min="0" max="120"></br>
            <label>Professione</label></br>
            <input type="text" name="professione" value=""></br>
            <label>Sesso</label></br>
            <input type="radio" name="sesso" value="M">Uomo
            <input type="radio" name="sesso" value="F">Donna<br>
            <p>
                <input type="submit" name="submit" value="Invia">
                <button type="reset">Pulisci</button>
            </p>
            
        </form>
    </div>
    <div>
        <?php
            if(isset($_GET['message']) && !empty($_GET['message'])){
                echo "<h2>{$_GET['message']}</h2>";
            }
        ?>
    </div>
</body>

</html>