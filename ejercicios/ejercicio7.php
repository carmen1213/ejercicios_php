<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Ejercicio 6 Prueba IF PHP</h1>
<h2>**************************************************</h2>
<?php
$posicion = "arriba";

switch ($posicion){
    case "arriba" :
        echo "La variable contiene";
        echo "El valor arriba";
        break;
    case "abajo" :
        echo "La variable contiene";
        echo "El valor abajo";
        break;
    default:
        echo "La variable contiene otro valor";
        echo "distinto de arriba y abajo";
}

?>
</body>
</html>
