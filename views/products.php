<?php 
    require_once '../model/Modelo.php';
    require_once '../controller/ProductController.php';
    $controlador = new ProductController();
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <title>Lámina de Tehuacán S.A. de C.V.</title>
</head>
<body>
<header class="header">
        <div class="container menu">
            <figure class="logo">
                <img src="../assets/logo.jpg" alt="Logo">
            </figure>
            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-linkCont">
                        <a href="../index.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-linkCont">
                        <a href="./products.php" class="nav-link">Productos</a>
                    </li>
                    <li class="nav-linkCont">
                        <a href="./services.php" class="nav-link">Servicios</a>
                    </li>
                    <li class="nav-linkCont">
                        <a href="./aboutus.php" class="nav-link">Conózcanos</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="products-slide">
        <div class="slider">
            <ul>
                <li>
                    <img src="../assets/autotanque_sobre_camion1.png" alt="">
                </li>
                <li>
                    <img src="../assets/carroceria_caja_redillas1.png" alt="">
                </li>
                <li>
                    <img src="./assets/equipo_especial_tolva1.png" alt="">
                </li>
                <li>
                    <img src="../assets/equipo_antena1.png" alt="">
                </li>
                <li>
                    <img src="../assets/equipo_placa_señalamiento1.png" alt="">
                </li>
                <li>
                    <img src="../assets/estructura_gradas1.png" alt="">
                </li>
                <li>
                    <img src="../assets/estructura01.png" alt="">
                </li>
                <li>
                    <img src="../assets/planta_industrial_alimentos01.png" alt="">
                </li>
                <li>
                    <img src="../assets/invernaderos1.png" alt="">
                </li>
                <li>
                    <img src="../assets/carroceria_sobre_inoxidable.png" alt="">
                </li>
            </ul>
        </div>        
    </section>

    <section class="productos">
        <div class="container">
            <div class="products-list">
                <?php  ?>
            </div>
        </div>
    </section>
</body>
</html>