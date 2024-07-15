<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>CuidadoDigitaltienda</title>
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
                <a href="tienda.php" class="selected">Tienda</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
                <a href="ingresar.php">Ingresar</a>
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
                    <strong><span class="link-blanco">Inicio</span> / Tienda</strong>
                </div>
                <div class="centro">
                    <h2>Servicios</h2>
                </div>
                <div class="col busqueda">
                    <strong>Resultados (1-6)</strong> 
                    <select name="" id="">
                        <option value="">Todos los servicios</option>
                        <option value="">Por precio</option>
                        <option value="">Por servicios mas usado</option>
                    </select>
                </div>
            </div>
                <section id="productos" class="productos">
                    <?php
                   $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "mi_base_de_datos");

                   if (!$conexion) {
                       die("Error de conexión: " . mysqli_connect_error());
                   }

                    $sql = "SELECT id, nombre, descripcion, precio, duracion, imagen_url FROM productos";
                    $result = $conexion->query($sql);

                    if ($result->num_rows > 0) {
                        $contador = 0;
                        while($row = $result->fetch_assoc()) {
                            if ($contador % 3 == 0) {
                                echo '<div class="fila">';
                            }
                            ?>
                            <div class="col fondo-dots">
                                <header>
                                    <span class="like"><i class="fa-solid fa-heart"></i></span>
                                    <span class="cart"><i class="fa-solid fa-bag-shopping"></i></span>
                                </header>
                                <a href="detalleproducto.php?id=<?php echo $row['id']; ?>">
                                    <div class="contenido">
                                        <div class="fondo orange">
                                            <div class="circulo"></div>
                                        </div>
                                        <img src="<?php echo $row['imagen_url']; ?>" alt="">
                                        <h2><?php echo $row['nombre']; ?></h2>
                                        <h2>$<?php echo $row['precio']; ?></h2>
                                    </div>
                                </a>
                            </div>
                            <?php
                            $contador++;
                            if ($contador % 3 == 0) {
                                echo '</div>';
                            }
                        }

                        if ($contador % 3 != 0) {
                            echo '</div>';
                        }
                    } else {
                        echo "No hay productos disponibles.";
                    }
                    mysqli_close($conexion);
                    ?>
                </section>
        </section>
    </div>

    <script src="script.js"></script>
</body>
</html>