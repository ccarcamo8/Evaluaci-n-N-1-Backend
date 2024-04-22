<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conIngenio</title>
    <link href="css\styles.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <header>
    <img src="imgs\con-ingenio-solo-colores.png" alt="Logo de conIngenio">
        <h1>conIngenio</h1>
    </header>
    <nav>
        <a href="#home">Home</a>
        <a href="#servicios">Nuestros Servicios</a>
        <a href="#contacto">Contáctenos</a>
        <a href="#nosotros">Nosotros</a>
    </nav>
    <section id="home">
        <h2>Bienvenido a nuestra página</h2>
        <p>Brindamos soluciones digitales integrales para tu empresa.</p>
    </section>
    <!-- Aquí se incluirá el contenido de servicios.php -->
    <?php include_once 'servicios.php'; ?>
    <section id="contacto">
        <h2>Contáctenos</h2>
        <p>Para consultas o solicitudes de información, puede contactarnos utilizando los siguientes medios:</p>
        <ul>
            <li>Dirección física: Av. Providencia 1234, Oficina 601, Providencia, Santiago, Chile</li>
            <li>Teléfono: +56 2 1234 5678</li>
            <li>Correo electrónico: info@coningenio.cl</li>
            <li>Dominio de la página web: <a href="http://www.coningenio.cl">www.coningenio.cl</a></li>
        </ul>
    </section>
    <!-- Aquí se incluirá el contenido de nosotros.php -->
    <?php include_once 'nosotros.php'; ?>
    <footer>
    <p>@2024 conIngenio. Todos los derechos reservados.</p>
</footer>

</body>
</html>
