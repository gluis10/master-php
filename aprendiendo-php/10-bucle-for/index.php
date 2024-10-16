<?php
echo '<h1>Estructuras de control Iteradores y Bucles</h1>';
/* Estructura de un For:
 * for (variable contador, condición, incremeto contador){
 *      // Bloque de instrucciones
 * }
 */ 
echo "<hr>";
echo '<h2>Bucle For</h2>';

//Eje#1 Sumar todos los numeros de 1 al 100 y me muestra el resultado final 
$resultado = 0;

/* Forma Junior
 * for($i=0; $i<=100; $i=$i+1){
 *    $resultado = $resultado + $i;
 * }
 */
//Forma Senior
for($i=0; $i<=100; $i++){
    $resultado += $i;
}
echo "El resutado es $resultado";

//------------------------------------------------------------------------------
echo "<hr>";
echo '<h2>El mismo de while, Comprobar que nos llega un parámetro número por GET por la URL</h2>';
// Eje#2. Comprobar que nos llega un parámetro número por GET por la URL

if(isset($_GET['numero'])){
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}
var_dump($numero);

//------------------------------------------------------------------------------
echo "<hr>";
echo '<h2>El mismo de while, Mostrar la tabla de multiplicar del numero obtenido de la url anteriormente</h2>';
//Mostrar la tabla de multiplicar del numero obtenido de la url anteriormente
echo "<h2>Tabla de multiplicar $numero</h2>";
    
for($contador=1; $contador<=10; $contador++){
    echo "$numero x $contador = ".($numero*$contador)."</br>";
}
// Mientras que el contador sea menor o igual a 10 va a iterar

//------------------------------------------------------------------------------
echo "<hr>";
echo '<h2>El mismo de while, Mostrar la tabla de multiplicar del numero obtenido de la url anteriormente</h2>';
echo '<h2>En este caso usando al break si se ingresa un numero = 45</h2>';
//Mostrar la tabla de multiplicar del numero obtenido de la url anteriormente
echo "<h3>Tabla de multiplicar $numero</h3>";
    
for($contador=1; $contador<=10; $contador++){
    
    if($numero == 45){
        echo "No se pueden mostrar estas operaciones prohibidas";
        break;
    }
    
    echo "$numero x $contador = ".($numero*$contador)."</br>";
}
// Mientras que el contador sea menor o igual a 10 va a iterar
// El i valida el numero que llega por la url
// El for entra el bucle comprueba algo y hace un break, es decir sale del bucle inmediatamente


//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br><br><br><br><br><br><br>";
$web = "www/genryluisgt/academy/code.com";
echo "<h1>".$web."</h1>"; 
?>
