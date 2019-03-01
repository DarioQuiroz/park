
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

	$conexion=mysqli_connect('localhost','root','','vacantes');
   
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Piqueretaro</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="FTKWJQYGkyRrB/Zkohvf+cZymGNPkCb4HkpABDIaytyvJYpYUW229+ja9KaW+vU+NxGJN//uZRGMb/4kfNlPbg==" />
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
            <a id="navbar-dropdown" class="nav-link dropdown-toggle" data-target="nav-account-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="/">
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
        <h2>¡Bienvenido al área de proveedores!</h2>
        <p class="lead">¿Eres proveedor? Puedes registrarte aquí:</p>
      <form class="button_to" method="get" action="form_regs_prov.php">
        <input class="btn btn-primary" type="submit" value="Registro" />
      </form>

    </div>
    <div class="container">
    <div class="table-responsive">
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>

        <th>Nombre</th>
            <th>Giro</th>
            <th>Contacto</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Rfc</th>
            <th>Correo electrónico</th>
            <th>Sitio Web</th>
            <th>Referencia 1</th>
            <th>Referencia 2</th>
            <th>Referencia 3</th>
            <th>PDF</th>

      </tr>
    </thead>
    <?php 
            $sql="SELECT * from provedores";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
         ?>
    <tbody>
        <tr id="provider_4" class="provider">


        <?php  echo "<th > <a href='edit_prov.php?no=".$mostrar['id']."''>"?><?php echo $mostrar['nombre'] ?></a> </th>

           

                      <td><?php echo $mostrar['giro'] ?></td>
                      <td><?php echo $mostrar['contacto'] ?></td>
                      <td><?php echo $mostrar['direccion'] ?></td>
                      <td><?php echo $mostrar['telefono'] ?></td>
                      <td><?php echo $mostrar['rfc'] ?></td>
                      <td><?php echo $mostrar['correo'] ?></td>
                      <td><?php echo $mostrar['sitioweb'] ?></td>
                      <td><?php echo $mostrar['Referencia1'] ?> </td>
                      <td><?php echo $mostrar['Referencia2'] ?></td>
                      <td><?php echo $mostrar['Referencia3'] ?></td>
                       <td><?php echo $mostrar['pdf'] ?></td>
                     

</tr>   
<?php
         }
        ?>
</tbody>
  </table>
</div>
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
