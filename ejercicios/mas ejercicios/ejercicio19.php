<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo de PHP</title>
    <link rel="stylesheet" href="ejercicio19.css">
</head>

<body>

<h1 id="titulo">Conversor de monedas</h1>
<form action="ejercicio19_1.php" METHOD="get">
    <p id="introduzca">Introduzca la cantidad de euros : <br><br></p>
<input type="text" name="euros" id="euros"><br><br>
    <p id="convertir">Convertir a :</p>
<select name="moneda" id="conversion" required>
    <option value="value1">D&oacute;lares</option>
    <option value="value2">Pesetas</option>
</select>
<br>
<br>
    <br>
    <br>
<input type="submit" value="Calcular" id="boton">
    </form>
</body>
</html>
