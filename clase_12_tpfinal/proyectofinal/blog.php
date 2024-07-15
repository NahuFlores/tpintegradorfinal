<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>CuidadoDigitalBlog</title>
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
                <a href="blog.php" class="selected">Blog</a>
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
                    <strong><span class="link-blanco">Inicio</span> / Blog</strong>
                </div>
                <div class="centro">
                    <h2>Blog</h2>
                </div>
                <div class="col busqueda">
                    <strong>Buscar por</strong> 
                    <select name="" id="">
                        <option value="">Actualizado</option>
                        <option value="">Mas leidos</option>
                        <option value="">Mas Populares</option>
                    </select>
                </div>
            </div>

            <section id="blog" class="blog">
                <div class="fila">
                    <div class="col fondo-dots">
                        <div class="contenedor-img-metadatos">
                            <img src="https://cdn.thelabrepair.com/wp-content/uploads/computer-repair.jpg" alt="">
                            <div class="metadatos" >
                                <span class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>800</span>
                                <span class="like"><i class="fa-solid fa-eye"></i>1,200</span>
                                <span class="cart"><i class="fa-solid fa-calendar-days"></i>3/12/2024</span>
                            </div>
                        </div>
                        
                        <div class="contenido">

                            <h2>La Guía Definitiva para la Reparación de Computadoras</h2>
                            <p>Las computadoras se han convertido en una herramienta esencial en nuestra vida diaria, y cuando algo falla, puede ser un verdadero dolor de cabeza ...</p>
                            <a href="#" class="btn-blog">Leer mas</a>
                        </div>
                        
                    </div>
                    <div class="col fondo-dots">
                        <div class="contenedor-img-metadatos">
                            <img src="https://us.v-cdn.net/6036147/uploads/XI0N634D4I8C/l-21-2-1200x675.jpg" alt="">
                            <div class="metadatos" >
                                <span class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>700</span>
                                <span class="like"><i class="fa-solid fa-eye"></i>200</span>
                                <span class="cart"><i class="fa-solid fa-calendar-days"></i>5/11/2024</span>
                            </div>
                        </div>
                        
                        <div class="contenido">

                            <h2>Cómo Realizar el Mantenimiento Preventivo de tu PC</h2>
                            <p>Mantener tu computadora en buen estado es crucial para evitar fallos inesperados y prolongar su vida útil. Aquí te enseñamos las mejores prácticas para el mantenimiento preventivo de tu PC ...</p>
                            <a href="#" class="btn-blog">Leer mas</a>
                        </div>
                        
                    </div>
                    <div class="col fondo-dots">
                        <div class="contenedor-img-metadatos">
                            <img src="https://media.istockphoto.com/id/1348936844/photo/update-concept-software-upgrade.jpg?s=612x612&w=0&k=20&c=mtLAPwzo3nG9PNZB4RBCrnLiDDLd3lnUhxH_uU1Ue08=" alt="">
                            <div class="metadatos" >
                                <span class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>600</span>
                                <span class="like"><i class="fa-solid fa-eye"></i>800</span>
                                <span class="cart"><i class="fa-solid fa-calendar-days"></i>05/09/2024</span>
                            </div>
                        </div>
                        
                        <div class="contenido">

                            <h2>Guía Paso a Paso para la Instalación de Software</h2>
                            <p>Instalar software en tu computadora puede parecer una tarea sencilla, pero hacerlo correctamente es clave para asegurar el buen funcionamiento del sistema. A continuación, te mostramos cómo hacerlo paso a paso ...</p>
                            <a href="#" class="btn-blog">Leer mas</a>
                        </div>
                        
                    </div>
                </div>
                <div class="fila">
                    <div class="col fondo-dots">
                        <div class="contenedor-img-metadatos">
                            <img src="https://sipoonline.cl/wp-content/uploads/2022/02/Instalacion-De-Placa-Madre-y-Diagnostico-Upgrade-300x300.png" alt="">
                            <div class="metadatos" >
                                <span class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>800</span>
                                <span class="like"><i class="fa-solid fa-eye"></i>1,200</span>
                                <span class="cart"><i class="fa-solid fa-calendar-days"></i>3/12/2024</span>
                            </div>
                        </div>
                        
                        <div class="contenido">

                            <h2>Cómo Realizar una Actualización de Hardware en tu PC</h2>
                            <p>Actualizar el hardware de tu computadora puede mejorar significativamente su rendimiento y capacidad. Aquí te mostramos cómo llevar a cabo actualizaciones de hardware de manera segura y efectiva ...</p>
                            <a href="#" class="btn-blog">Leer mas</a>
                        </div>
                        
                    </div>
                    <div class="col fondo-dots">
                        <div class="contenedor-img-metadatos">
                            <img src="https://m.media-amazon.com/images/S/aplus-media-library-service-media/95847736-24ef-49e7-a042-99d00d10316c.__CR0,0,300,300_PT0_SX300_V1___.jpg" alt="">
                            <div class="metadatos" >
                                <span class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>700</span>
                                <span class="like"><i class="fa-solid fa-eye"></i>200</span>
                                <span class="cart"><i class="fa-solid fa-calendar-days"></i>5/11/2024</span>
                            </div>
                        </div>
                        
                        <div class="contenido">

                            <h2> La Importancia de la Limpieza Interna de tu PC</h2>
                            <p>La limpieza interna de tu PC es crucial para mantener un rendimiento óptimo y evitar el sobrecalentamiento. Descubre cómo limpiar correctamente tu computadora para mantenerla en perfecto estado ...</p>
                            <a href="#" class="btn-blog">Leer mas</a>
                        </div>
                        
                    </div>
                    <div class="col fondo-dots">
                        <div class="contenedor-img-metadatos">
                            <img src="https://blog.invgate.com/hubfs/soporte-remoto.jpg" alt="">
                            <div class="metadatos" >
                                <span class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>600</span>
                                <span class="like"><i class="fa-solid fa-eye"></i>800</span>
                                <span class="cart"><i class="fa-solid fa-calendar-days"></i>05/09/2024</span>
                            </div>
                        </div>
                        
                        <div class="contenido">

                            <h2>Cómo Aprovechar el Soporte Técnico Remoto para Resolver Problemas de tu PC</h2>
                            <p>El soporte técnico remoto ofrece una solución conveniente para resolver problemas de tu computadora sin necesidad de llevarla a un taller. Aquí te explicamos cómo funciona y cómo puedes beneficiarte de este servicio ...</p>
                            <a href="#" class="btn-blog">Leer mas</a>
                        </div>
                        
                    </div>
                </div>


            </section>
        </section>
    </div>

    <script src="script.js"></script>
</body>
</html>