<?php
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; 
        }
    }
    return true; 
}

// Ejemplo de uso:
$numero = 7;
var_dump(esPrimo($numero));  
