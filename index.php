<?php
//incluir el archivo que contiene las funciones
require_once("funcion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Funciones de cadenas</title>
</head>
<body>
    <h1>Funciones para cadenas</h1>
    <!--formulario para escribir una palabra o frase-->
    <form method="POST" action="">
        <label>Escribe una palabra o frase:</label><br><br>
        <input type="text" name="cadena" required>
        <br><br>
        <button type="submit" name="calcular">Ejecutar funcion</button>
    </form>
    <?php
    //comprobar que se haya enviado el formulario
    if (isset($_POST['calcular'])) {
        $cadena = $_POST['cadena'];
        echo "<h2>Resultados</h2>";
        //mostrar la cantidad de caracteres
        echo "Cantidad de caracteres: " . contarCaracteres($cadena) . "<br>";
        //mostrar la cadena en mayusculas
        echo "Mayúsculas: " . convertirMayusculas($cadena) . "<br>";
        //mostrar la cadena en minusculas
        echo "Minúsculas: " . convertirMinusculas($cadena) . "<br>";
        //mostrar la cadena invertida
        echo "Cadena invertida: " . invertirCadena($cadena) . "<br>";
        //comprobar si es palindromo
        echo "¿Es palíndromo?: " . esPalindromo($cadena) . "<br>";
        //mostrar la cantidad de vocales
        echo "Cantidad de vocales: " . contarVocales($cadena) . "<br>";
    }
    ?>
</body>
</html>
