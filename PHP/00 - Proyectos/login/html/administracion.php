<?php 
//Cerrar session
include("../php/logout_session.php");

//conexion a la base de datos productos
include("../php/conexion_db_productos.php");

//conexion a la base de datos usuarios
include("../php/conexion_db_usuarios.php");

 // Incluir función para administrar usuarios a la base de datos
 include("../php/insertar_usuarios.php");

 //funcion para administrar la tabla de productos
 include("../php/insertar_productos.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("../php/cabecera.php") ?>
    <link rel="stylesheet" href="../css/style_administracion.css">
</head>
<body>
    <?php include("../php/header_administrador.php") ?>
    <h1>Administración</h1>

     <!-- Tabla de Productos -->
<h2>Productos</h2>
<hr>
<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto) { ?>
                <tr>
                    <td><?php echo $producto['id']; ?></td>
                    <td><?php echo $producto['nombre']; ?></td>
                    <td><?php echo $producto['descripcion']; ?></td>
                    <td><?php echo $producto['precio'] . "$"; ?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="eliminarProducto" value="<?php echo $producto['id']; ?>">
                            <button type="submit" name="eliminarProductoBtn">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>

            <!-- Fila vacía para agregar un nuevo producto -->
            <form method="post">
                <tr>
                    <td></td>
                    <td><input type="text" name="nuevoNombre" placeholder="Nombre"></td>
                    <td><input type="text" name="nuevaDescripcion" placeholder="Descripción"></td>
                    <td><input type="text" name="nuevoPrecio" placeholder="Precio"></td>
                    <td>
                        <button type="submit" name="guardarNuevoProducto">Guardar</button>
                        <button type="button" onclick="cancelarNuevoProducto()">Cancelar</button>
                    </td>
                </tr>
            </form>
        </tbody>
    </table>
</div>

    <!-- Tabla de Usuarios -->
    <h2>Usuarios</h2>
    <hr>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Administrador</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario['id']; ?></td>
                        <td><?php echo $usuario['nombre']; ?></td>
                        <td><?php echo $usuario['correo']; ?></td>
                        <td><?php echo $usuario['administrador']; ?></td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="eliminarUsuario" value="<?php echo $usuario['id']; ?>">
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>

                <!-- Fila para agregar un nuevo usuario -->
                <form method="post">
                    <tr>
                        <td></td>
                        <td><input type="text" name="nombre" placeholder="Nombre"></td>
                        <td><input type="text" name="correo" placeholder="Correo"></td>
                        <td><input type="text" name="administrador" placeholder="Administrador"></td>
                        <td>
                            <button type="submit" name="guardarNuevoUsuario">Guardar</button>
                            <button type="button" onclick="cancelarNuevoUsuario()">Cancelar</button>
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>

    <?php include("../php/cerrar_conexion_db.php") ?>
    <?php include("../php/footer.php") ?>
</body>
</html>
