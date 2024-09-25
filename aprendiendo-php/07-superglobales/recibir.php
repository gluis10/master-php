<?php
//variables super globales, para sacar información del servidor
echo '<h1>Obtener datos de un formulario por el método HTTP POST</h1>';

//Recirbir los parámetros GET nombre y apellido del HTML
//echo $_POST['nombre'];
echo "<h1>".$_POST['nombre']."</h1>";
echo "<h1>".$_POST['apellido']."</h1>";

var_dump($_POST);



//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br><br><br><br><br><br><br>";
$web = "www/genryluisgt/academy/code.com";
echo "<h1>".$web."</h1>"; 
/* Este es un comentario */
?>

