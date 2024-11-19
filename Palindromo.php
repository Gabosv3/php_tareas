<?php
function esPalindromo($cadena) {
    
    $cadena = preg_replace('/\s+/', '', strtolower($cadena));
    return $cadena === strrev($cadena);  
}

// Ejemplo de uso:
$texto = "Anita lava la tina";
var_dump(esPalindromo($texto));  
