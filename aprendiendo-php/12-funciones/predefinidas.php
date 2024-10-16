<?php
//------------------------------------------------------------------------------

echo '<h1>FUNCIONES PREDEFINIDAS</h1>';

//Debuguear
$nombre = "Genry luis";
var_dump($nombre);

//Fechas
echo date('d-m-y');
echo "</br>";

//Fecha formato unix|
echo time();
echo "</br>";

//Funciones matemáticas
echo "Raíz cuadra de 10 es: ".sqrt(10);
echo "</br>";

//Si no le paso parámetro me sale numero aleatorio
echo "Numero aleatorio entre 10 y 40: ".rand(10, 15);
echo "</br>";

//Sacar PI
echo "El valor de PI es: ".pi();
echo "</br>";

//Redondear un número
echo "Redondear: ".round(7.891234);
echo "</br>";

//Redondear un número indicando el numero decimales
echo "Redondear: ".round(7.891234, 2);
echo "</br>";

echo "<hr>";
echo '<h1>FUNCIONES INTERNAS DEL LENGUAJE PHP</h1>';

//Muestra el tipo de dato de la variable que le pasamos
echo gettype($nombre);
echo "</br>";

//Valida el tipo de dato que le pasamos
if(is_string($nombre)){
    echo "Esa variable es un string"; 
} 
echo "</br>";


//Valida si la variable que le pasamos existe
if(isset($edad)) {
    echo "La variable existe";
} else {
    echo "La variable no existe";
}
echo "</br>";



//Elimina los espacios de mi texto
$frase = "     Mi contenido   ";
var_dump(trim($frase));
echo "</br>";

//Eliminar variables / índices
$year = 2020;
unset($year);
echo "</br>";

//Comprobar variable vacía, null = vacía también, true = !vacía también
$texto = "";
if(empty(trim($texto))) {
    echo "La variable texto esta vacia";
} else {
    echo "La variable texto tiene contenido";
}
echo "</br>";

//Contar caracteres de una cadena
$cadena = 12345;
echo strlen($cadena);
echo "</br>";


//Encontrar la posición de un caráctere pasándole la variable y el caracter
$frase = "La vida es bella";
echo strpos($frase, "i");
echo "</br>";


//Remplazar palabras de un String
$parrafo = "La vida es bella";
$parrafo = str_replace("vida", "moto", $parrafo);
echo $parrafo;
echo "</br>";

//Convertir el párrafo anterior a Mayúscula y a Minúscula

echo "</br></br>";
echo strtolower($parrafo);
echo "</br>";
echo strtoupper($parrafo);

//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br><br><br><br><br><br><br>";
$web = "www/genryluisgt/academy/code.com";
echo "<h1>".$web."</h1>"; 
?>