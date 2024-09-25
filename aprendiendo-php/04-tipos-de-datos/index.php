<?php
 /* 
  Tipos de datos
  * HP es un lenguaje débilmente tipado, eso quiere no hay necesida especificar el tipo de dato
  * Entero (int/ integer) = 12;
  * flotante / decimales (float / double = 3.34;
  * Cadenas (String) = "Hola";
  * Boleano (bool) = true o flase; 
  * nulo (null)
  * Arreglos (array)
  *Objetos
 */

$numero = 100;
echo gettype($numero);//verificar el tipo de dato
echo "<br>";
$decimal = 25.5;
echo gettype($decimal);
echo "<br>";
$texto = "Soy un texto";
echo gettype($texto);
echo "<br>";
$verdadero = true;
echo $verdadero; 
echo "<br>";
echo gettype($verdadero);
echo "<br>";
$nula = null;
echo gettype($nula);

//Debuguear
$mi_nombre = "Genry Luis";
var_dump($mi_nombre); //mostrar deonde se ubica mi variable, linea, numero de letras y tipo

$ejemploArray[] = "Genry Luis";
$ejemploArray[] = "Genry Luis";
var_dump($ejemploArray); 

$hola_numero = 500;
$textoVariable = "Soy Gerny Luis $hola_numero"; //con comillas simples no deja
echo $textoVariable;
/*
 * \t: Para hacer un tab
 * \n: Salto de linea
 * Estos solo funciona en  la consola
 * \": Imprimir comilla doble dentro del un string usando el \
 */
?>


