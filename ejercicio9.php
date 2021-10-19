<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Tablas de multiplicar</h1>
<?php


echo "<table border='10'>";
for ($a=0;$a<11;$a++) {
    echo "Tabla del ".$a." de multiplicar","<br>";
    echo "***************************","<br>";

    for ($i = 0; $i < 11; $i++) {

        $c = ($a * $i);
        echo "<tr><td>" . $a . " </td>";
        echo "<td>x</td>";
        echo "<td>" . $i . "</td>";
        echo "<td>=</td>";
        echo "<td>" . $c . "</td></tr>";


    }

}

echo"</table>"


?>
</body>
</html>

