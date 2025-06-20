<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - DK Fast Food</title> <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="assets/CSS/body.css" rel="stylesheet">
    <link href="assets/CSS/carrusel.css" rel="stylesheet">
    <link href="assets/CSS/card.css" rel="stylesheet">
    <link href="assets/CSS/end-nav.css" rel="stylesheet">
    <style>
        /* Estilos en línea existentes */
        body {
            background-color: hsla(65, 52.40%, 4.10%, 0.98) !important; /* Mantenemos tu color de fondo */
            color: #fff;
        }
        .carousel-caption h1 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .text-danger {
            color: #dc3545 !important;
        }
        .text-success {
            color: #198754 !important;
        }
        /* Tus estilos de .card2, .card-img, y media queries también deberían estar en un archivo CSS externo para mejor organización,
           pero por ahora los dejo aquí como los tenías. Si ya están en assets/CSS/card.css, puedes borrarlos de aquí. */
        .card2 {
            width: 100%;
            max-width: 320px;
            padding: 1rem;
            margin: 20px auto;
            border-radius: 20px;
            background-color: #000000d5;
            color: #c5ac8e;
            border: none;
            overflow: hidden;
            box-shadow:
                0 0 10px #FF4081,
                0 0 15px #FF4081,
                0 0 20px #FF4081,
                0 0 25px #FF4081;
        }

        .card2 .card-body p {
            font-size: 1.2rem;
            font-weight: bold;
        }

        /* Tablets */
        @media (min-width: 576px) {
            .card2 .card-body p {
                font-size: 1.4rem;
            }
        }

        /* Laptops */
        @media (min-width: 768px) {
            .card2 .card-body p {
                font-size: 1.6rem;
            }
        }

        /* Pantallas grandes */
        @media (min-width: 992px) {
            .card2 .card-body p {
                font-size: 1.8rem;
            }
        }

        /* Mejora para pantallas menores a 480px (como Pixel 7) */
        @media (max-width: 480px) {
            .card2 {
                width: 85%;
            }
        }

        .card-img {
            width: 100%;
            height: auto;
            border-radius: 20px;
            object-fit: cover;
        }
    </style>
</head>
<body>

   
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/Combo4.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/Merch3.jpeg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/TBCN2.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="assets/img/PolloB.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Spicy Frie Chiken</h3>
                </div>
                <div class="descripcion">
                    <p>¡Nuestro pollo frito picante te encantará con su sabor explosivo!</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="assets/img/Nachos.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Nachos Chachos</h3>
                </div>
                <div class="descripcion">
                    <p>Una montaña de nachos crujientes con queso fundido y tus toppings favoritos.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="assets/img/Postres.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Postres</h3>
                </div>
                <div class="descripcion">
                    <p>El final perfecto para tu comida, ¡dulces tentaciones que te harán sonreír!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card-verde">
                <img src="assets/img/nachio chacho.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Figuras Coleccionables</h3>
                </div>
                <div class="descripcion">
                    <p>¡Adquiera a Nacho Chacho y a Burgini!</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card-verde">
                <img src="assets/img/Reciclaje1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Onda verde</h3>
                </div>
                <div class="descripcion">
                    <p>Ahora todos los materiales que podrian ser plasticos dentro de nuestras sucursales, serán biodegrdables</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card-suc text-bg-dark">
        <img src="assets/img/Sucursal.jpeg" class="card-img" alt="...">
        <div class="card-img-overlay">
            </div>
    </div>