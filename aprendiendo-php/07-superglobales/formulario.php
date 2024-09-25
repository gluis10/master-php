<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Croome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en PHP</title>
</head>

<!-- 
//Como recoger parámetros get por la URL y como recoger datos que nos llegan por post desde un formulario
//Como utilizar las variables superglobales GET y POST para recorger información que nos llega pot el protocolo HTTP
-->

<!-- 
* Los parámetros GET se recibe en una página web sueler ser como este ejemplo: ?nombreParámetró = valor
* Y luego concatenando parámetro tras parámetro
-->
<!-- 
* Atributo action: Indica a qué página me lleva este formulario
* Es name del input va ser la clave de la variable get que voy recoger 
-->

<body>
    <h1>Formulario en PHP</h1>
    <form method="POST" action="recibir.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>
        </p>
        <p>
            <label for="apellidos">Apellido</label>
            <input type="text" name="apellido"/>
        </p>
        <input type="submit" value=Enviar datos"/>
    </form>
</body>
</html>

