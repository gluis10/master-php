<?php
echo '<h1>Condicionales IF y Else en PHP</h1>';
/* Condicionales IF-Ese estructura:
 * if(condición){
 *     instrucciones
 * } else {
 *      otras instrucciones
 * }
 */ 

$color = "verde";

if($color == "rojo"){
    echo "- El color rojo";
} else {
    echo "- El color NO es rojo";
}
echo "<br><br>";

//Ejemplo#2 operador comparación
$year = 2019;

if($year == 2019){
    echo "- Estamos en 2019";
} else {
    echo "- NO estamos en 2019";
}
echo "<br><br>";

//Ejemplo#2 con menor que
$year2 = 2028;

if($year2 < 2025){
    echo "- Es un año anterior a 2025";
} else {
    echo "- Es un año posterior a 2025";
}
echo "<br><br>";

//Ejemplo#3 operador distinto
$year3 = 2028;

if($year3 != 2025){
    echo "- Es un año diferente a 2025";
} else {
    echo "- Estamos en 2025";
}
echo "<br><br>";

//Ejemplo#4 operador distinto
$year3 = 2028;

if($year3 != 2028){
    echo "- Es un año diferente a 2028";
} else {
    echo "- Estamos en 2028";
}
echo "<br><br>";

//Ejemplo#4 operador mayor o igual
$year4 = 2022;

if($year4 >= 2020){
    echo "- Es un año mayor a 2020";
} else {
    echo "- Estamos en 2020";
}

echo "<hr>";
//------------------------------------------------------------------------------

echo '<h1>Condicionales con operadores de comparación</h1>';
//Ejemplo#1 Verificar si una persona es mayor de edad si sí, que se muestre en qué ciudad vive
$persona = "David";
$edad = 42;
$mayoria_edad = 18;
$ciudad = "Madrid";
$continente ="Asia";

if($edad >= $mayoria_edad){
    echo "<h1>$persona es mayor de edad</h1>";
    if($continente == "Europa"){
        echo "<h1>Y vive en $ciudad</h1>";
    } else {
        echo "<h1>$persona No es Europeo</h1>";
    }   
} else {
    echo "<h1>$persona No es mayor de edad</h1>";
}

echo "<hr>";
//------------------------------------------------------------------------------

echo '<h1>Ejemplo Else IF Anidado</h1>';
//Ejemplo#2 Verificar que día corresponde al número ingresado
$dia = 3;

if($dia ==1){
    echo "Es Lunes";
} elseif ($dia == 2) {
    echo "Martes";
} elseif ($dia == 3) {
    echo "Es Miercoles";
} elseif ($dia == 4) {
    echo "Es Jueves";
} elseif ($dia == 5) {
    echo "Es Viernes";
} else {
    echo "Es fin de semana";
}

echo "<hr>";
//------------------------------------------------------------------------------

echo '<h1>If else con operadores lógicos && AND y || OR</h1>';
//Ejemplo#3 Comprobar si un numero es mayor que 18 pero menor que 54
$edad3 = 18;
$edad4 = 64;
$edad_oficial = 20;

if ($edad_oficial >= $edad3 && $edad_oficial <= $edad4) {
    echo "Está en la edad de trabajar";
} else {
    echo "NO puede trabajar";
}
echo "<br><br>";

//Ejemplo#4 Operador lógico OR "||"
$pais = "España";

if($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
    echo "En este pais se habla Español";
} else {
    echo "En este pais NO se habla español";
}

echo "<hr>";
//------------------------------------------------------------------------------

echo '<h1>Condicionales Witch-Case';
//Ejemplo#5 Verificar que día corresponde al número ingresado
$dia = 5;
switch ($dia) {
    case 1:
        echo "<br>Es Lunes";
        break;
    case 2:
        echo "<br>Es Martes";
        break;
    case 3:
        echo "<br>Es Miercoles";
        break;
    case 4: 
        echo "<br>Es Jueves";
        break;
    case 5:
        echo "<br>Es Viernes";
        break;
    default:
        echo "<br>Es fin de semana";
        break;
}

echo "<hr>";
//------------------------------------------------------------------------------

//Operador GOTO: Sirve para saltar echos
echo '<h1>Operador GOTO';

goto mostrar_hasta_aqui;
echo "<h3>Instrucción 1</h3>";
echo "<h3>Instrucción 2</h3>";
echo "<h3>Instrucción 3</h3>";
echo "<h3>Instrucción 4</h3>";

mostrar_hasta_aqui:
echo "<h1>Me he saltado 4 echos</h1>";


//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br><br><br><br><br><br><br>";
$web = "www/genryluisgt/academy/code.com";
echo "<h1>".$web."</h1>"; 
/* Este es un comentario */
?>


