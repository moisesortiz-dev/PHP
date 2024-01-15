<?php
session_start();

// Cerrar sesión al hacer clic en el botón
if (isset($_POST['logout'])) {
    session_destroy(); 
    header("Location: login.php"); 
    exit();
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        include("../php/cabecera.php")
    ?>
    <link rel="stylesheet" href="../css/style_user_login.css">
</head>
<body>
<?php
    include("../php/header.php")
?>
    <h1>Estas logeado en la tienda, enhorabuena</h1>
    <main>
        <!-- Sección de productos -->
        <section class="productos">
        <h2 class="titulo-productos">Productos Destacados</h2>

            <!-- Ejemplo de producto -->
            <div class="productos-columna">
                <div class="producto">
                    <img src="producto1.jpg" alt="Producto 1">
                    <h3>Nombre del Producto 1</h3>
                    <p>Descripción breve del Producto 1.</p>
                    <p class="precio">$100.00</p>
                    <button>Agregar al Carrito</button>
                </div>
                <div class="producto">
                    <img src="producto2.jpg" alt="Producto 2">
                    <h3>Nombre del Producto 2</h3>
                    <p>Descripción breve del Producto 2.</p>
                    <p class="precio">$100.00</p>
                    <button>Agregar al Carrito</button>
                </div>
                <div class="producto">
                    <img src="producto3.jpg" alt="Producto 3">
                    <h3>Nombre del Producto 3</h3>
                    <p>Descripción breve del Producto 3.</p>
                    <p class="precio">$100.00</p>
                    <button>Agregar al Carrito</button>
                </div>
                <div class="producto">
                    <img src="producto4.jpg" alt="Producto 4">
                    <h3>Nombre del Producto 4</h3>
                    <p>Descripción breve del Producto 1.</p>
                    <p class="precio">$100.00</p>
                    <button>Agregar al Carrito</button>
                </div>
                <div class="producto">
                    <img src="producto5.jpg" alt="Producto 5">
                    <h3>Nombre del Producto 4</h3>
                    <p>Descripción breve del Producto 1.</p>
                    <p class="precio">$100.00</p>
                    <button>Agregar al Carrito</button>
                </div>
            </div>
            <div class="productos-columna">    
            <div class="producto">
                    <img src="producto6.jpg" alt="Producto 6">
                    <h3>Nombre del Producto 6</h3>
                    <p>Descripción breve del Producto 1.</p>
                    <p class="precio">$100.00</p>
                    <button>Agregar al Carrito</button>
                </div>
                <div class="producto">
                    <img src="producto7.jpg" alt="Producto 7">
                    <h3>Nombre del Producto 7</h3>
                    <p>Descripción breve del Producto 2.</p>
                    <p class="precio">$100.00</p>
                    <button>Agregar al Carrito</button>
                    </div>
                <div class="producto">
                    <img src="producto8.jpg" alt="Producto 8">
                    <h3>Nombre del Producto 8</h3>
                    <p>Descripción breve del Producto 3.</p>
                    <p class="precio">$100.00</p>
                    <button>Agregar al Carrito</button>
                </div>
                <div class="producto">
                    <img src="producto9.jpg" alt="Producto 9">
                    <h3>Nombre del Producto 9</h3>
                    <p>Descripción breve del Producto 1.</p>
                    <p class="precio">$100.00</p>
                    <button>Agregar al Carrito</button>
                    </div>
                <div class="producto">
                    <img src="producto10.jpg" alt="Producto 10">
                    <h3>Nombre del Producto 10</h3>
                    <p>Descripción breve del Producto 1.</p>
                    <p class="precio">$100.00</p>
                 <button>Agregar al Carrito</button>
                </div>
            </div>
        </section>
    </main>
    <?php
    include("../php/footer.php")
    ?>
</body>
</html>