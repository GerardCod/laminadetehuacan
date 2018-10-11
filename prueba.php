<?php

include_once './model/ConexionSingleton.php';
include_once './model/Producto.php';
include_once './model/ProductoDAO.php';

$producto = new Producto(3, "rmreom", "efoprf");
$productoDAO = new ProductoDAO();

echo $productoDAO->guardarProducto($producto);
