<!-- php/header.php -->
<!DOCTYPE html>
<html lang="es"> <!-- Definimos el tipo de documento HTML y el idioma de la página como español -->
<head>
    <meta charset="UTF-8"> <!-- Indicamos la codificación de caracteres para evitar problemas con caracteres especiales -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuramos la vista para dispositivos móviles -->
    <title>Vicencio - Tienda de Tenis</title> <!-- Título que aparecerá en la pestaña del navegador -->
    <link rel="stylesheet" href="../css/styles.css"> <!-- Enlace al archivo CSS para aplicar estilos a la página -->
    <link rel="stylesheet" href="contacto.css">
    <!-- CARRUSEL -->
    <link rel="stylesheet" href="../css/orbit_1.2.3.css">
    <script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="../js/jquery.orbit-1.2.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery.orbit-1.2.3.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#featured').orbit();
    });
    </script>
    <!-- FIN CARRUSEL -->
</head>
<body>
    <!-- Encabezado principal de la página -->
    <header >
    <!-- Logo con enlace a la página principal -->
        <a href="inicio.php">
            <img src="../img/logo.png" alt="Logo de la Empresa" class="logo">
        </a>
        <nav >
            <ul class="menu">
                <li><a href="inicio.php">INICIO</a></li>
                <li><a href="galeria.php">GALERIA</a></li>
                <li><a href="contacto.php">CONTACTO</a></li>
                <li><a href="quienes_somos.php">QUIENES SOMOS</a></li>  
                <li><a href="encuesta.php">ENCUESTA</a></li>
            </ul>
        </nav>
    </header>