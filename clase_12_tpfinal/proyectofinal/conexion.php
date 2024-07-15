<?php 

//ABRIMOS LA CONEXION A LA BASE DE DATOS => mysqli_connect("servidor:puerto", "usuario", "password", "esquema")
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "clase_11");

/*
$query = "INSERT INTO productos (nombre_producto, stock_producto, precio_producto, marca_producto) VALUES ('Pepsi 1.5L', 50, 2500, 'Pepsico');";
$resultado = mysqli_query($conexion, $query);

if($resultado !== false){
    echo "salio todo bien!";
    //redireccion a una pantalla de "SALIO TODO BIEN!"
}
else{
    echo "salio todo mal!";
    //redireccion a la misma pantalla pero colocando un cartel de "VUELVA A INTENTARLO!"
}
*/

$query = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $query);

while($unaFila = mysqli_fetch_assoc($resultado)){
    echo "El valor del nombre_producto es: ".$unaFila["nombre_producto"];
    echo "<br>";
}

//CERRA LA CONEXION A LA BASE DE DATOS
mysqli_close($conexion);

?>