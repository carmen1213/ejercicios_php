<?php
session_start();
$_SESSION["modelo"]=$_POST["modelo"];
?>

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
<form method="post" name="form" action="lentes4.php">
<select name="medida" >
    <option>Seleccione la medida</option>
    <option>14mm</option>
    <option>18mm</option>
</select>
    <input type="submit">
</form>
</body>
</html>
