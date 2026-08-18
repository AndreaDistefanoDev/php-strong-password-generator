<?php

if (isset($_GET['length'])) {

    // se è stato passato il parametro della lunghezza 
    // si genera una password di quella lunghezza


    // Stringa con tutte le lettere minuscole
    $minuscole = 'abcdefghijklmnopqrstuvwxyz';

    // Stringa con tutte le lettere maiuscole
    $maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // Stringa con tutti i numeri
    $numeri = '0123456789';

    // Stringa con tutti i simboli
    $simboli = '!@#$%^&*()_+-=[]{}|;:,.<>/?';

    // variabile che contine tutti i caratteri insieme

    $caratteri = $minuscole . $maiuscole . $numeri . $simboli;

    // prendo un carattere casuale 

    $posizioneRandom = rand(0, strlen($caratteri) - 1);
    $carattereRandom = substr($caratteri, $PosizioneRandom, 1);

    // aggiungere il carattere casuale alla password

    $password="";
    for ($i = 0; $i < $_GET['length']; $i++) {

        $password .= $carattereRandom;

}

echo $password;

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
        <button>Genera</button>
    </form>
</body>

</html>