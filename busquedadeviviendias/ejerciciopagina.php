<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="viviendas.css">
    <title>Document</title>
</head>
<body>

<img src="logopequeño.jpg"><h1>Busqueda de viviendas en Valencia</h1>

<form action="ejercicioviviendas2.php" METHOD="post">
<table>
    <tr>
    <td><p>Tipo de vivienda</p>
    <input type="radio" id="html" name="tipo">
    <label for="html">Piso</label><br>
    <input type="radio" id="html" name="tipo">
    <label for="html">Adosado</label><br>
    <input type="radio" id="html" name="tipo">
    <label for="html">Chalet</label><br>
    <input type="radio" id="html" name="tipo">
        <label for="html">Casa</label><br></td>

    <td><p>Zona</p>

    <input type="radio" id="zona" name="zona">
    <label for="zona">Valencia capital</label><br>
    <input type="radio" id="zona" name="zona">
    <label for="zona">Poblados del norte</label><br>
    <input type="radio" id="zona" name="zona">
    <label for="zona">Poblados del sur</label><br>
    <input type="radio" id="zona" name="zona">
        <label for="zona">Poblados del oeste</label><br></td>

    </tr>
    <tr>
    <td><p>Dirección</p>
        <input type="text" id="direccion" name="Dirección"></td>


    <td><p>Numero de dormitorios</p>
    <input type="radio" id="numerodormi" name="numdom">
    <label for="numerodormi">1</label><br>
    <input type="radio" id="numerodormi" name="numdom">
    <label for="numerodormi">2</label><br>
    <input type="radio" id="numerodormi" name="numdom">
    <label for="numerodormi">3</label><br>
    <input type="radio" id="numerodormi" name="numdom">
    <label for="numerodormi">4</label><br>
    <input type="radio" id="numerodormi" name="numdom">
    <label for="numerodormi">5</label></td>

    <td><p>Precio</p>
        <input type="text" id="precio" name="precio">
        <label for="direccion" id="precios">  €</label></td>

    </tr>
    <tr>
    <td><p>Tamaño en metros cuadrados</p>
        <input type="text" id="tm2" name="tm2"><label for="tm2" id="precios">  m^2</label></td>

    <td><p>Extras</p>
    <input type="radio" id="Ascensor"  name="Ascensor"  >
    <label for="extras">Ascensor</label><br>
    <input type="radio" id="Terraza"  name="Terraza"  >
    <label for="extras">Terraza</label><br>
    <input type="radio" id="Piscina"  name="Piscina"  >
    <label for="extras">Piscina</label><br>
    <input type="radio" id="Jardin"  name="Jardin" >
    <label for="extras">Jardín</label><br>
    <input type="radio" id="Garaje"  name="Garaje" >
        <label for="extras">Garaje</label><br></td>

   <td> <p>Observaciones</p>
       <input type="text" id="observaciones"></td>
    </tr>

    <tr id="boton">
        <td>

        </td>
        <td>
            <br>
            <br>
            <input type="submit" name="submit" value="Enviar" id="botonenvi">
        </td>
        <td>

        </td>
    </tr>
</table>

</form>

</body>
</html>

