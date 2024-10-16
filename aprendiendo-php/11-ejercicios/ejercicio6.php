<?php
echo '<h1>Ejercicios</h1>';
 
echo "<hr>";
echo '<h2>Ejercicio#6. Imprirmir en pantalla la tablas de mutiplicar de 1 al 10 en una tabla de HTML </h2>';

/* Eje6# Imprirmir en pantalla la tablas de mutiplicar de 1 al 10 en una tabla de HTML
 */

echo "<table border='1'><tr>"; //Inicio tabla

echo "<tr>"; //Inicio fila 1 de seldas
    for($cabecera=1; $cabecera<=10; $cabecera++){
        echo"<td>Tabla del $cabecera</td>";
    }
echo "</tr>"; //Cierre fila 1 de seldas 

echo "<tr>"; //Incicio fila 2 deceldas
    for($i=1; $i<=10; $i++){
        echo "<td>";
        
        for($x=1; $x<=10; $x++){
            echo "$i x $x = ".($i*$x)."<br>";
        }
        echo "</td>";
    }
echo"</tr>"; //Cierre fila 2 de celdas
echo "</table>"; //Cierre de la tabla


echo "<br><br>";    
var_dump($_GET);


/* El primer bucle nos pinta las celdas
 * El Segundo bucle nos pinta el contenido dentro de esas celdas
 * Utilizando i para coger el número de la tabla que necesitamos
 * Y volviendo a iterar para sacar la multiplicación correspondiente y mostrar el resultado
 */








//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br><br><br><br><br><br><br>";
$web = "www/genryluisgt/academy/code.com";
echo "<h1>".$web."</h1>"; 
?>
