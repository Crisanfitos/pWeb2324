<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://pWeb2324.test/themes/css/test.css">
</head>

<body>
    <div class="main-banner">
        <div class="logo">
            <img src="http://pWeb2324.test/uploads/images/logomercado.png" alt="Logo">
        </div>
    </div>

    <div class="header" id="navbar">

        <ul class="topnav">
            <li><a href="/">Inicio</a></li>
            <li class="submenu">
                <a href="/servicios">Servicios</a>
                <ul>
                    <li><a href="/servicios/locales">Locales</a></li>
                    <li><a href="/servicios/productos">Productos</a></li>
                </ul>
            </li>
            <li><a href="/conocenos">Conócenos</a></li>
            <li><a href="/contacto">Contacto</a></li>

            <li class="submenu right">
                <a href="">Usuario</a>
                <ul>
                    <li><a href="/user/consumer">Consumidor</a></li>
                    <li><a href="/user/local">Local</a></li>
                    <li><a href="/user/productor">Productor</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="content">
        
@yield('content')

    </div>
    <footer>
        <div class="footer-left">
            <div class="contact-info">
                <p><strong>Correo:</strong> ejemplo@dominio.com</p>
                <p><strong>Teléfono:</strong> 123-456-7890</p>
                <p><strong>Dirección:</strong> Calle Ejemplo, Ciudad, País</p>
            </div>
        </div>

        <button onclick="scrollToTop()" class="scroll-to-top">Volver al principio</button>

        <div class="footer-right">
            <p>&copy; 2024 Nombre de la Empresa</p>
            <div class="social-links">
                <a href="#" class="social-icon" title="Instagram">Instagram<i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon" title="Facebook">Facebook<i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </footer>
    <script src="http://pWeb2324.test/js/test.js"></script>
</body>

</html>