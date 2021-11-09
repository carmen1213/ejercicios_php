<?php
session_start();
?>

<html>
<head>
    <title>Document</title>
</head>
<body>
<h1>Ejemplo de uso del select de html insertando datos manualmente</h1>
<form method="post">
    <?php

    if (!isset($_SESSION["tipo"])&& !isset($_POST["tipo"])){
        echo "<p>Familia de lentes:</p>";
echo "<select name='tipo' onchange='this.form.submit()'>";
    echo "<option>-- Seleccione tipo de lentes --</option>";
    echo "<option>Monofocal Stock</option>";
    echo "<option>Monofocal Fabricación</option>";
    echo "<option>Progresivos</option>";
    echo "<option>Bifocales</option>";
echo "</select>";
    }else{

     if (!isset($_SESSION["tipo"])){
        $_SESSION["tipo"]=$_POST["tipo"];
    }
     echo "<select><option disabled selected >".$_SESSION["tipo"]."</option></select><br><br>";
    if (!isset($_SESSION["modelo"])&& !isset($_POST["modelo"])) {
        echo "<p>Familia de lentes:</p>";
        echo "<select name='modelo' onchange='this.form.submit()'>";
        echo "<option>-- Seleccione modelo --</option>";
        echo "<option>Expert</option>";
        echo "<option>Neo-Silver</option>";
        echo "<option>HD-Gold</option>";
        echo "<option>Individual Platinum</option>";
        echo "<option>Digital Office</option>";
        echo "<option>Neo-Sport</option>";
        echo "<option>Taral (Mineral)</option>";
        echo "<option>Proaspherica (Mineral)</option>";
        echo "</select>";
    }else{
        if (!isset($_SESSION["modelo"])){
            $_SESSION["modelo"]=$_POST["modelo"];
        }
        echo "<select><option disabled selected >".$_SESSION["modelo"]."</option></select><br><br>";
        if (!isset($_SESSION["medida"])&& !isset($_POST["medida"])) {
            echo "<p>Familia de lentes:</p>";
            echo "<select name='medida' onchange='this.form.submit()'>";
            echo "<option>-- Seleccione la medida --</option>";
            echo "<option>14mm</option>";
            echo "<option>18mm</option>";

            echo "</select>";
        }else {
            if (!isset($_SESSION["medida"])) {
                $_SESSION["medida"] = $_POST["medida"];
            }
            echo "<select><option disabled selected >" . $_SESSION["medida"] . "</option></select><br><br>";
        }
    }
    }

    ?>

</form>
<br>

</body>
</html>
