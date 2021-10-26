<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="formulario.css">
</head>



<body background="url">

<h2 id="titulo">Formulario:</h2>
<form action="form.php" METHOD="post">
   <li> Nombre:
    <input type="text" name="nombre" maxlength="50"><br><br> </li>
    <li>Numero de DNI:
    <input type="text" name="DNI"><br><br></li>
    <li>Dirección:
    <input type="text" name="Dirección"> <br><br></li>
    <li>Codigo Postal:
    <input type="number" name="codigopostal" ><br><br></li>
    <li>Teléfono:
    <input type="number" name="telefono" ><br><br></li>
    <li>Email:
    <input type="email" name="email"><br><br></li>
    <li>Codigo del Vendedor:
    <input type="text" name="Codigovendedor"><br><br></li>
    <li>Monto total de la factura:
    <input type="text" name="monto"><br><br></li> <br>
    <input type="submit" name="submit" value="Enviar" id="botonenvi">
    <br><br>

</form>

</body>
</html>
