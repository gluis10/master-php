<!--<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
</head>
<body>
     Cabecera 
    <header>
        
        <div class="cabecera">
           <h1>Includes en PHP</h1>
           <ul>
               <li><a href="index.php">Inicio</a></li>
               <li><a href="sobremi.php">Sobre mí</a></li>
               <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
        <hr/>
    </header>-->

<!-- Invocar cabecera -->
<?php
include 'includes/cabecera.php';
?>
    
    <!-- Contenido -->
    <main>
        
        <div>
            <h2>Esta es la página de Contacto</h2>
            <p>Texto de prueba de la página de Contacto</p>
        </div>
        <hr/>
    </main>
   
<!-- Invocar el footer -->
<?php
include 'includes/footer.php';
?>
    
<!--     Footer 
    <footer>
        Todos los derechos reservados &copy; Genry Uwualdo Luis Alvarado <?=date('Y')?>
    </footer>
    
    
</body>
</html>-->
