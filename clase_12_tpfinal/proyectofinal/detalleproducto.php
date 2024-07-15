<?php
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "mi_base_de_datos");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$id_producto = $_GET['id'];

$sql_detalle = "SELECT nombre, descripcion, precio, duracion, imagen_url FROM productos WHERE id = $id_producto";
$result_detalle = $conexion->query($sql_detalle);

if ($result_detalle->num_rows > 0) {
    $row_detalle = $result_detalle->fetch_assoc();
} else {
    echo "No se encontró el producto.";
}

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>CuidadoDigital</title>
</head>
<body>
    <div class="contenedor">
        <!-- ENCABEZADO PRINCIPAL: LOGO MENU CARRITO -->
        <header>
            <div class="logo-titulo">
                <a href="index.php">
                    <i class="fa-regular fa-circle-dot"></i>
                    <h1>CuidadoDigital</h1>
                </a>
            </div>
            <nav id="nav">
                <a href="index.php" class="selected">Inicio</a>
                <a href="tienda.php">Tienda</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
                <!-- icono cerrar menu responsive -->
                <span id="close-responsive">
                    <i class="fa-solid fa-xmark"></i>
                </span>
            </nav>
            <!-- icono menu responsive -->
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
            
            <section id="inicio" class="inicio">
                <div class="col">
                    <h2 class="titulo-inicio">Soluciones técnicas confiables <br>
                        para tus equipos al mejor costo</h2>
                    <div class="buscador">
                        <input type="text" placeholder="Qué estás buscando?">
                        <span class="btn-buscar"><i class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                   
                </div>
                <div class="col derecha">
                    <div class="contenedor-img">
                        <img src="https://i0.wp.com/www.absera.com/wp-content/uploads/2021/02/Hardware-and-networking-Training-institute-in-madurai.png?fit=750%2C500&ssl=1" alt="">
                    </div>
                </div>
            </section>

            <!-- DETALLE DEL PRODUCTO -->
            <section class="detalle-producto">
                <div class="fila">
                    <div class="col izquierda">
                        <h3><?php echo $row_detalle['nombre']; ?></h3>
                        <p><?php echo $row_detalle['descripcion']; ?></p>
                    </div>
                    <div class="col centro">
                        <div class="img-producto" id="img-producto">
                            <img src="<?php echo $row_detalle['imagen_url']; ?>" alt="" id="imgProducto">
                            <h3 class="precio-producto">$<?php echo $row_detalle['precio']; ?></h3>
                        </div>
                    </div>
                    <div class="col derecha">
                        <div class="info-detalle">
                            Review:
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            4.5 (60)
                        </div>
                        <div class="info-detalle">
                            Duración Estimada:
                            <button class="size-selected"><?php echo $row_detalle['duracion']; ?></button>
                        </div>

                        <button class="btn-agregar-carrito">Agregar al Carrito</button>
                    </div>
                </div>
            </section>

            <!-- Servicios RELACIONADOS -->
            <h2 class="subtitulo-seccion">Servicios Relacionados</h2>
            
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
