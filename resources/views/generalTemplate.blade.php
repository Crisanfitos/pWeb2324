<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://pWeb2324.test/themes/css/generalTemplate.css">
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
            <li><a href="/servicios">Servicios</a></li>
            <li><a href="/sobreNosotros">Conócenos</a></li>
            <li><a href="/contacto">Contacto</a></li>
            <li class="submenu">
                <a href="">Consumidores</a>
                <ul>
                    <li><a href="/consumidor/loginRegister">Login and Register</a></li>
                    <li><a href="/consumidor/perfil">Perfil</a></li>
                    <li><a href="/consumidor/entregas">Entregas</a></li>
                    <li><a href="/consumidor/afluencia">Afluencia</a></li>
                </ul>
            </li>
            <li>
                <a href="">Puestos</a>
                <ul>
                    <li><a href="/puesto/loginRegister">Login and Register</a></li>
                    <li><a href="/puesto/perfil">Perfil</a></li>
                    <li><a href="/puesto/catalogo">Catalogo</a></li>
                    <li><a href="/puesto/realizarPedido">Realizar Pedidos</a></li>
                    <li><a href="/puesto/entregas">Entregas</a></li>
                    <li><a href="/puesto/temp">Temperatura del Puesto</a></li>
                </ul>
            </li>
            <li>
                <a href="">Productores</a>
                <ul>
                    <li><a href="/productor/loginRegister">Login and Register</a></li>
                    <li><a href="/productor/perfil">Perfil</a></li>
                    <li><a href="/productor/catalogo">Catalogo</a></li>
                    <li><a href="/productor/pedidos">Pedidos</a></li>
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
    <script src="http://pWeb2324.test/js/generalTemplate.js"></script>
</body>

</html>