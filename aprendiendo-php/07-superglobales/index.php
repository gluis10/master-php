<?php
//variables super globales, para sacar información del servidor
echo 'Harry Potter';
echo '<h1>Variables SuperGlobales en PHP</h1>';

//variables del servidor
echo '<h2>Variables del servidor';
echo '<h1>';
echo $_SERVER['SERVER_ADDR']; //Me saca la dirección IP de mi servidor web
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_NAME']; //Me muestra el dominio que tenga (dominio=url)
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE']; //Muestra el servidor web que se está usando
echo '</h1>';

echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT']; //Muestra el nombre del navegador que se está usando
echo '</h1>';

echo '<h1>';
echo $_SERVER['REMOTE_ADDR']; //Me saca la dirección IP del cliente
echo '</h1>';

//--------------------------------------------------------------------------------------------------------------------------------


echo "<br><br><br><br><br><br><br><br>";
$web = "www/genryluisgt/academy/code.com";
echo "<h1>".$web."</h1>"; 
/* Este es un comentario */
?>


