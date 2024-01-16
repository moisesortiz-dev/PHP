<?php

include("../php/logout_session.php");

// Conexión a la base de datos de productos
include("../php/conexion_db_productos.php");


// Obtener información de todos los productos
$consulta = $conexion->query("SELECT id, nombre, descripcion, precio FROM productos");

?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("../php/cabecera.php") ?>
    <link rel="stylesheet" href="../css/style_user_login.css">
</head>
<body>
    <?php include("../php/header.php") ?>
    <h1>Estás logueado en la tienda, enhorabuena</h1>
    <main>
        <!-- Sección de productos -->
        <section class="productos">
            <h2 class="titulo-productos">Productos Destacados</h2>

            <!-- Mostrar productos obtenidos de la base de datos -->
            <div class="productos-columna">
                <?php foreach ($productos as $producto) { ?>
                    <div class="producto">
                        <img src="../imagenes/imagen vacia.png" alt="Componente de pc" style="max-width: 300px; max-height: 200px;">
                        <h3><?php echo $producto['nombre']; ?></h3>
                        <p><?php echo $producto['descripcion']; ?></p>
                        <p class="precio"><?php echo "$" . $producto['precio']; ?></p>

                        <!-- Formulario para agregar al carrito -->
                        <form method="post" action="user_carrito.php">
                            <input type="hidden" name="agregarAlCarrito" value="<?php echo $producto['id']; ?>">
                                <button type="submit">Agregar al Carrito</button>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
    <?php include("../php/cerrar_conexion_db.php") ?>
    <?php include("../php/footer.php") ?>
</body>
</html>