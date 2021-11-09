<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="ejercicio19.css">
</head>
<style>
    html {
        background: url("ejercicios/mas ejercicios/tartan.png"), url("ejercicios/mas ejercicios/fuego-1f525.svg") right repeat-y;
    }

</style>
<body>
<h1 id="titulo_calculo">Datos recibidos a trav&eacute;s del formulario</h1>
<br>
<br>
<br>
<img src="../conversion_1.png">
<br>
<br>
<br>
<?php
$euros = $_GET["euros"];
if (isset($_GET["euros"])){
    $moneda = $_GET["moneda"];
    switch ($moneda){
        case "value1":
        echo " <p class='resultado'>La cantidad en D&oacute;lares es:  &nbsp;&nbsp; <span class='numeroresul'><strong>   " ,$euros*0.91, "</span></strong></p>";
        break;
        case "value2":
            echo " <p class='resultado'>La cantidad en Pesetas es : &nbsp;&nbsp; <span class='numeroresul'><strong>   " ,$euros*166, "</span></strong></p>";
            break;
    }
}
?>
<br>
</body>
</html>