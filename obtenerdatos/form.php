<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="formulario.css">

</head>
<style>
    body{
        background: url(Fondos-para-páginas-web.jpg);
    }

</style>

<body>
<h2 id="titulo2">Mostrar datos enviados</h2>





<table border="7" align="center" id="tabla">
  <tr> <td> Nombre :</td>  <?php echo "<td>" . nombres((trim($_POST["nombre"]))) .  "</td>"?> <br> </tr>
    <tr> <td> DNI : </td> <?php echo "<td>" . DNI((trim($_POST["DNI"]))).  "</td>" ?> <br>
    <tr> <td>  Dirección: </td> <?php echo "<td>" .Dirección((trim($_POST["Dirección"]))).  "</td>" ?> <br>
    <tr> <td> Codigo Postal:</td> <?php echo "<td>" .CodigoPostal((trim($_POST["codigopostal"]))).  "</td>"?> <br>
    <tr> <td> Telefono :</td> <?php echo "<td>" .Telefono((trim($_POST["telefono"]))).  "</td>"?> <br>
    <tr> <td> Email :</td> <?php echo "<td>" .Email((trim($_POST["email"]))).  "</td>"?> <br>
    <tr> <td> Codigo del Vendedor : </td> <?php echo "<td>" .Codigovendedor((trim($_POST["Codigovendedor"]))).  "</td>"?> <br>
    <tr> <td> Monto de la factura:</td> <?php echo "<td>" .Total((trim($_POST["monto"]))).  "</td>" ?> <br>
</table>
<?php

   function nombres ($nombre){
       if (ctype_alpha($nombre)){
           return $nombre;
       }else{
           return "Dato incorrecto";
       }
   }

function DNI ($DNI){
    if (ctype_alpha(substr($DNI,-1)) && is_numeric(substr($DNI,0,-1)) && strlen($DNI)==9){
        return $DNI;
    }else{
        return "Dato incorrecto";
    }
}
function Dirección ($Direccion){
    if (ctype_alnum(str_replace(' ','',$Direccion))){
        return $Direccion;
    }else{
        return "Dato incorrecto";
    }
}
function Email($email){
    if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
      return $email;
    }else{
        return "Dato incorrecto";
    }
}
function CodigoPostal($Codigopostal){
    if (is_numeric($Codigopostal) && strlen($Codigopostal) == 5) {
        return $Codigopostal;
    }else{
        return "Dato incorrecto";
    }
}
function Telefono($Telefono){
    if (is_numeric($Telefono) &&strlen($Telefono) == 9) {
        return $Telefono;
    }else{
        return "Dato incorrecto";
    }
}
function Codigovendedor($Codigovendedor){
    if (ctype_alnum($Codigovendedor) &&strlen($Codigovendedor) == 3) {
        return $Codigovendedor;
    }else{
        return "Dato incorrecto";
    }
}
function Total($total){
    if (is_numeric($total) ) {
        return $total;
    }else{
        return "Dato incorrecto";
    }
}
?>

</body>
</html>


