<?php
echo '<h1>Estructuras de control Iteradores y Bucles</h1>';
/* Estructura de un while:
 * while(condición){
 *     bloque de instrucciones (pueden a ver mas instrucciones)
 * } 
 */ 
echo "<hr>";
echo '<h2>Bucle While</h2>';
//------------------------------------------------------------------------------
//Ejemplo#1 Muestre los numeros de 1 al 100
$numero = 0;

while($numero <= 100) {
    echo $numero;
    
    if($numero != 100){ //Este if verifica si numero es distinto a 100 le añadimos la coma
        echo ", ";
    }  
    $numero++;
}

/* Mientras el numero sea menor o igual 100 entra al bucle y ejecuta el bloque de instrucciones
 * Lo que hace el bloque de instrucciones es mostrarme el numero por pantala y además aumenta la variable $numero
 *  en 1 para que el bucle se siga ejecutando hasta que $numero valga 100.
 * Cuando $numero llega a 100 la variable aumenta en 101 y ya no se ejecuta porque al entrar en la condición, ya no se cumple.
 */ 

//------------------------------------------------------------------------------
echo "<br><br>";
echo "<hr>";

/* Eje#2. Con el IF vamos a comprobar que nos llega un parámetro número por GET
 * a travez de la URL.
 * Evaluamos si nos llega un parámetro número y lo guardamos en la variable $numero
 * En caso de que no llegue, (else), $numero va valer 1.
 * El isset() comprueba si existe una variable
 * Cuando recibimos un valor en la url es un siempre es un String
 * El int castea la variable, o sea cambiarle el tipo de dato
 */ 

if(isset($_GET['numero'])){
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}
var_dump($numero);

//Mostrar la tabla de multiplicar de un número o del parámetro que vamos obtener por GET (url)
echo "<h2>Tabla de multiplicar $numero</h2>";


$contador = 1;
while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."</br>";
    $contador++;
}
// Mientras que el contador sea menor o igual a 10 va a iterar
 

//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br><br><br><br><br><br><br>";
$web = "www/genryluisgt/academy/code.com";
echo "<h1>".$web."</h1>"; 
/* Este es un comentario */
?>
