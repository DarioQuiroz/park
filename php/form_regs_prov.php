<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
/*
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {

            $titulo= $_POST['nombre'];
            $descri= $_POST['giro'];
            $contacto=$_POST['contacto'];
            $direccion=$_POST['direccion'];
            $telefono=$_POST['telefono'];
            $rfc =$_POST['rfc'];
            $correo=$_POST['correo'];
            $sitioweb=$_POST['sitioweb'];
            $Referencia1=$_POST['Referencia1'];
            $Referencia2=$_POST['Referencia2'];
            $Referencia3=$_POST['Referencia3'];


            $db=new Conect_MySql();
            $sql = "INSERT INTO provedores(nombre,giro,contacto,direccion,telefono,rfc,correo,sitioweb,Referencia1,Referencia2,Referencia3,pdf)
             VALUES('$titulo','$descri','$contacto','$direccion','$telefono','$rfc','$correo','$sitioweb','$Referencia1','$Referencia2','$Referencia3','$nombre')";
            $query = $db->execute($sql);
            if($query){
             */  /*
     ?>
     <script type="text/javascript">
   alert("! Proveedor registrado exitosamente!");
   window.location.href='provedores_public.php';
 </script>
 <?php
 /*
            }
        } else {
            echo "Error";
        }
    }
}*/
?>

<html>
    <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="BTX7mT7liHO1hqXA1Dxoj4lmvZqxFgTK/Gg/WB4+BBS/hH+lmKdgB04tgvEEbPaZ06GMz/k94zs14Xew6gmeGw==" />
<link rel="stylesheet" media="all" href="../assets/application-6eaf635c425c1686eab15669fd509649ff45060b315fe52358f8f7aef81136c8.css" data-turbolinks-track="reload" />
<script src="../assets/application-c2684059e5b98adb61b71a5d9ac339856999beefb748deb1e974ab2a7c2943d0.js" data-turbolinks-track="reload"></script>

        <meta charset="UTF-8">
        <title></title>
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
      <li class="nav-item"><a class="nav-link" href="../index.html">Inicio</a></li>
      <li class="nav-item"><a class="nav-link" href="segundo.html">Intranet</a></li>
      <li class="nav-item"><a class="nav-link" href="provedores_public.php">Lista de Proveedores</a></li>
          <li class="nav-item"><a class="nav-link" href="loguin_porv.php">Iniciar sesión</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
      <h1>Nuevo Proveedor</h1>
            <form method="post" action="insertarprovedor.php" enctype="multipart/form-data">
            <div class="form-group">
    <label for="provider_name">Empresa</label>
    <input class="form-control" type="text" name="nombre" id="nombre" required/>
  </div>

  <div class="form-group">
    <label for="provider_focus">Giro</label>
    <input class="form-control" type="text" name="giro" id="giro" required/>
  </div>

  <div class="form-group">
    <label for="provider_contact">Nombre de Contacto</label>
    <input class="form-control" type="text" name="contacto" id="contacto" required/>
  </div>

  <div class="form-group">
    <label for="provider_address">Dirección</label>
    <input class="form-control" type="text" name="direccion" id="direccion" required/>
  </div>

  <div class="form-group">
    <label for="provider_phone">Teléfono</label>
    <input class="form-control" type="number" name="telefono" id="telefono" required/>
  </div>

  <div class="form-group">
    <label for="provider_rfc">RFC</label>
    <input class="form-control" size="12" maxlength="12" type="text" onKeyUp="this.value=this.value.toUpperCase();" name="rfc" id="rfc" required/>
   
  </div>

  <div class="form-group">
    <label for="provider_email">Correo electrónico</label>
    <input class="form-control" type="email" name="correo" id="correo" required/>
  </div>

  <div class="form-group">
    <label for="provider_website">Sitio web</label>
    <input class="form-control" type="text" name="sitioweb" id="sitioweb" required/>
  </div>

  <div class="form-group">
    <label for="provider_reference">Referencia de trabajo 1</label>
    <input class="form-control" type="text" name="Referencia1" id="Referencia1" required/>
  </div>

  <div class="form-group">
    <label for="provider_reference2">Referencia de trabajo 2</label>
    <input class="form-control" type="text" name="Referencia2" id="Referencia2" required/>
  </div>

  <div class="form-group">
    <label for="provider_reference3">Referencia de trabajo 3</label>
    <input class="form-control" type="text" name="Referencia3" id="Referencia3" required/>
  </div>


             <input class="btn btn-primary" type="submit" value="subir" name="subir">
<a class="btn btn-primary" href="provedores_public.php">cancelar</a>
            </form>
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
