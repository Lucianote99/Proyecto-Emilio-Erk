<!DOCTYPE html>
<html>
  <head>
  
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
  <link href="assets/bootstrap/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="assets/CSS/acordeon.css" rel = "stylesheet">

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
<body>
<div class="container mt-5 mb-5 d-flex flex-column align-items-center" style="background-color: #CC6633; width: 80%;">

<div class="accordion accordion-flush" id="accordionFlushExample">
<div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" _msttexthash="394498" _msthash="197"> Acordeón Artículo #1 </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample"  _mstvisible="0">
          <div class="accordion-body" _mstvisible="1"><font _mstmutation="1" _msttexthash="11813035" _msthash="198" _mstvisible="2">Contenido de marcador de posición para este acordeón, que está destinado a demostrar la clase. Este es el cuerpo de acordeón del primer artículo.</font><code _mstvisible="2">.accordion-flush</code></div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" _msttexthash="394810" _msthash="199"> Acordeón Artículo #2 </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" _mstvisible="0">
          <div class="accordion-body" _mstvisible="1"><font _mstmutation="1" _msttexthash="20841197" _msthash="200"_mstvisible="2">Contenido de marcador de posición para este acordeón, que está destinado a demostrar la clase. Este es el cuerpo de acordeón del segundo artículo. Imaginemos que esto está lleno de contenido real.</font><code _mstvisible="2">.accordion-flush</code></div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" _msttexthash="395122" _msthash="201"> Acordeón Artículo #3 </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" _mstvisible="0">
          <div class="accordion-body" _mstvisible="1"><font _mstmutation="1" _msttexthash="72108972" _msthash="202" _mstvisible="2">Contenido de marcador de posición para este acordeón, que está destinado a demostrar la clase. Este es el cuerpo de acordeón del tercer artículo. No está sucediendo nada más emocionante aquí en términos de contenido, sino simplemente llenar el espacio para que se vea, al menos a primera vista, un poco más representativo de cómo se vería en una aplicación del mundo real.</font><code _mstvisible="2">.accordion-flush</code></div>
        </div>
      </div>
    </div>
</div>
</div>


</div>


<!-- Bootstrap JS con Popper incluido -->


<div class="container mt-5 mb-5 align-items-center" style="background-color: #CC6633; width: 50%;">

<div class="d-flex align-items-center justify-content-center my-4 gap-3">
<h1>Formas de pago</h1>
<img src="assets/img/metodo-de-pago.png" alt="Icono derecha" style="height: 50px;"> 
</div>
 <div class="d-flex justify-content-center my-4">
  <div class="accordion accordion-flush" id="accordionFlushExample" style="max-width: 600px; width: 100%;">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="true" aria-controls="flush-collapsefour">
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
      
      

<div class="container mt-5 mb-5 d-flex flex-column align-items-center" style="background-color: #CC6633;">
           <h1 class="card-title text-black-50">Horarios de Atención</h1>
          <li class="li8"><span class="s1"><strong>Lunes a Jueves:</strong> 10 a 23 Hs.<br></span></li>
          <li class="li8"><span class="s1"><strong>Viernes Sabados y Domingos:</strong> 10 a 00 Hs.<br></span></li>
        
        
</div>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js" ></script>
</body>
</html>