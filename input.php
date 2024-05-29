<?php

session_start();
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id']; // Obtén el identificador del producto

    // Ejemplo: Agregar el producto al carrito
    if (!isset($_SESSION['carrito'][$product_id])) {
        $_SESSION['carrito'][$product_id] = 1; // Inicializa la cantidad en 1
    } else {
        $_SESSION['carrito'][$product_id]++; // Incrementa la cantidad si ya existe
    }

    // Redirige al usuario a la página de checkout
    header('Location: checkout.html'); // Cambia la URL según tu estructura de archivos
    exit; // Detiene la ejecución del script
}
?>
