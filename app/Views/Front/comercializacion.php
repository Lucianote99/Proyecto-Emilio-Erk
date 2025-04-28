<!DOCTYPE html>
<html>
  <head>
  
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
  <link href="assets/bootstrap/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="assets/CSS/acordeon.css" rel = "stylesheet">
    <link href="assets/CSS/comercializacion.css" rel = "stylesheet">

  </head>


<body>  
<div class="accordion-container mt-5 mb-5 d-flex flex-column align-items-center">
    <div class="payment-accordion">
        <div class="d-flex align-items-center justify-content-center my-3 gap-2">
            <h2>Tipos de Entregas</h2>
            <img src="assets/img/carrito-de-compras.png" alt="Icono derecha" style="height: 30px;">
        </div>
        <div class="accordion accordion-flush" id="deliveryAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseDelivery1" aria-expanded="false" aria-controls="collapseDelivery1">
                        Entrega a Domicilio
                    </button>
                </h2>
                <div id="collapseDelivery1" class="accordion-collapse collapse" data-bs-parent="#deliveryAccordion">
                    <div class="accordion-body">
                        Los clientes pueden optar por recibir sus pedidos directamente en sus hogares o lugares de trabajo.
                        <div class="delivery-images">
                            <img src="assets/img/delivery1.jpg" alt="Entrega 1">
                            <img src="assets/img/delivery2.png" alt="Entrega 2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseDelivery2" aria-expanded="false" aria-controls="collapseDelivery2">
                        Recogida en Local
                    </button>
                </h2>
                <div id="collapseDelivery2" class="accordion-collapse collapse" data-bs-parent="#deliveryAccordion">
                    <div class="accordion-body">Los clientes tienen la opción de recoger sus pedidos en persona en uno de los locales de Sabores Express.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseDelivery3" aria-expanded="false" aria-controls="collapseDelivery3">
                        Eventos Especiales
                    </button>
                </h2>
                <div id="collapseDelivery3" class="accordion-collapse collapse" data-bs-parent="#deliveryAccordion">
                    <div class="accordion-body">DK ofrece servicios de entrega para eventos especiales como fiestas, reuniones corporativas o celebraciones familiares.</div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container mt-5 mb-5 d-flex flex-column align-items-center">
        <div class="payment-accordion">
            <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                <h2>Formas de pago</h2>
                <img src="assets/img/metodo-de-pago.png" alt="Icono derecha" style="height: 30px;">
            </div>
            <div class="accordion accordion-flush" id="paymentAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEfectivo" aria-expanded="false" aria-controls="collapseEfectivo">
                            Pago en Efectivo
                        </button>
                    </h2>
                    <div id="collapseEfectivo" class="accordion-collapse collapse" data-bs-parent="#paymentAccordion">
                        <div class="accordion-body">Pueden optar por pagar en efectivo al momento de la entrega o al recoger su pedido en el local.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTarjeta" aria-expanded="false" aria-controls="collapseTarjeta">
                            Pago con Tarjeta de Crédito/Débito
                        </button>
                    </h2>
                    <div id="collapseTarjeta" class="accordion-collapse collapse" data-bs-parent="#paymentAccordion">
                        <div class="accordion-body">En DK, puedes realizar tus pagos de forma segura y conveniente con tarjetas de crédito o débito, ya sea Mastercard o Visa, tanto en línea como en nuestras instalaciones físicas.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLinea" aria-expanded="false" aria-controls="collapseLinea">
                            Pago en Línea
                        </button>
                    </h2>
                    <div id="collapseLinea" class="accordion-collapse collapse" data-bs-parent="#paymentAccordion">
                        <div class="accordion-body">A través de la página web de Sabores Express, puedes realizar tus pedidos en línea de manera rápida y segura. Aceptamos pagos a través de plataformas de pago electrónico confiables, como PayPal, Stripe, Mercado Pago y otras pasarelas de pago seguras.</div>
                    </div>
                </div>
            </div>
            <div class="payment-methods mt-3">
                <img src="assets/img/Mp.jpg" alt="MercadoPago">
                <img src="assets/img/PP.png" alt="PayPal">
                <img src="assets/img/Mastercard.jpg" alt="Mastercard">
                <img src="assets/img/visa.png" alt="Visa">
            </div>
        </div>

        <div class="attention-hours mt-4">
            <h1>Horarios de Atención</h1>
            <ul>
                <li><strong>Lunes a Jueves:</strong> 10 a 23 Hs.</li>
                <li><strong>Viernes, Sábados y Domingos:</strong> 10 a 00 Hs.</li>
            </ul>
        </div>
    </div>

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
