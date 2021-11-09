<?php
session_start();
$_SESSION["medida"]=$_POST["medida"];
echo $_SESSION["tipo"]."<br>";
echo $_SESSION["modelo"]."<br>";
echo $_SESSION["medida"]."<br>";
?>


