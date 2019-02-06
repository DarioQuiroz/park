 <?php 

$conexion=mysqli_connect('localhost','root','','vacantes');
error_reporting(0);
?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Jekyll v3.8.5">
<title>Checkout example · Bootstrap</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
<!-- Bootstrap core CSS -->
<link href="/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
    <link rel="stylesheet" href="../css/space.css" />
    <link rel="stylesheet" href="../css/style.css" />
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
<link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">




<?php
 
if(isset($_POST['submit'])){
$name = $_POST['name'];
}?>
 
<section class="container">
      <div class="row ">
          <div class="col-4"></div>   
          <form method="post" class="form-signin col-4" > 
             
              <h3 class="h3 mb-3 font-weight-normal" >Ingresa tu RFC para acceder a tus vacantes</h3>
              
              <input  type="text" name="name" class="form-control" placeholder="RFC" required>
              <div class="space-20"></div>
             
  <button class="btn btn-lg button-disponibilidad btn-block" type="submit" name="submit" value="Submit Form">Ver mis Vacantes</button>
  
          </form>   
          <div class="col-4"></div> 
     </div>
   </section>
            

<div class="space-30"></div>
<table class="table">
<thead class="thead-dark">
<tr>
    <th>id_vacante</td>
        <th>Empresa que solicita vacante</th>
        <th>Puesto</th>
        <th>Perfil</th>
        <th>Experiencia</th>	
        <th>Idiomas</th>	
        <th>Nombre (contacto)</th>	
        <th>Telefono</th>	
        <th>Correo</th>	
        <th>Fecha de publicasión</th>	
</tr>
</thead>
<?php 
    $sql="SELECT * from tvacantes WHERE rfc='$name' ";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
     ?>
     
<tbody>
<tr>
        <th><?php echo $mostrar['id_vac'] ?></th>
        <th><?php echo $mostrar['emp_vac'] ?></th>
        <th><?php echo $mostrar['puesto'] ?></th>
        <th><?php echo $mostrar['Perfil_puesto'] ?></th>
        <th><?php echo $mostrar['expe'] ?></th>
        <th><?php echo $mostrar['idioma_add'] ?></th>
        <th><?php echo $mostrar['nom'] ?></th>
        <th><?php echo $mostrar['tel'] ?></th>
        <th><?php echo $mostrar['correo'] ?></th>
        <th><?php echo $mostrar['add_date'] ?></th>
    </tr>
<?php 
}
 ?>
</tbody>
</table>

    <div class="space-50"></div>
    

<div id="formulario" class="container" action="insertarvacante.php" method="post">
    
    <h4 class="mb-12">Registra tu vacante</h4>
    <div class="row">
        
        <div class="col-md-6 order-md-1">
            
            <form class="needs-validation" novalidate >
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="emp_vac">Nombre de la empresa</label>
                        <input type="text" class="form-control" name="emp_vac" id="emp_vac" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="puesto">Puesto</label>
                        <input type="text" class="form-control" name="puesto" id="puesto" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="Perfil_puesto">Perfil del puesto</label>
                        <input type="text" class="form-control" name="Perfil_puesto" id="Perfil_puesto" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="expe">Experiencia</label>
                        <input type="text" class="form-control" id="expe" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                
            </form>
        </div>
        <div class="col-md-6 order-md-1">
            <form class="needs-validation" novalidate>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="idioma_add">Idiomas</label>
                        <input type="text" class="form-control" id="idioma_add" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nom">Nombre</label>
                        <input type="text" class="form-control" id="nom" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="tel">Telefono</label>
                        <input type="text" class="form-control" id="tel" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="correo">Correo</label>
                        <input type="text" class="form-control" id="correo" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                </div>
               
                <hr class="mb-4">
                
            </form>
        </div>
        
    </div>
    <div class="text-center">
        <div style="padding-bottom:5%;"></div>
       <div style="padding-bottom:5%;"></div>
     
       <button class="btn btn-lg button-disponibilidad btn-block" type="submit"><a href="insertarvacante.php">Registrar vacante</a></button>
       <div style="padding-bottom:10%;"></div>
     </div>

   

</div>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP"
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/Mostrar.js"></script>
<script src="form-validation.js"></script>
</body>

</html>