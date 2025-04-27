<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="assets/CSS/estilo.css">
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/CSS/body.css" rel = "stylesheet">
    <link href="assets/CSS/carrusel.css" rel = "stylesheet">
    <link href="assets/CSS/card.css" rel = "stylesheet">

  </head>

<style>
  .accordion-button {
    background-color: red;
    color: blue;
  }

  .accordion-button:not(.collapsed) {
    background-color: red;
    color: blue;
  }

  .accordion-button:focus {
    box-shadow: none;
  }

  .accordion-body{
    background-color: blue;
  }
</style>

<div class="container mt-5 mb-5 d-flex flex-column align-items-center" style="background-color: #CC6633; width: 50%">

  <div class="d-flex align-items-center justify-content-center my-4 gap-3">
    <img src="assets/img/carrito-de-compras.png" alt="Icono izquierda" style="height: 50px;">
    <h1>Tipos de Entregas</h1>
    <img src="assets/img/carrito-de-compras.png" alt="Icono derecha" style="height: 50px;">
  </div>

    <div class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
     
      <div class="accordion accordion-flush mb-4" id="accordionFlushExample" style="max-width: 600px; width: 100%;">
       <div class="accordion-item">
         <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
           data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
           </button>
             <h5 class="modal-title">Entrega a Domicilio</h5>
        
      </div>
      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Los clientes pueden optar por recibir sus pedidos directamente en sus hogares o lugares de trabajo.</div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          Recogida en Local
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Los clientes tienen la opción de recoger sus pedidos en persona en uno de los locales de Sabores Express.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
          Eventos Especiales
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">DK ofrece servicios de entrega para eventos especiales como fiestas, reuniones corporativas o celebraciones familiares.</div>
      </div>
    </div>
      <div class="modal-footer">
        
        </div>
       </div>
      </div>
    </div>
  </div>
   
  </div>

</div>


<!-- Bootstrap JS con Popper incluido -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

<br> 
<br>    
<br>

<div class="container mt-5 mb-5 align-items-center" style="background-color: #CC6633; width: 50%;">

<div class="d-flex align-items-center justify-content-center my-4 gap-3">
<h1>Formas de pago</h1>
<img src="assets/img/metodo-de-pago.png" alt="Icono derecha" style="height: 50px;"> 
</div>
 <div class="d-flex justify-content-center my-4">
  <div class="accordion accordion-flush" id="accordionFlushExample" style="max-width: 600px; width: 100%;">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
          Pago en Efectivo
        </button>
      </h2>
      <div id="flush-collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Pueden optar por pagar en efectivo al momento de la entrega o al recoger su pedido en el local.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
          Pago con Tarjeta de Crédito/Débito
        </button>
      </h2>
      <div id="flush-collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">En DK, puedes realizar tus pagos de forma segura y conveniente con tarjetas de crédito o débito, ya sea Mastercard o Visa, tanto en línea como en nuestras instalaciones físicas
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseseis" aria-expanded="false" aria-controls="flush-collapseseis">
          Pago en Línea
        </button>
      </h2>
      <div id="flush-collapseseis" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">A través de la página web de Sabores Express, puedes realizar tus pedidos en línea de manera rápida y segura. Aceptamos pagos a través de plataformas de pago electrónico confiables, como PayPal, Stripe, Mercado Pago y otras pasarelas de pago seguras.</div>
      </div>
    </div>
  </div>
 </div>

   <div class="d-flex justify-content-center align-items-center gap-3 my-4">
     <img src="assets/img/Mp.jpg" alt="MercadoPago" width="100" height="auto">
     <img src="assets/img/PP.png" alt="PayPal" width="50" height="auto">
     <img src="assets/img/Mastercard.jpg" alt="Mastercard" width="50" height="auto">
     <img src="assets/img/visa.png" alt="Visa" width="100" height="auto">
  </div>
</div>  <!-- cierre del conteiner -->
      
      <br>
      <br>
      <br>

<div class="container mt-5 mb-5 d-flex flex-column align-items-center" style="background-color: #CC6633;">
           <h1 class="card-title text-black-50">Horarios de Atención</h1>
          <li class="li8"><span class="s1"><strong>Lunes a Jueves:</strong> 10 a 23 Hs.<br></span></li>
          <li class="li8"><span class="s1"><strong>Viernes Sabados y Domingos:</strong> 10 a 00 Hs.<br></span></li>
        
        
</div>

   
</html>