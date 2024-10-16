<?php
echo '<h1>Ejercicios</h1>';
 
echo "<hr>";
echo '<h2>Ejercicio#4. Recoger dos números por la URL (Método GET) y hacer todas las operaciones básicas </h2>';

/* Eje4# Recoger dos números por la URL (Método GET) y hacer todas las operaciones básicas 
 * de una calculadora (suma, resta, producto, division).
 * Usar if para verificar si realmente me llegan esos números
 */


if (isset($_GET['numero1']) && isset($_GET['numero2'])){  
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    echo "<h2>Calculadora</h2>";
    echo "El resultado de la suma es: ". ($numero1+$numero2)."<br/>";
    echo "El resultado de la resta es: ". ($numero1-$numero2)."<br/>";  
    echo "El resultado de la producto es: ". ($numero1*$numero2)."<br/>";  
    echo "El resultado de la division es: ". ($numero1/$numero2)."<br/>";  
    
    
} else {
    echo "<h2>Intruce correctamente los valores por la url</h2>";
}

echo "<br><br>";    
var_dump($_GET);




//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br><br><br><br><br><br><br>";
$web = "www/genryluisgt/academy/code.com";
echo "<h1>".$web."</h1>"; 
?>