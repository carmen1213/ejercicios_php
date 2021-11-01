<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
    <link rel="stylesheet" href="calculadora.css">

</head>

<body>
<div id="tituloprin">
<h1 id="titulo1">Calculadora</h1>
<br>
</div>
<div id="form">
<form method="post" action="resultado.php">
    <input type="text" name="numero1" id="num1"> <br> <br> <br>
    <div id="elementos1">
    <select name="opciones" id="elementos">
        <option value="0">Sumar</option>
        <option value="1">Restar</option>
        <option value="2">Multiplicar</option>
        <option value="3">Dividir</option>
    </select><br> <br> <br></div>

    <input type="text" name="numero2" id="num2"><br><br> <br>
    <div id="botoncalc">
    <input type="submit" name="calcular" value="Calcular" id="boton">
        </div>
</form>
</div>

</body>
</html>