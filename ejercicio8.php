<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>Tablas de multiplicar</p>
<?php
echo "Tabla del 1 de multiplicar","<br>";
echo "***************************","<br>";
$a = 1;

for($i=0;$i<11;$i++)
{
    $b = ($a."x".$i);
    echo $b."=".($a*$i)."<br>";
}
?>
</body>
</html>
