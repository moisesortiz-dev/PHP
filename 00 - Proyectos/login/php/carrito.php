<?php
// Manejar la acción de agregar al carrito
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['agregarAlCarrito'])) {
    $idProducto = $_POST['agregarAlCarrito'];
    
    // Asegúrate de que el producto esté en stock antes de agregarlo al carrito
    // Puedes agregar lógica adicional aquí según tus necesidades

    // Agregar el producto al carrito
    agregarAlCarrito($idUsuario, $idProducto, 1); // Se asume que el usuario actual está autenticado
}
?>
