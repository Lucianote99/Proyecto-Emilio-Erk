
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/CSS/body.css" rel = "stylesheet">
    <link href="assets/CSS/carrusel.css" rel = "stylesheet">
  

<div class="container mt-5 mb-5 d-flex justify-content-center">

  <div class="card" style="width: 50%;">
    <div class="card-header text-center" style="background-color: #CC6633;">
      <h2>Iniciar sesion</h2>
    </div>
    <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
      <div class="card-body" media="(max-width:768px)" style="background-color: #CC8633;">
        
        <div class="col-12 mb-2">
          <label for="exampleFormControlInput1" class="form-label">Correo</label>
          <input name="email" type="text" class="form-control"  placeholder="correo" >
         </div>
        
        <div class="col-12 mb-2">
          <label for="exampleFormControlInput1" class="form-label">Password</label>
          <input name="pass" type="password"  class="form-control" placeholder="contraseña">
        </div>
        
        <button type="submit" value="Ingresar" class="btn btn-success">Ingresar</button>
        <a href="<?php echo base_url('Login'); ?>" class="btn btn-danger">Cancelar</a>
        <br>
        <span>¿Aún no se registró? <a href="<?php echo base_url('/Registrar'); ?>">Registrarse aquí</a></span>
      </div>
    </form>
  </div>
</div>