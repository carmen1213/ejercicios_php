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

    echo "<th bgcolor='#bdb76b'>Tabla del ".$a." de multiplicar","<br>";
    echo "***************************</th>","<br>";


    for ($i = 0; $i < 11; $i++) {

        $c = ($a * $i);
        echo "<tr><td bgcolor='#e9967a'>" . $a . " </td>";
        echo "<td bgcolor='#98fb98'>x</td>";
        echo "<td bgcolor='#e9967a'>" . $i . "</td>";
        echo "<td bgcolor='#98fb98'>=</td>";
        echo "<td bgcolor='#e9967a'>" . $c . "</td></tr>";


    }
    
}

echo"</table>"


?>
</body>
</html>

