<?php
//contar los caracteres de una cadena
function contarCaracteres($cadena) {
    return strlen($cadena);
}
//convertir una cadena a mayusculas
function convertirMayusculas($cadena) {
    return strtoupper($cadena);
}
//convertir una cadena a minusculas
function convertirMinusculas($cadena) {
    return strtolower($cadena);
}
//invertir una cadena
function invertirCadena($cadena) {
    return strrev($cadena);
}
//comprobar si una palabra es palindromo
function esPalindromo($cadena) {
    $cadena = strtolower($cadena);
    $cadena = str_replace(" ", "", $cadena);
    if ($cadena == strrev($cadena)) {
        return "Sí es palíndromo";
    }
    else {
        return "No es palíndromo";
    }
}
//contar las vocales de una cadena
function contarVocales($cadena) {
    $vocales = 0;
    $cadena = strtolower($cadena);
    for ($i = 0; $i < strlen($cadena); $i++) {
        if ($cadena[$i] == "a" || $cadena[$i] == "e" || $cadena[$i] == "i" || $cadena[$i] == "o" || $cadena[$i] == "u") {
            $vocales++;
        }
    }
    return $vocales;
}
?>