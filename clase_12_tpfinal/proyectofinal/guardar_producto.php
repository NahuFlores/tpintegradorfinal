<?php
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "mi_base_de_datos");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$duracion = $_POST['duracion'];
$imagen_url = $_POST['imagen_url'];

if ($id) {
    $query = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio='$precio', duracion='$duracion', imagen_url='$imagen_url' WHERE id=$id";
} else {
    $query = "INSERT INTO productos (nombre, descripcion, precio, duracion, imagen_url) VALUES ('$nombre', '$descripcion', '$precio', '$duracion', '$imagen_url')";
}

if (mysqli_query($conexion, $query)) {
    echo "Producto guardado correctamente.";
} else {
    echo "Error al guardar el producto: " . mysqli_error($conexion);
}

mysqli_close($conexion);
header("Location: panelproducto.php");
?>
