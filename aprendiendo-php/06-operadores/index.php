<?php
 //operadores aritméticos
echo 'Harry Potter';
echo '<h1>Operadores aritméticos</h1>';
$numero1 = 55;
$numero2 = 10;
$suma;
$numeroDivisor = 500;

$suma = $numero1 + $numero2;
echo $suma;
echo "<br>";
echo "El resultado de la suma es: " . ($numero1+$numero2). "<br>";
echo "El resultado de la resta es: " . ($numero1-$numero2). "<br>";
echo "El resultado del producto: " . ($numero1*$numero2). "<br>";
echo "El resultado de la división es: " . ($numeroDivisor/$numero2). "<br>";
echo "El resto de la división es: " . ($numero1%$numero2). "<br>";


//operadores de incremento y decremento
echo '<h1>Operadores de incremento y decremento</h1>';

$year = 2019;
$year++; //incremento
$year2 = 45;
$year2--; //decremento
$num2 = 5;
$num2 = $num2 + 1; //incremento
$num3 = 8;
$num3 = $num3 - 1; //decremento

echo "<h1>$year</h1>";
echo "<h1>$year2</h1>";
echo "<h1>$num2</h1>";
echo "<h1>$num3</h1>";


//operadores de asiganción
echo '<h1>Operadores de asignación</h1>';
$edad = 55;
echo $edad."<br>";
//$edad = $edad + 5;
echo ($edad+=5); //Se le suma 5 a la variable 55 = 60

$edad2 = 40;
echo $edad2."<br>";
//$edad = $edad - 5;
echo ($edad2-=5); //Se le suma 5 a la variable 55 = 60

//variables super globales, para sacar información del servidor
//Como recoger parámetros get por la URL y como recoger datos que nos llegan por post desde un formulario

echo "<br><br><br><br><br><br><br><br>";
$web = "www/genryluisgt/academy/code.com";
echo "<h1>".$web."</h1>"; 
/* Este es un comentario */
?>




