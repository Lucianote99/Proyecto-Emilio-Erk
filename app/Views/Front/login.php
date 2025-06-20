
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
 <link href="assets/CSS/carousel.css" rel="stylesheet">
  <link href="assets/CSS/body.css" rel="stylesheet">

</head>


<body>
  
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4"> 
        <div class="card bg-dark text-white">
            <div class="card-header text-center bg-dark border-0">
                <h2 class="text-white">Iniciar sesión</h2>
            </div>

            <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-warning text-center">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>  

            <form method="post" action="<?= base_url('/enviarlogin') ?>">
                <div class="card-body text-center">

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo</label>
                        <input name="email" type="text" class="form-control" placeholder="Correo" required>
                    </div>

                    <div class="mb-3">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input name="pass" type="password" class="form-control" placeholder="Contraseña" required>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center my-3">
                        <button type="submit" class="btn btn-success">Ingresar</button> 
                        <a href="<?= base_url('login') ?>" class="btn btn-danger">Cancelar</a>
                    </div>

                    <span>¿Aún no se registró? <a href="<?= base_url('/Registrar') ?>" class="text-info">Registrarse aquí</a></span>

                </div>
            </form>
        </div>
    </div>
</div>

</body>
   
  