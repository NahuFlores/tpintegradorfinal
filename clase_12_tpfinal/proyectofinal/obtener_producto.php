<?php
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "mi_base_de_datos");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$id = $_GET['id'];

$query = "SELECT * FROM productos WHERE id = $id";
$resultado = mysqli_query($conexion, $query);

if ($producto = mysqli_fetch_assoc($resultado)) {
    echo json_encode($producto);
} else {
    echo json_encode([]);
}

mysqli_close($conexion);
?>
