<?php

$password = "";

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


    // aggiungere il carattere casuale alla password


    for ($i = 0; $i < $_GET['length']; $i++) {

        // prendo un carattere casuale 

        $posizioneRandom = rand(0, strlen($caratteri) - 1);
        $carattereRandom = substr($caratteri, $posizioneRandom, 1);


        $password .= $carattereRandom;
    }
}
