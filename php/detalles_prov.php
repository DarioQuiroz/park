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
<meta name="csrf-token" content="sXkOwCdU7UY+WdZfrej16MsDOUMXPGkfDuzgua7MjR5ZXBJq08cojHlrqa0uw5Wk667FLSzJx0YuHEJNchuNFw==" />
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

      <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="../index.html">Inicio</a></li>
      <li class="nav-item"><a class="nav-link" href="segundo.html">Intranet</a></li>
          <li class="nav-item"><a class="nav-link" href="loguin_porv.php">Iniciar sesión</a></li>
      </ul>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
      <div class="page-header">
  <h1>Mostrar Proveedor</h1>
</div>

<dl class="dl-horizontal">
  <dt>Empresa</dt>
  <dd><?php echo $consulta[1] ?></dd>

  <dt>Giro</dt>
  <dd><?php echo $consulta[2] ?></dd>

  <dt>Nombre de Contacto</dt>
  <dd><?php echo $consulta[3] ?></dd>

  <dt>Dirección</dt>
  <dd><?php echo $consulta[4] ?> </dd>

  <dt>Teléfono</dt>
  <dd><?php echo $consulta[5] ?></dd>

  <dt>RFC</dt>
  <dd><?php echo $consulta[6] ?></dd>

  <dt>Correo Electrónico</dt>
  <dd><?php echo $consulta[7] ?></dd>

  <dt>Sitio WEB</dt>
  <dd><a href="<?php echo $consulta[8] ?>"><?php echo $consulta[8] ?></a></dd>

  <dt>Referencia 1</dt>
  <dd><?php echo $consulta[9] ?> </dd>

  <dt>Referencia 2</dt>
  <dd><?php echo $consulta[10] ?></dd>

  <dt>Referencia 3</dt>
  <dd><?php echo $consulta[11] ?></dd>

 
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
