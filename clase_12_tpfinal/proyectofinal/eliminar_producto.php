<?php
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "mi_base_de_datos");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$id = $_POST['id'];

$query = "DELETE FROM productos WHERE id = $id";

if (mysqli_query($conexion, $query)) {
    echo "Producto eliminado correctamente.";
} else {
    echo "Error al eliminar el producto: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
