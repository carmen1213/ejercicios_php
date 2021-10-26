<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="formulario.css">
</head>

<body>

<?php if($_POST["submit"]): ?>
    <h2>Mostrar datos enviados</h2>
    Nombre : <?php echo ($_POST["nombre"]) ?> <br>
    DNI :  <?php echo ($_POST["DNI"]) ?> <br>
    Dirección: : <?php echo ($_POST["Dirección"]) ?> <br>
    Codigo Postal: <?php echo ($_POST["codigopostal"]);?> <br>
    Telefono : <?php echo ($_POST["telefono"])?> <br>
    Email : <?php echo ($_POST["email"])?> <br>
    Codigo del Vendedor : <?php echo ($_POST["Codigovendedor"])?> <br>
    Monto de la factura: <?php echo ($_POST["monto"]) ?> <br>


<?php endif; ?>

<ul>
    <?php if($errores = ""){
        foreach ($errores as $error){
            echo "<li> $error </li>";
        }
    }
    ?>
</ul>

</form>

<script src="formulario.js"></script>
</body>
</html>


