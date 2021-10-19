<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
    <link rel="stylesheet" href="/Calculadora/calculadora.css">

</head>

<body>
<div>
    <input type="text" id="text">
</div>

<div id="keyboard">

            <table>
                <tr>
            <td><button class="operator" id="clear">C</button></td>
            <td><button class="operator" id="backspace">CE</button></td>
            <td><button class="operator" id="%">%</button></td>
                    <td><button class="operator" id="division">&#247;</button></td>
                </tr>
                <tr>
            <td><button class="number" id="7">7</button></td>
                    <td><button class="number" id="8">8</button></td>
                    <td><button class="number" id="9">9</button></td>
                    <td><button class="operator" id="multiplica">&times;</button></td>
                </tr>
                <tr>
           <td> <button class="number" id="4">4</button></td>
                    <td><button class="number" id="5">5</button></td>
                    <td> <button class="number" id="6">6</button></td>
                    <td> <button class="operator" id="resta">-</button></td>
                </tr>
                <tr>
                <td><button class="number" id="1">1</button></td>
                <td><button class="number" id="2">2</button></td>
                <td><button class="number" id="3">3</button></td>
                <td><button class="operator" id="suma">+</button></td>
                </tr>
                <tr>
                <td> <button class="empty" id="empty"></button></td>
                <td><button class="number" id="0">0</button></td>
                <td><button class="empty" id="empty"></button></td>
                <td><button class="operator" id="igual">=</button></td>
                </tr>



</table>
</div>

<script src="/Calculadora/calculadora.js"></script>
</body>
</html>