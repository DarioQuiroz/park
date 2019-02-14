<?php 
session_start();
$varsesion = $_SESSION['usuario'];
if($varsesion==null || $varsesion='')
{
    echo'usted no tiene autorizacion';
    header("location:login.php");
die();
  }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>
    <link rel="stylesheet" href="../css/space.css"/>
   




    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <!-- Bootstrap core CSS -->



    <style>
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->

</head>

<body class="text-center">
    <h1>Bienvenido: <?php echo $_SESSION ['usuario']  ?> </h1>

    <section class="container">
        <div class="row ">
            <div class="col-4"></div>
            <form class="form-signin col-4">
                    <div class="space-200"></div>
      
                <h1 class="h3 mb-3 font-weight-normal">Subir Archivos de factura</h1>
                <a href="cerrarsesion.php">Cerrar sesion</a>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Seleccionar </label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Seleccionar</label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Seleccionar </label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Seleccionar </label>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" style="background-color:#3C3CFF">Subir archivos</button>
                <button type="button" class="btn btn-primary" style="background-color:#3C3CFF"> <a href="cerrarsesion.php">Cerrar sesion</a> </button>
            </form>
            <div class="col-4"></div>
        </div>
    </section>
    <div class="space-200"></div>
<section>


        <table width="80%" border="0">
          <tr>
              <td bgcolor="#12228B" align="middle"><font face="arial" size="3" color="white"><b>Id</b></font></td>
              <td bgcolor="#12228B" align="middle"><font face="arial" size="3" color="white"><b>Documento 1</b></font></td>
              <td bgcolor="#12228B" align="center"><font face="arial" size="3" color="white"><b>Documento 2</b></font></td>
              <td bgcolor="#12228B" align="middle"><font face="arial" size="3" color="white"><b>decumento 3</b></font></td>  
              <td bgcolor="#12228B" align="middle"><font face="arial" size="3" color="white"><b>decumento 4</b></font></td>
              <td bgcolor="#12228B" align="middle"><font face="arial" size="3" color="white"><b>RFC</b></font></td>
              <td bgcolor="#12228B" align="middle"><font face="arial" size="3" color="white"><b>Fecha</b></font></td>
          </tr>
          
   
        </table></section>

</body>

</html>