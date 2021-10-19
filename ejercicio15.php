<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo de PHP</title>
</head>
<body>

<?php
$dias = array( "Martes ", "Miercoles ","Jueves ");
array_unshift($dias,"Lunes ");
array_push($dias,"Viernes ","Sabado ","Domingo ");
for ($i = 0 ; $i<6; $i++)
    echo $dias[$i];
?>
</body>
</html>