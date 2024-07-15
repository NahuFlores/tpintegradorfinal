<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>CuidadoDigitalcontacto</title>
</head>
<body>
    <div class="contenedor">
        <header>
            <div class="logo-titulo">
                <a href="index.php">
                    <i class="fa-regular fa-circle-dot"></i>
                    <h1>CuidadoDigital</h1>
                </a>
            </div>
            <nav id="nav">
                <a href="index.php">Inicio</a>
                <a href="tienda.php">Tienda</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php" class="selected">Contacto</a>
                <span id="close-responsive">
                    <i class="fa-solid fa-xmark"></i>
                </span>
            </nav>
            <div id="nav-responsive">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="carrito">
                <span class="total-compra">$ 55,000.00</span>
                <a href="carrito.php">
                    <span class="icono-carrito">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <div class="total-item-carrito">
                            2
                        </div>
                    </span>
                </a>
            </div>
        </header>

        <section class="contenedor-seccion">
            <div class="fondo-seccion"></div>
            <div class="header-seccion">
                <div class="col">
                    <strong><span class="link-blanco">Inicio</span> / Contacto</strong>
                </div>
                <div class="centro">
                    <h2>Contacto</h2>
                </div>
                <div class="col busqueda">
                    <strong> </strong> 
                </div>
            </div>

            <section class="contacto">
                <div class="fila">
                    <div class="col">
                        <form action="">
                            <input type="text" placeholder="Nombre">
                            <input type="text" placeholder="Correo">
                            <textarea name="" id="" placeholder="Mensaje"></textarea>
                            <button class="btn-contacto">Enviar Consulta</button>
                        </form>
                    </div>
                    <div class="col derecha">
                        <h2>CONTACTNOS <br>AHORA</h2>
                        <img src="https://cdn.icon-icons.com/icons2/3706/PNG/512/car_service_information_help_support_technical_icon_229988.png" alt="">
                    </div>
                </div>
            </section>

        </section>
    </div>

    <script src="script.js"></script>
</body>
</html>