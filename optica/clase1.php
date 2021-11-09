
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
<h1>Ejemplo de uso del select de html insertando datos manualmente</h1>
<form method="post" onchange="this.form.submit()">
    <p>Familia de lentes:</p>
    <select name="tipo">
        <option>-- Seleccione tipo de lentes --</option>
        <option>Monofocal Stock</option>
        <option>Monofocal Fabricación</option>
        <option>Progresivos</option>
        <option>Bifocales</option>
    </select>
    <?php
    session_start();
    $_SESSION["tipo"]=$_GET["tipo"];

    ?>
    <select name="modelo">
        <option>Seleccione modelo</option>
        <option>Expert</option>
        <option>Neo-Silver</option>
        <option>HD-Gold</option>
        <option>Individual Platinum</option>
        <option>Digital Office</option>
        <option>Neo-Sport</option>
        <option>Taral (Mineral)</option>
        <option>Proaspherica (Mineral)</option>
    </select>
    <?php
    session_start();
    $_SESSION["medida"]=$_GET["medida"];

    ?>
    <select name="medida" >
        <option>Seleccione la medida</option>
        <option>14mm</option>
        <option>18mm</option>
    </select>
    <?php
    session_start();
    $_SESSION["modelo"]=$_GET["modelo"];

    ?>
</form>
<br>


</body>
</html>
