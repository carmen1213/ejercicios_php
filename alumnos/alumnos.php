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
<div>
    <h1 id="Titulo1">Promedio de Notas 1Ev.</h1>
</div>
<div>
    <form action="promedio.php" METHOD="get">
        <p>Codigo del Alumno:</p>
        <input type="text" name="codigo" id="codigo"><br><br>
        <p>Nombre del Alumno:</p>
        <input type="text" name="nombre" id="nombre"><br><br>
        <p>Sistema de Gestión Empresarial</p>
        <input type="number" name="nota1" id="nota"><br><br>
        <p>Ingles Técnico:</p>
        <input type="number" name="nota2" id="nota"><br><br>
        <p>Programación multimedia y dispositivos móviles: </p>
        <input type="number" name="nota3" id="nota"><br><br>
        <p>Diseño de interfaces: </p>
        <input type="number" name="nota4" id="nota"><br><br>
        <p>Acceso a datos: </p>
        <input type="number" name="nota5" id="nota"><br><br>
        <p>Empresa iniciativa emprendedora: </p>
        <input type="number" name="nota6" id="nota"><br><br>
        <p>PSP :</p>
        <input type="number" name="nota7" id="nota"><br><br><br>

        <input type="submit" name="calcular" value="Calcular" id="boton">

    </form>
</div>

</body>
</html>