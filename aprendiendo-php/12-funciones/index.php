<?php
echo '<h1>Funciones</h1>';
echo '<h4>Son conjuntos de órdenes agrupados por un nombre concreto. Es decir, dentro de una función '
. 'yo puedo tener un montón de instrucciones que se van a ejecutar. Y esa función la puedo volver a '
        . 'llamar una y mil veces, la puedo reutilizar y la puedo abstraer lógicas de mi programa dentro de esa '
        . 'función y luego ir llamándola o invocándola de forma que yo pueda tener 20 mil instrucciones '
        . 'y dentro de una función y no tener que repetir el código, sino simplemente llamo la función '
        . 'y esa función me hace algo en concreto.</h4>';
echo "<hr>";

/* Estrucuctura
 * fuction nameFuction(){
 *  //bloque de instrucciones
 * }
 */

//------------------------------------------------------------------------------

echo '<h2>Ejercicio#1 Crear una función que nos imprima 4 cosas por pantalla</h2>';
//Esta función no recibe ningún parámetro

function muestreNombres(){
    echo "Victor Robles<br>";
    echo "Genry Luis<br>";
    echo "Karol Sical<br>";
    echo "Frank Gutierres<br>";
}
//Invocar función
muestreNombres();
//muestreNombres(); //Puedo imprimir las veces que yo quiero
//------------------------------------------------------------------------------


echo "<hr>";
echo '<h2>Eje#2 Hacer una función que muestre la tabla de multiplicar de un número enviado como parámetro</h2>';

function tabla($numero) {
    echo "<h3>Tabla de multiplicar del numero: $numero</h3>";
    
    for($i=1; $i<=10; $i++) {
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br>";
    }
    
}
tabla(8);

/*Usar un bluce for para mostrar la tabla de mutiplicar del numero que le paso por parámetro
 * y que me lo mutiplique de 1 al 10.
 */
//------------------------------------------------------------------------------
echo "<hr>";
echo '<h2>Eje#3 Mostrar la tabla de multiplicar de un numero que recibe por la url, reutilizando la función tabla</h2>';
//Invocando la función anterior

if (isset($_GET['numerox'])){
    tabla($_GET['numerox']);
} else {
    echo "NO existe un número obtenido por la url, para sacar la tabla";
}



//------------------------------------------------------------------------------
echo "<hr>";
echo '<h2>Eje#4 Usar un for para mostrar todas la tabla de 1 al 10 reutilizando la función tabla</h2>';
//Invocando la función anterior

for($i=1; $i<=10; $i++){
    tabla($i);
}
//------------------------------------------------------------------------------



/*Vamos a ver como pasar varios parámetros a una función.
 * Un parámetro es una variable para almacenar un valor
 */

echo "<hr>";
echo '<h2>Eje#5 Hacer un función que calcule las operaciones de dos numeros, pasando más de un párametro a la función.</h2>';

function calculadora($num1, $num2) {
    //Instrucciones a ejecutar
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $producto = $num1 * $num2;
    $division = $num1 / $num2;
    
    echo "El resultado de la suma es: $suma<br/>";
    echo "El resulatado de la resta es : $resta<br/>";
    echo "El resultado el la multiplicación es : $producto<br/>";
    echo "El resultado de la división es: $division<br/>";
}

calculadora(12, 4); echo "<br>";
calculadora(8, 2);
//Podemos involucrar las veces que queremos
//Estos parámtros son obligatorios, sino me da error. Aunque existen parámetros opcionales

//------------------------------------------------------------------------------



/*PARÁMETROS OPCIONALES
 * El ejercicio anterior, los parámetros eran obligatorias enviarle un valor, de lo contrario da error.
 * Agregar un parámetro igualado a false hace que ese parámetro no es obligatoriamente.
 * Adicional y para mejorar:
 * Con los dos ifs validamos: si la variable negrita existe y es true: ejecutamos el bloque de instrucciones
 */

echo "<hr>";
echo '<h2>Eje#6 Verificar como imprimir datos opcionales</h2>';

