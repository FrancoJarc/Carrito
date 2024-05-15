<?php
    session_start();
    $carrito = $_SESSION['carrito'];

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array(); // o cualquier valor inicial que desees asignar
        $carrito=$_SESSION['carrito'];
    }



?>