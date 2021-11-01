<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="alumnos.css">
</head>
<body>
<h1 id="Titulo2">Promedio de Notas 1Ev.</h1>
<div id="promedio2">
<?php
$num1 = $_GET["nota1"];
$num2 = $_GET["nota2"];
$num3 = $_GET["nota3"];
$num4 = $_GET["nota4"];
$num5 = $_GET["nota5"];
$num6 = $_GET["nota6"];
$num7 = $_GET["nota7"];
$suma = 0;
$alumno= (trim($_GET["nombre"]));

$suma = ($num1+$num2+$num3+$num4+$num5+$num6+$num7);

echo $num1."+".$num2."+".$num3."+".$num4."+".$num5."+".$num6."+".$num7."=".$suma."<br><br>";

$promedio = $suma /7;

echo "El promedio de " .$alumno. " de la primera evaluación es : <br><br> " . $promedio. "<br>";


?>
</div>
</body>
</html>


