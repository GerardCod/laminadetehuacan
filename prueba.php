<?php

require_once 'model/Modelo.php';
require_once 'controller/ProductController.php';

$controlador = new ProductController();
$modelo = new Modelo();
$controlador->mostrarProductoPorId(13);