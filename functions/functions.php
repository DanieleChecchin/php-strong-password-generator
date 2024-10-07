<?php

function getRandomPassword($length)
{
    //tutti i caratteri che possono formare una password
    $characters = [
        'abcdefghijklmnopqrstuvwxyz',
        'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        '123456789',
        '%&@?!'
    ];

    //Creo una stringa vuota che comporrà la password 
    $password = '';

    //Ciclo for che itera su tutti i $characters per il numero di volte inserito nell'input
    for ($i = 0; $i < $_GET['password']; $i++) {

        //Itero randomicamente su uno dei 4 elementi presenti sull'array $characters
        $randomElement = rand(0, 3);

        //Creo una variabile d'appoggio
        $dizionario = $characters[$randomElement];

        //Calcolo la lunghezza di ognuno dei 4 elementi
        $randomIndex = rand(0, strlen($dizionario) - 1);

        //Per creare la password selezione l'array characters[elemento[numero random tra 0 e l'index dell'ultimo carattere]]
        $password .= $dizionario[$randomIndex];
    }
    return $password;
}