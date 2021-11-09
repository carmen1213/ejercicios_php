<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo de PHP</title>
</head>
<body>

<?php
print "En un array hemos almacenado los n&uacute;meros pares: <br>";

for ($i = 0 ; $i<10; $i++)
    $pares[$i] = $i * 2;
    for ($i = 0; $i < 10; $i++)
        echo "$pares[$i]<br>";
?>
</body>
</html>
