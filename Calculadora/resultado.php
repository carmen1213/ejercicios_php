<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>
<style>
    html{
        background-image: linear-gradient(to right, blueviolet,mediumorchid,mediumseagreen,plum,violet , lightpink);
    }
    body{
        text-align: center;
        font-size: 70px;
        font-family: Lucida Handwriting;
    }
    #titulo2{
        font-size: 100px;
        font-family: Papyrus;
    }
</style>
<body>

<h1 id="titulo2">El resultado es : </h1>
<?php
if(isset($_REQUEST['calcular'])){
    $n1=$_REQUEST['numero1'];
    $n2=$_REQUEST['numero2'];
    $op=$_REQUEST['opciones'];

    switch($op){
        case 0: echo "$n1 + $n2 = ".sumar($n1,$n2);break;
        case 1: echo "$n1 - $n2 = ".restar($n1,$n2);break;
        case 2: echo "$n1 * $n2 = ".multiplicar($n1,$n2);break;
        case 3: echo "$n1 / $n2 = ".dividir($n1,$n2);break;
    }
}


function sumar($num1,$num2){
    $suma=$num1+$num2;
    return $suma;
}
function restar($num1,$num2){
    $resta=$num1-$num2;
    return $resta;
}
function multiplicar($num1,$num2){
    $multi=$num1*$num2;
    return $multi;
}
function dividir($num1,$num2){
    $divi=$num1/$num2;
    return $divi;
}

?>
</body>
</html>
