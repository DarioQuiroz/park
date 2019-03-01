
<?php 
$conexion=mysqli_connect('localhost','root','','vacantes');

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Piqueretaro</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="BTX7mT7liHO1hqXA1Dxoj4lmvZqxFgTK/Gg/WB4+BBS/hH+lmKdgB04tgvEEbPaZ06GMz/k94zs14Xew6gmeGw==" />
<link rel="stylesheet" media="all" href="../assets/application-6eaf635c425c1686eab15669fd509649ff45060b315fe52358f8f7aef81136c8.css" data-turbolinks-track="reload" />
<script src="../assets/application-c2684059e5b98adb61b71a5d9ac339856999beefb748deb1e974ab2a7c2943d0.js" data-turbolinks-track="reload"></script>

  </head>

  <body>
    
<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">Parque Industrial Querétaro</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      </ul>

      <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="loguin_porv.php">Iniciar sesión</a></li>
      </ul>
    </div>
  </div>
</nav>

    

    <div class="container">
      <h1>Nuevo Proveedor</h1>
    
<form  action="insertarprovedor.php" accept-charset="UTF-8" method="post" onsubmit="return validar_prov();">
<input name="utf8" type="hidden" value="&#x2713;" />
<input type="hidden" name="authenticity_token" value="wj40OKzZpnUsCBJ/7ILDclQi8Hf+HAp65Qsh3D0G+p5PuiQdKcTLwXYdm1AJmTPfrbwbdu1kCGRFrblg9RImhg==" />

  <div class="form-group">
    <label for="provider_name">Nombre</label>
    <input class="form-control" type="text" name="nombre" id="nombre" />
  </div>

  <div class="form-group">
    <label for="provider_focus">Giro</label>
    <input class="form-control" type="text" name="giro" id="giro" />
  </div>

  <div class="form-group">
    <label for="provider_contact">Nombre de Contacto</label>
    <input class="form-control" type="text" name="contacto" id="contacto" />
  </div>

  <div class="form-group">
    <label for="provider_address">Dirección</label>
    <input class="form-control" type="text" name="direccion" id="direccion" />
  </div>

  <div class="form-group">
    <label for="provider_phone">Teléfono</label>
    <input class="form-control" type="number" name="telefono" id="telefono" />
  </div>

  <div class="form-group">
    <label for="provider_rfc">Rfc</label>
    <input class="form-control" type="text" name="rfc" id="rfc" />
  </div>

  <div class="form-group">
    <label for="provider_email">Correo electrónico</label>
    <input class="form-control" type="email" name="correo" id="correo" />
  </div>

  <div class="form-group">
    <label for="provider_website">Sitio web</label>
    <input class="form-control" type="text" name="sitioweb" id="sitioweb" />
  </div>

  <div class="form-group">
    <label for="provider_reference">Referencia 1</label>
    <input class="form-control" type="text" name="Referencia1" id="Referencia1" />
  </div>

  <div class="form-group">
    <label for="provider_reference2">Referencia 2</label>
    <input class="form-control" type="text" name="Referencia2" id="Referencia2" />
  </div>

  <div class="form-group">
    <label for="provider_reference3">Referencia 3</label>
    <input class="form-control" type="text" name="Referencia3" id="Referencia3" />
  </div>

  

  <div class="form-group">
    <label for="provider_pdf">PDF</label>
    <input class="form-control" type="file" name="pdf" id="provider_pdf" />
  </div>


  <div class="form-group">

      <input type="submit" name="commit" value="Registrar" class="btn btn-primary" />
<br>
      <a class="btn btn-link" href="provedores_public.php">Cancelar</a>
  </div>
</form>

    </div>

    <footer class="footer text-muted bg-light">
  <div class="container">
    <span>© 2019 Parque Industrial Queretaro</span>
    <ul class="list-inline mb-0 float-right">
    </ul>
  </div>
</footer>
<script type="text/javascript" src="../js/validar.js"></script>
  </body>
</html>
