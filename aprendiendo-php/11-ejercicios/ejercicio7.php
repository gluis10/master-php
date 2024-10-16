<?php
echo '<h1>Ejercicios</h1>';
 
echo "<hr>";
echo '<h2>Ejercicio#7 Hacer un programa que muestre todos los números impares entre dos n</h2>';

/* Eje7# Hacer un programa que muestre todos los números impares entre dos numeros
 * que nos lleguen por la URL($_GET)
 * Usar if para verificar si realmente me llegan esos números
 */


if (isset($_GET['numero1']) && isset($_GET['numero2'])){  
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    if($numero1<$numero2){
        for($i=$numero1; $i<=$numero2; $i++){
        
            if($i%2 !=0){
                echo "<h2>$i Es IMPAR</h2>";
            } else {
                echo "<h2>$i Es PAR</h2>";
            }
        } 
    } else {
        echo "<h2>El numero 1 debe ser menor al numero 2</h2>";
    }
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
