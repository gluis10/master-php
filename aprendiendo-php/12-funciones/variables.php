<?php
 echo '<h1>VARIABLES LOCALES Y GLOBALES CON LAS FUNCIONES Y EN LA PROGRAMACIÓN</h1>';
    
echo '<h4>Las variables globales son aquellas que se declaran fuera de una función y están disponibles'
 . 'para su uso dentro y fuera de la función.</h4>';

echo '<h4>Y las variables locales son las que se definen dentro de una función y no pueden ser usadas '
. 'fuera de la función, solo están disponibles dentro. A no ser que haga un return.</h4>';

//------------------------------------------------------------------------------
 
echo "<hr>";
echo '<h2>Ejercicio#1 Ejemplo de una función con una frase global</h2>';

/* En php antes de invocar una variable global o que este fuera de la función, tengo que decirle que es 
 * una variable global = (global $frase).
 * Una variable declarada dentro una función, solo puede ser imprimida dentro de esa
 * función si se usa un "echo", ahora si se usa un return sí deja dejar imprimirla fuera de la función.
 */

$frase = "- Ni los genios son tan genios, ni los mediocres son tan mediocres.";
echo $frase;

function holaMundo(){
    global $frase;
    echo "<h3>$frase</h3>";
}
holaMundo();
//------------------------------------------------------------------------------


echo "<hr>";
echo '<h2>Ejercicio#2 - Ejemplo de una variable declarada dentro de la función he imprimir'
. 'dentro de la función con un echo.</h2>';


function holaMundo2(){
    $year = 2019;
    echo "<h3>$year</h3>";
}

//echo $year; //Esto da error
holaMundo2();
//------------------------------------------------------------------------------


echo "<hr>";
echo '<h2>Ejercicio#3 - Ejemplo de una variable declarada dentro de la función he imprimir '
. 'fuera de la función usando el return.</h2>';


function holaMundo3(){
    $equipo = "Real Madrid";
    return $equipo;
}

echo holaMundo3();
echo "<hr>";
echo "<br><br>";
//------------------------------------------------------------------------------



echo '<h1>FUNCIONES VARIABLES</h1>';
echo '<h2>Ejercicio#1</h2>';
//Utilizar variables para el nombre de las funciones

function buenosDias (){
return "<h2>Hola, Buenos días<h2>";
}

function buenosTardes (){
return "<h2>Hey, que tal ha ido la comida<h2>";
}

function buenasNoches (){
return "<h2>¿Te vas a dormir ya? Buenas noches!<h2>";
}


$horario = "Noches";
$miFuncion = "buenas".$horario;
echo $miFuncion();

//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br><br><br><br><br><br><br>";
$web = "www/genryluisgt/academy/code.com";
echo "<h1>".$web."</h1>"; 
?>
