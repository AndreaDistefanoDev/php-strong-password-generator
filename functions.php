<?php

$password = "";

if (isset($_GET['length'])) {

    // se è stato passato il parametro della lunghezza 
    // si genera una password di quella lunghezza


    // Stringa con tutte le lettere minuscole
    $lettere = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';


    // Stringa con tutti i numeri
    $numeri = '0123456789';

    // Stringa con tutti i simboli
    $simboli = '!@#$%^&*()_+-=[]{}|;:,.<>/?';

    $caratteri = "";


    // controllo se sia stato selezionato il parametro lettere
    if (isset($_GET['lettere']) && $_GET['lettere'] == "on") {
        $caratteri .= $lettere;
    }

    // controllo se sia stato selezionato il parametro numeri
    if (isset($_GET['numeri']) && $_GET['numeri'] == "on") {
        $caratteri .= $numeri;
    }
    // controllo se sia stato selezionato il parametro simboli
    if (isset($_GET['simboli']) && $_GET['simboli'] == "on") {
        $caratteri .= $simboli;
    }



    for ($i = 0; $i < $_GET['length']; $i++) {

        // prendo un carattere casuale 

        $posizioneRandom = rand(0, strlen($caratteri) - 1);
        $carattereRandom = substr($caratteri, $posizioneRandom, 1);


        $password .= $carattereRandom;
    }
}
