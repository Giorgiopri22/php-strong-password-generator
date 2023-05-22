<?php

$lunghezzaPassword = $_GET['lunghezzaPassword'];

function passwordGenerator($lunghezzaPassword){
    $myPassword = '';
    $lettereMinuscole = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    $lettereMaiuscole = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    $numeri = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $caratteriSpeciali = ["!", "?", "%", "$", "&", "", "-", "+", "/"];
    $all = array_merge($lettereMinuscole,  $lettereMaiuscole, $numeri, $caratteriSpeciali);
  
    for ($i=0; $i <= $lunghezzaPassword; $i++) { 
        $random = rand(0, count($all));
        $myPassword .= $all[$random];
    }
    return $myPassword;
};