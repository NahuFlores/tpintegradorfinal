<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="panelproducto.css">
    <title>Gestión de Productos</title>
</head>
<body>
<div class="container">
    <h1 class="mt-5">Servicio Técnico de PC - Edición de Servicios</h1>
    <button class="btn btn-primary my-3" data-toggle="modal" data-target="#productoModal">Añadir Producto</button>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Duración</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "mi_base_de_datos");

            if (!$conexion) {
                die("Error de conexión: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM productos";
            $resultado = mysqli_query($conexion, $query);

            while ($producto = mysqli_fetch_assoc($resultado)) {
                echo '<tr>';
                echo '<td>' . $producto['id'] . '</td>';
                echo '<td>' . $producto['nombre'] . '</td>';
                echo '<td>' . $producto['descripcion'] . '</td>';
                echo '<td>' . $producto['duracion'] . '</td>';
                echo '<td>' . $producto['precio'] . '</td>';
                echo '<td><img src="' . $producto['imagen_url'] . '" width="100"></td>';
                echo '<td>
                        <button class="btn btn-warning btn-sm" onclick="editarProducto(' . $producto['id'] . ')">Editar</button>
                        <button class="btn btn-danger btn-sm" onclick="eliminarProducto(' . $producto['id'] . ')">Eliminar</button>
                    </td>';
                echo '</tr>';
            }

            mysqli_close($conexion);
            ?>
        </tbody>
    </table>
</div>

<div class="modal fade" id="productoModal" tabindex="-1" aria-labelledby="productoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="productoForm" action="guardar_producto.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="productoModalLabel">Añadir Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="productoId">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio" required>
                    </div>
                    <div class="form-group">
                        <label for="duracion">Duración</label>
                        <input type="text" class="form-control" id="duracion" name="duracion" required>
                    </div>
                    <div class="form-group">
                        <label for="imagen_url">URL de la Imagen</label>
                        <input type="text" class="form-control" id="imagen_url" name="imagen_url" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    function editarProducto(id) {
        $.ajax({
            url: 'obtener_producto.php',
            type: 'GET',
            data: { id: id },
            success: function(data) {
                const producto = JSON.parse(data);
                $('#productoId').val(producto.id);
                $('#nombre').val(producto.nombre);
                $('#descripcion').val(producto.descripcion);
                $('#precio').val(producto.precio);
                $('#duracion').val(producto.duracion);
                $('#imagen_url').val(producto.imagen_url);
                $('#productoModalLabel').text('Editar Producto');
                $('#productoModal').modal('show');
            }
        });
    }

    function eliminarProducto(id) {
        if (confirm('¿Estás seguro de que deseas eliminar este producto?')) {
            $.post('eliminar_producto.php', { id: id }, function(response) {
                alert(response);
                location.reload();
            });
        }
    }

    $('#productoModal').on('hidden.bs.modal', function () {
        $('#productoForm')[0].reset();
        $('#productoId').val('');
        $('#productoModalLabel').text('Añadir Producto');
    });
</script>
</body>
</html>
