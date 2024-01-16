<?php
// Control de sesión
include("../php/logout_session.php");

// Conexión a la base de datos de productos
include("../php/conexion_db_productos.php");

// Obtener productos en el carrito para el usuario actual
$stmt = $conexion->prepare("SELECT id, nombre, descripcion, precio, stock FROM productos");
$stmt->execute();
$result = $stmt->get_result();

// Verificar si hay errores en la ejecución de la consulta
if (!$result) {
    die("Error en la consulta: " . $conexion->error);
}

// Verificar si se ha enviado el formulario de procesar compra
if (isset($_POST['procesarCompra']) && $_POST['procesarCompra'] == 1) {
    // Aquí puedes realizar las operaciones necesarias para procesar la compra

    // Muestra el mensaje de compra finalizada
    $mensajeCompra = "¡Su compra ha finalizado!";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("../php/cabecera.php") ?>
    <link rel="stylesheet" href="../css/style_administracion_carrito.css">
</head>
<body>
    <?php include("../php/header.php") ?>
    <h1>Estás logueado en la tienda, enhorabuena</h1>

    <?php if (isset($mensajeCompra)) { ?>
        <p><?php echo $mensajeCompra; ?></p>
    <?php } ?>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td><?php echo "$" . $row['precio']; ?></td>
                        <td><?php echo $row['stock']; ?></td>
                        <td>
                            <form method="post" action="user_carrito.php">
                                <input type="hidden" name="eliminarDelCarrito" value="<?php echo $row['id']; ?>">
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Botón para procesar la compra -->
    <form method="post" action="user_carrito.php">
        <input type="hidden" name="procesarCompra" value="1">
        <button type="submit">Procesar Compra</button>
    </form>

    <?php include("../php/cerrar_conexion_db.php"); ?>
    <?php include("../php/footer.php"); ?>
</body>
</html>