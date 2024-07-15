<?php
session_start();

$servername = "localhost";
$username = "root";  
$password = "";  
$dbname = "mi_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE nombre_usuario = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['usuario'] = $usuario;
        header("Location: panelproducto.php");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }

    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" type="text/css" href="ingresar.css">
</head>
<body>
  <div class="container">
    <div class="left">
      <div class="header">
        <h2 class="animation a1">Bienvenido al inicio de sesión</h2>
        <h4 class="animation a2">Por favor, introduce tu nombre de usuario y contraseña para acceder</h4>
        <?php
        ?>
      </div>
      <div class="form">
        <form action="" method="POST">
          <div class="form-group">
            <input type="text" class="form-control form-field animation a3" name="usuario" placeholder="Usuario" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control form-field animation a4" name="password" placeholder="Contraseña" required>
          </div>
          <button type="submit" class="btn-agregar-carrito animation a6" name="btningresar" >Iniciar sesión</button>
        </form>
      </div>
    </div>
    <div class="right"></div>
  </div>
</body>
</html>
