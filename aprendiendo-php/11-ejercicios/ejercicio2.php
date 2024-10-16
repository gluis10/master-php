<?php
echo '<h1>Ejercicios</h1>';
 
echo "<hr>";
echo '<h2>Ejercicio#2. Escribir un programa que muestre los números pares de 1 al 100 </h2>';

//Eje2# Escribir programa que muestre los números pares de 1 al 100 

for($numero=1; $numero<=100; $numero++){
    if($numero%2 == 0){
        echo ", $numero";
    }
} 

echo "<br><br>";    
var_dump($i);




//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br><br><br><br><br><br><br>";
$web = "www/genryluisgt/academy/code.com";
echo "<h1>".$web."</h1>"; 
?>