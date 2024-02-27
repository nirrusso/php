<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matematica</title>
</head>
<body>

<h3> matematica </h3>

    <?php

echo "SOMA";
echo "<br>";
$numero=150;
echo $numero; 
echo"<br>";
$numero1=100;
echo $numero1;
echo"<br>";
$soma = $numero + $numero1;
echo "<br>total:" . $soma;
echo"<hr>";

echo "SUBTRAÇÃO";
echo "<br>";
$numero3=50;
echo $numero3;
echo"<br>";
$numero4=20;
echo $numero4;
echo"<br>";
$total = $numero3 - $numero4;
echo "<br>total:" . $total;
echo "<hr>";

echo "MULTIPLICAÇÃO";
echo "<br>";
$numero5=8;
echo $numero5;
echo "<br>";
$numero6=149;
echo $numero6;
echo "<br>";
$m = $numero5 * $numero6;
echo "<br>total:" . $m;
echo "<hr>";

echo "DIVISÃO";
echo"<br>";
$numero5=10;
echo $numero5;
echo "<br>";
$numero6=3;
echo $numero6;
echo "<br>";
$d = $numero5 / $numero6;
echo "<br>total:" . $d;
echo "<hr>";

    ?>
</body>
</html>