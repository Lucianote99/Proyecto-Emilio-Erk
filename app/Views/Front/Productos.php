<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - DK Fast Food</title> <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="assets/CSS/body.css" rel="stylesheet">
    <link href="assets/CSS/carrusel.css" rel="stylesheet">
    <link href="assets/CSS/card.css" rel="stylesheet">
    <link href="assets/CSS/end-nav.css" rel="stylesheet">
    <style>
        body {
            background-color: #000 !important;
            color: #fff;
        }

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

   
    <div class="container">
        <div class="section-cards">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">

                        <?php
                        // Verifica si la variable $producto existe y no está vacía
                        if (isset($producto) && !empty($producto)) {
                            // Itera sobre cada producto
                            foreach ($producto as $prod) {
                                $imagen_src = ''; // Inicializamos la variable para la URL de la imagen

                                // Si el campo 'img' del producto no está vacío en la DB
                                if (!empty($prod['img'])) {
                                    // Construye la URL completa de la imagen usando base_url()
                                    // Asume que $prod['img'] contiene solo el nombre del archivo (ej. '1747421465_64b132b7279c9c787826.jpg')
                                    $imagen_src = base_url('assets/upload/' . $prod['img']);
                                } else {
                                    // Si no hay imagen específica, usa la imagen por defecto
                                    $imagen_src = base_url('assets/img/CE.jpg'); // Ajusta la ruta si es necesario
                                }
                        ?>
                                <div class="col">
                                    <div class="card2">
                                        <img class="card-img" src="<?php echo $imagen_src; ?>" alt="Imagen de <?php echo $prod['Nombre'] ?? 'producto'; ?>">
                                        <div class="card-body">
                                            <p class="text-capitalize text-center"><?php echo $prod['Nombre'] ?? 'Nombre del Producto'; ?></p>

                                            <?php if (session()->get('perfil_id') == 2) : ?>
                                                <div class="group d-flex justify-content-center">
                                                    <?php
                                                    echo form_open('carrito_agrega');
                                                    echo form_hidden('id', $prod['ID_Pro'] ?? '');
                                                    echo form_hidden('precio_vta', $prod['Precio_final'] ?? '');
                                                    echo form_hidden('nombre_prod', $prod['Nombre'] ?? '');
                                                    ?>
                                                    <div>
                                                        <?php
                                                        $btn = array(
                                                            'class' => 'btn btn-secondary fuenteBotones',
                                                            'value' => 'agregar al carrito',
                                                            'name'  => 'action'
                                                        );
                                                        echo form_submit($btn);
                                                        echo form_close();
                                                        ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                        <?php
                            } // Cierre del foreach ($producto as $prod)
                        } // Cierre del if(isset($producto) && !empty($producto))
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loaderOverlay = document.getElementById('loader-overlay');

            // Simula un tiempo de carga mínimo de 1.5 segundos.
            setTimeout(() => {
                loaderOverlay.style.opacity = '0'; // Inicia la transición para desvanecer el loader
                loaderOverlay.addEventListener('transitionend', function() {
                    loaderOverlay.style.display = 'none'; // Una vez que la transición termina, oculta el elemento
                }, { once: true }); // Asegura que el evento solo se dispare una vez
            }, 1500); // 1500 milisegundos = 1.5 segundos

            // Si tienes mucho contenido dinámico (imágenes pesadas, si el PHP tarda mucho en renderizar todo)
            // podría ser mejor usar window.onload para esperar a que todo el contenido visual esté listo.
            // Si el loader se queda transparente pero visible (ocupando espacio), cambia a este:
            // window.addEventListener('load', function() {
            //     const loaderOverlay = document.getElementById('loader-overlay');
            //     loaderOverlay.style.opacity = '0';
            //     loaderOverlay.addEventListener('transitionend', function() {
            //         loaderOverlay.style.display = 'none';
            //     }, { once: true });
            // });
        });
    </script>
    </body>
</html>