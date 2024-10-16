<?php
echo '<h1>Estructuras de control Iteradores y Bucles</h1>';
/* Estructura de un do-while:
 * do {
 *      Bloque de instrucciones
 * } while(condición); //Evaluamos la condición
 */ 
echo "<hr>";
echo '<h2>Bucle Do-while</h2>';

//Eje#1 Mostrar la edad de una persona

$edad = 18;
$contador = 1;

do{
    echo "Tienes acceso al local privado $contador.</br>";
    $contador++;
}while($edad >= 18 && $contador <= 10);

/* Mientras que el contador sea menor o igual a 10 va a iterar
 */ 


//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br><br><br><br><br><br><br>";
$web = "www/genryluisgt/academy/code.com";
echo "<h1>".$web."</h1>"; 
/* Este es un comentario */
?>
