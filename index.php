<?php
    $usuario = "alejandro";
    $fechaActual = date("d/m/Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Web Bonita</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f0f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4a69bd;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        nav a {
            margin: 0 15px;
            color: #dff9fb;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 2rem;
        }

        .contenido {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: auto;
            text-align: center;
        }

        footer {
            background-color: #30336b;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }
    </style>
</head>
<body>

<header>
    <h2>Mi Sitio Web</h2>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Sobre mí</a>
        <a href="#">Contacto</a>
    </nav>
</header>

<main>
    <section class="contenido">
        <h1>¡Bienvenido, <?php echo $usuario; ?>!</h1>
        <p>Hoy es <?php echo $fechaActual; ?>.</p>
        <p>Esta es tu web PHP bonita 😎</p>
    </section>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Mi Web Bonita - Todos los derechos reservados</p>
</footer>

</body>
</html>
