<?php

function generatePassword($password_length)
{
    $password = '';

    //array dei caratteri che si inseriranno nella password generata
    $lowercase = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    $uppercase = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    $numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $special_characters = ["!", "@", "#", "$", "%", "^", "&", "*", "-", "+", "/", "?"];

    //unisco gli array
    $range_characters = array_merge($lowercase, $uppercase, $numbers, $special_characters);

    //ciclo for per la generazione della password
    for ($i = 1; $i <= $password_length; $i++) {
        // per ogni ciclo prendo un numero randomico tra 0 e lunghezza range_characrter
        $random = rand(0, count($range_characters) - 1);
        //concateno il carattere preso in posizione random 
        $password .= $range_characters[$random];
    }

    //la funzione restituisce password
    return $password;
}

?>