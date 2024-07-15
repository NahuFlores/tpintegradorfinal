<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>CarritoServicios</title>
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
                <a href="contacto.php">Contacto</a>
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
                    <strong><span class="link-blanco">Inicio</span> / Carrito</strong>
                </div>
                <div class="centro">
                    <h2>Mi Carrito</h2>
                </div>
                <div class="col busqueda">
                    
                </div>
            </div>

            <section class="mi-carrito">
                <div class="productos-carrito">
                    <div class="fila">
                        <div class="col descripcion">
                            <strong>Descripción</strong> 
                        </div>
                        <div class="col talle">
                            <strong>Servicio</strong>
                        </div>
                        <div class="col color">
                            <strong>Duración</strong>
                        </div>
                        <div class="col cantidad">
                            <strong>Cantidad</strong>
                        </div>
                        <div class="col eliminar">
                            <strong>Eliminar</strong>
                        </div>
                        <div class="col precio">
                            <strong>Precio</strong>
                        </div>
                    </div>
                    <div class="fila">
                        <div class="col descripcion">
                           <img src="https://cdn-icons-png.flaticon.com/512/2345/2345502.png" alt="">
                           <span> Diagnóstico y reparación de problemas de hardware.</span>
                        </div>
                        <div class="col talle">
                            <span>Reparación</span>
                        </div>
                        <div class="col color c1">
                            <span>2hs</span>
                        </div>
                        <div class="col cantidad">
                            <button> + </button>
                            <span class="total-cantidad">1</span>
                            <button> - </button>
                        </div>
                        <div class="col eliminar">
                            <span> <i class="fa-solid fa-xmark"></i> </span>
                        </div>
                        <div class="col precio">
                            <span> $ 25.000</span>
                        </div>
                    </div>
                    <div class="fila">
                        <div class="col descripcion">
                           <img src="https://cdn-icons-png.flaticon.com/512/8073/8073500.png" alt="">
                           <span>Asistencia técnica a través de conexión remota para resolver problemas de software y configuración.</span>
                        </div>
                        <div class="col talle">
                            <span>Remoto</span>
                        </div>
                        <div class="col color c2">
                            <span>30min</span>
                        </div>
                        <div class="col cantidad">
                            <button> + </button>
                            <span class="total-cantidad">1</span>
                            <button> - </button>
                        </div>
                        <div class="col eliminar">
                            <span> <i class="fa-solid fa-xmark"></i> </span>
                        </div>
                        <div class="col precio">
                            <span> $ 30.000</span>
                        </div>
                    </div>
                    <div class="finalizar-compra">
                            <h3>Total Compra</h3>
                            <div class="monto">$ 55.000,00</div>
                        <button class="btn-pagar">PAGAR</button>
                    </div>
                </div>
            </section>

        </section>
    </div>

    <script src="script.js"></script>
</body>
</html>