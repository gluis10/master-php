<?php
echo '<h1>Ejercicios</h1>';
 
echo "<hr>";
echo '<h2>Ejercicio#3 con While</h2>';

/* Eje#3 Escribir un programa que calcule y muestre el cuadrado de los primeros 40 números naturales. 
 * El cuadrado de un número se obtiene multiplicando ese número por sí mismo.
 * Ejemplo: El cuadrado de 3 es 3 * 3 = 9
 * PD. Utilizar bucle while
 */

$numero = 1;
$resultado;

while ($numero <=40) {
  $resultado = $numero*$numero;  
  echo "El cuadrado de $numero es: $resultado<br>";
  $numero++; // Incrementar el número para avanzar al siguiente
}

//----------------------------------------------------
echo "<hr>";
echo '<h2>Ejercicio#3 con For</h2>';
echo "<br>";

for($num=1; $num<=40; $num++){
    $resultado = $num*$num;  
    echo "El cuadrado de $num es: $resultado<br>";
}


echo "<br><br>";    
var_dump($numero, $resultado);

//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br><br><br><br><br><br><br>";
$web = "www/genryluisgt/academy/code.com";
echo "<h1>".$web."</h1>"; 
?>