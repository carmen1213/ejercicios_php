<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo de PHP</title>
</head>
<body>

<?php

$cadena="Esta cadena tiene 31 caracteres";
echo strlen($cadena);
echo "<br>";
$resultado=sprintf("8x5 = %d <br>" , 8*5);
echo $resultado , "<br>";
echo substr("Devuelve una subcadena de otra" , 9,3), "<br><br>";

if (chop("Cadena \n \n")== "Cadena")
    echo "Iguales <br><br>";
    echo str_replace("azul", "verde", "Atrapado en tu mirada azul, tan azul como en mis sueños..."), "<br>";

?>
</body>
</html>
