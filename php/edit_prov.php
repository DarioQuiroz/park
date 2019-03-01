<?php 
session_start();
$varsesion = $_SESSION['usuario'];
if($varsesion==null || $varsesion='')
{
    echo'usted no tiene autorizacion';
    header("location:loguin_porv.php");
die();
  }
?>
<?php
  
  $consulta=consultarprovedor($_GET['no']);

  function consultarprovedor( $no_prod )
  {
   include 'conexionvacante.php';
   $sentencia="SELECT * FROM provedores WHERE id='".$no_prod."' ";
   $resultado= $conn->query($sentencia) or die ("Error al consultar producto".mysqli_error($conn)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['id'],
    $fila['nombre'],
    $fila['giro'],
    $fila['contacto'],
    $fila['direccion'],
    $fila['telefono'],
    $fila['rfc'],
    $fila['correo'],
    $fila['sitioweb'],
    $fila['Referencia1'],
    $fila['Referencia2'],
    $fila['Referencia3'],
    $fila['pdf']
    

   ];
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Piqueretaro</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="emH/NWYpe9Jc4LJ6xsLkXihIfOyySJ0V5xU67cwuxX+SROOfkrq+GBvSzYhF6YQSCOWAgom9M0zH5ZgZEPnFdg==" />
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

        <li class="nav-item">
         
            <span><i class="fa fa-flag-o" aria-hidden="true"></i></span>
</a>         </li>

          <li class="nav-item dropdown">
            <a id="navbar-dropdown" class="nav-link dropdown-toggle" data-target="nav-account-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
              <img height="20" width="20" class="rounded" src="https://secure.gravatar.com/avatar/33f4beeb170919a0cd66e19c5100e428?default=mm&amp;size=40" />
</a>            <div id="nav-account-dropdown" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown">
           
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" rel="nofollow" data-method="delete" href="cerrarsesion_prov.php">Desconectarse</a>
            </div>
          </li>

      </ul>
    </div>
  </div>
</nav>

    

    <div class="container">
      <h1>Editar proveedor</h1>


      <form  action="actualizar_prov.php" accept-charset="UTF-8" method="post">
<input name="utf8" type="hidden" value="&#x2713;" />
<input type="hidden" name="authenticity_token" value="wj40OKzZpnUsCBJ/7ILDclQi8Hf+HAp65Qsh3D0G+p5PuiQdKcTLwXYdm1AJmTPfrbwbdu1kCGRFrblg9RImhg==" />
<input type="hidden" class="form-control" name="no"  value="<?php echo $_GET['no']?>">
  <div class="form-group">
    <label for="provider_name">Nombre</label>
    <input class="form-control" type="text" name="nombre" id="provider_name" value="<?php echo $consulta[1] ?>" />
  </div>

  <div class="form-group">
    <label for="provider_focus">Giro</label>
    <input class="form-control" type="text" name="giro" id="provider_focus" value="<?php echo $consulta[2] ?>" />
  </div>

  <div class="form-group">
    <label for="provider_contact">Nombre de Contacto</label>
    <input class="form-control" type="text" name="contacto" id="provider_contact" value="<?php echo $consulta[3] ?>" />
  </div>

  <div class="form-group">
    <label for="provider_address">Dirección</label>
    <input class="form-control" type="text" name="direccion" id="provider_address" value="<?php echo $consulta[4] ?>" />
  </div>

  <div class="form-group">
    <label for="provider_phone">Teléfono</label>
    <input class="form-control" type="text" name="telefono" id="provider_phone" value="<?php echo $consulta[5] ?>" />
  </div>

  <div class="form-group">
    <label for="provider_rfc">Rfc</label>
    <input class="form-control" type="text" name="rfc" id="provider_rfc" value="<?php echo $consulta[6] ?>" />
  </div>

  <div class="form-group">
    <label for="provider_email">Correo electrónico</label>
    <input class="form-control" type="text" name="correo" id="provider_email" value="<?php echo $consulta[7] ?>" />
  </div>

  <div class="form-group">
    <label for="provider_website">Sitio web</label>
    <input class="form-control" type="text" name="sitioweb" id="provider_website" value="<?php echo $consulta[8] ?>" />
  </div>

  <div class="form-group">
    <label for="provider_reference">Referencia 1</label>
    <input class="form-control" type="text" name="Referencia1" id="provider_reference" value="<?php echo $consulta[9] ?>" />
  </div>

  <div class="form-group">
    <label for="provider_reference2">Referencia 2</label>
    <input class="form-control" type="text" name="Referencia2" id="provider_reference2" value="<?php echo $consulta[10] ?>" />
  </div>

  <div class="form-group">
    <label for="provider_reference3">Referencia 3</label>
    <input class="form-control" type="text" name="Referencia3" id="provider_reference3" value="<?php echo $consulta[11] ?>" />
  </div>

  <div class="form-group">
    <label for="provider_pdf">Pdf</label>
    <input class="form-control" type="text" name="pdf" id="provider_pdf" value="<?php echo $consulta[12] ?>" />
  </div>


  <div class="form-group">
  <div class="float-right">
  <?php  echo "<a class='text-danger' data-confirm='Esta acción no se puede revertir' rel='nofollow' data-method='delete' href='eliminar_prov.php?no=". $_GET['no']."''>"?>Borrar Proveedor</a> </th>
        
      </div>
  <p>    <input type="submit" name="commit" value="Actualizar" class="btn btn-primary" data-disable-with="Actualizar" /></p>

      <a class="btn btn-link" href="insertarprovedor.php">Cancelar</a>
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

  </body>
</html>
