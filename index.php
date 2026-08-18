<?php

require_once './functions.php';

if ($password != "") {

    // startiamo la sessione
    session_start();

    // salviamo la password in una variabile di sessione
    $_SESSION['password'] = $password;

    // dirottiamo l'utente alla pagina password.php
    header("Location: ./password.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1>Password Generator</h1>

    <hr>

    <form action="">
        <input type="number" min="5" max="20" name="length" id="length">
        <label for="length">Lunghezza della password</label>
        <div>
            <input type="checkbox" name="lettere" id="lettere">
            <label for="lettere">Lettere</label>
            <input type="checkbox" name="numeri" id="numeri">
            <label for="numeri">Numeri</label>
            <input type="checkbox" name="simboli" id="simboli">
            <label for="simboli">Simboli</label>
        </div>
        <button>Genera</button>
    </form>

    <hr>

    <?php
    if ($password != "") {
    ?>
        <h2> La tua password di <?php echo $_GET['length']; ?> caratteri è: </h2>
        <pre><?php echo $password; ?></pre>
    <?php
    }
    ?>
</body>

</html>