function calculadora2($num1, $num2, $negrita = false) {
    //Instrucciones a ejecutar
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $producto = $num1 * $num2;
    $division = $num1 / $num2;
    
    if($negrita == true){
        echo "<h2>";
    }
    
    echo "El resultado de la suma es: $suma<br/>";
    echo "El resulatado de la resta es : $resta<br/>";
    echo "El resultado el la multiplicación es : $producto<br/>";
    echo "El resultado de la división es: $division<br/>";
    
    if($negrita == true){
        echo "</h2>";
    }
}

calculadora2(12, 4, true, 4); 
echo "<br>";
calculadora2(8, 2, false);
//------------------------------------------------------------------------------




/*El RETURN EN UNA FUNCIÓN
 * Una función normalmente no puede imprimir cosas por pantalla por ella sola.
 * Normalmente la definición de función tiene que hacer algo y devolver un resultado.
 * De Forma que "echos" en función no es una buena práctica.
 * La función debería ser un return, significa siempre tiene que devolver algo la función, en lugar de imprimir.                                                                                                                                                                                          
 */
echo "<hr>";
echo '<h2>Eje#7 Funciones con RETURN Parte 1</h2>';

function devuelveElNombre($nombre){
    return "El nombre es: $nombre";
}
echo devuelveElNombre("Genry Luis");
//------------------------------------------------------------------------------




/*El RETURN EN UNA FUNCIÓN
 * La función normalmente siempre devuelve un true o false o ya sea boleando
 * En este caso devueve true porque estamos imprimiendo cosas
 * Para hacer la función perfecta y hacer que devuelva algo y devuelva un String, me creo una variabe cadena_texto que por defecto viene vacía;  
 * Pero comforme vayamos ejecutando, se va ir modificando el valor de esa variable
 * Concatenándole el h1 y todo
 * Así en lugar de imprimir, la variable concatena ese valor 
 * Return nos devuelce $cadena_texto                                                                                                                                                                                    
 */


echo "<hr>";
echo '<h2>Eje#8 Funciones con RETURN Parte 2</h2>';

function calculadora3($num1, $num2, $negrita = false) {
    //Instrucciones a ejecutar
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $producto = $num1 * $num2;
    $division = $num1 / $num2;
    
    $cadena_texto = "";
    
    if($negrita == true){
        $cadena_texto .= "<h2>";
    }
    
    $cadena_texto .= "El resultado de la suma es: $suma<br/>";
    $cadena_texto .= "El resulatado de la resta es : $resta<br/>";
    $cadena_texto .= "El resultado el la multiplicación es : $producto<br/>";
    $cadena_texto .= "El resultado de la división es: $division<br/>";
    
    if($negrita == true){
        $cadena_texto .= "</h2>";
    }
    return $cadena_texto;
}

echo calculadora3(8, 4, true);
//------------------------------------------------------------------------------


/*EJECUTAR O LLAMAR FUNCIONES DENTRO OTRA FUNCIONES
 * Creamos un función que devuelve el nombre
 * Y Creamos un función que devuelve el apellido
 * Y las dos funciones ya solo las llamo en la función principal     
 * Esto sirve cuando tengo funciones muy extensas y quiero minimizarlo                                                                                                                                                                              
 */
echo "<hr>";
echo '<h2>Eje#9 Ejecutar o llamar Una Función dentro de Otra</h2>';

//Función que devuelve nombre
function getNombre($nombre1){
    $texto = "El nombre es: $nombre1";
    return $texto;
}

//Función que devuelve apellido
function getApellido($apellido1){
    $texto = "El apellido es: $apellido1";
    return $texto;
}

//Función principal que devuelve nombre y apellido invocando sus funciones
function devuelveElNombre2($nombre1, $apellido1){
    $texto = getNombre($nombre1)."<br>".getApellido($apellido1);
    
    return $texto;
}
echo devuelveElNombre2("Genry", "Luis");
//------------------------------------------------------------------------------




//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br><br><br><br><br><br><br>";
$web = "www/genryluisgt/academy/code.com";
echo "<h1>".$web."</h1>"; 
?>
