<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p> El tipo de vivienda es :   <?php echo  validar((trim($_POST["tipo"])))?> <br></p>
<p> Esta en la zona :   <?php echo  validarzona((trim($_POST["zona"])))?> <br></p>
<p> La dirección es :  <?php echo  Dirección((trim($_POST["Dirección"]))) ?> <br></p>
<p>  Tiene : <?php echo numdom((trim($_POST["numdom"])))?> <br> </p>
<p> Su precio en euros es :  <?php echo Precio((trim($_POST["precio"])))?>   € <br> </p>
<p>El tamaño en metros cuadrados :  <?php echo (trim($_POST["tm2"]))?>   m^2 <br> </p>
<p> Estos son los extras seleccionados : <?php echo extras((trim($_POST["Ascendor"],$_POST["Piscina"],$_POST["Terraza"],$_POST["Jardin"],$_POST["Garaje"])))?> <br> </p>
<p>El tamaño en metros cuadrados :  <?php echo (trim($_POST["observaciones"]))?>  <br> </p>


<?php


function validar($tipo)
{
    if ($tipo.isSelected($tipo->getName("tipo")))
    {
        return $tipo;
    }else{
        return "No ha seleccionado ninguna opcion";
    }
}

function validarzona($zona)
{
    if ($zona.isSelected($zona->getName("zona")))
    {
        return $zona;
    }else{
        return "No ha seleccionado ninguna opcion";
    }
}
function Dirección($dirección)
{
    if (ctype_alnum(str_replace(' ','',$dirección))){
        return $dirección;
    }else{
        return "Dato incorrecto";
    }
}
function Numdom($numdom){
    if ($numdom.isSeleted($numdom->getName("numdom"))){
        return $numdom;
    }else{
        return "No ha seleccionado ninguna opcion";
    }
}
function Precio($precio){
    if (is_numeric($precio) ) {
        return $precio;
    }else{
        return "Dato incorrecto";
    }
}
function extras(){
    $Ascensor=($_POST["Ascendor"]);
    $Terraza=($_POST["Terraza"]);
    $piscina=($_POST["Piscina"]);
    $Jardin=($_POST["Jardin"]);
    $garaje=($_POST["Garaje"]);

    if ($Ascensor.isSelected($Ascensor->getName("Ascensor"))){
        return $Ascensor;
    }else if ($Terraza.isSelected($Terraza->getName("Terraza"))){
        return $Terraza;
    }else if ($piscina.isSelected($piscina->getName("Piscina"))){
        return $piscina;
    }else if ($Jardin.isSelected($Jardin->getName("Jardin"))){
        return $Jardin;
    }else if ($garaje.isSelected($garaje->getName("Garaje"))){
        return $garaje;
    }else{
        return "No ha seleccionado ninguna opcion";
    }
}
?>



</body>
</html>




