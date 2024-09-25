<?php
 //constantes
 //es contenedor de información que no puede variar

 define('nombre', 'Genry Luis');
 define('web', 'genryluis.com');

//la constante se muestra sin el dolar
echo nombre;
echo "<h1>".nombre."</h1>";
echo "<h1>".web."</h1>";

//A diferencia de la variable se puede cambiar el valor
$web = "www/genryluisgt/code.com";
$web = "www/genryluisgt/academy/code.com";
echo "<h1>".$web."</h1>";

//Constantes predefinidas
echo PHP_OS; //Muestra el sistema operativo que estamos usando 
echo "<br>";
echo PHP_VERSION; //Muestra la version de PHP
echo "<br>";
echo PHP_EXTENSION_DIR; //Muestra la extension del PHP instalada
echo "<br>";
echo __LINE__; //Muestra la linea de código donde estamos imprimiendo este valor
echo "<br>";
echo __FILE__; //Muestra la ruat completa de este archivo
echo "<br>";

function holaMundo(){
    echo __FUNCTION__;
}
holaMundo();

//Existen muchas más constantes predifinidas
       
 /* Este es un comentario */
?>
