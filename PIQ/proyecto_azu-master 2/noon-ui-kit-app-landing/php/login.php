
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>
      
      
      
      
      
      
      
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->

<link rel="stylesheet" href="../css/space.css"/>
<link rel="stylesheet" href="../css/style.css"/>


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
      
      <div class="space-200"></div>
      
    <section class="container">
      <div class="row ">
          <div class="col-4"></div>   
          <form action="validarcorreo.php" method="post" class="form-signin col-4" > 
             
              <h1 class="h3 mb-3 font-weight-normal">Ingresar</h1>
              <input type="email" id="inputEmail" class="form-control" placeholder="Correo" required autofocus name="usuario">
              <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required name="clave">
              <div class="space-20"></div>
             
  <button class="btn btn-lg button-disponibilidad btn-block" type="submit"><a href="validarcorreo.php">Ingresar</a></button>
  <button type="button" class="btn button-registro btn-lg btn-block" ><a href="registrarse.html">Registrarse</a></button>
  <a id="registro" class="registro">No tienes una cuenta?</a>
  
          </form>   
          <div class="col-4"></div> 
     </div>
   </section>
            
      
</body>
</html>
