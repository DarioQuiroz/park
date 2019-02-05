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

<div class="space-30"></div>
<table class="table">
  <thead class="thead-dark">
    <tr>
    <td>id_vacante</td>
			<th>Empresa que solicita vacante</th>
			<th>Puesto</th>
			<th>Profesion</th>
            <th>Escolaridad</th>	
            <th>Edad</th>	
            <th>Experiencia</th>	
            <th>Idioma Adicional</th>	
            <th>Conocimientos</th>		
            <th>Nombre</th>	
            <th>Telefono</th>	
            <th>Correo</th>	
            <th>Fecha de publicasión</th>	
    </tr>
  </thead>


  <?php 
		$sql="SELECT * from tvacantes";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
         ?>
         

         
  <tbody>
  <tr>
			<th><?php echo $mostrar['id_vac'] ?></th>
			<th><?php echo $mostrar['emp_vac'] ?></th>
			<th><?php echo $mostrar['puesto'] ?></th>
			<th><?php echo $mostrar['profesion'] ?></th>
            <th><?php echo $mostrar['escol'] ?></th>
            <th><?php echo $mostrar['edad'] ?></th>
			<th><?php echo $mostrar['exp'] ?></th>
            <th><?php echo $mostrar['idioma_add'] ?></th>
            <th><?php echo $mostrar['Conocimientos'] ?></th>
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
 
        <div class="space-100"></div>
        <div class="text-center">
                <div style="padding-bottom:5%;"></div>
               <div style="padding-bottom:5%;"></div>
             
               <button id="mostrar" class="button-disponibilidad center-block" onclick="mostrarvalidar() "> Subir Una Vacante</button>
               <div style="padding-bottom:10%;"></div>
             </div>
             <section id="validar" class="container">
                <div class="row ">
                    <div class="col-4"></div>   
                    <form class="form-signin col-4">
                       
                        <h1 class="h3 mb-3 font-weight-normal">Ingresar</h1>
                        <label for="inputEmail" class="sr-only">Ingresar correo</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Correo" required autofocus>
                        <label for="inputPassword" class="sr-only">Contraseña</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                        <div class="space-20"></div>
                        <div class="checkbox mb-3">
                           <input id="checkbox-1" type="checkbox" value="remember-me"> <p>Recordarme</p>
                           
                          </div>
            <button class="btn btn-lg button-disponibilidad btn-block" type="submit"  onclick="ocultarvalidar(); mostrarformulario()"><a>Validar</a></button>
           
            
                    </form>   
                    <div class="col-4"></div> 
               </div>
             </section>

     
    <div id="formulario" class="container">
        <h4 class="mb-12">Registra tu vacante</h4>
        <div class="row">
            
            <div class="col-md-6 order-md-1">
                
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Nombre de la empresa</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Puesto</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Profesión</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Escolaridad</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Edad</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Ingles</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Experiencia</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
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
                            <label for="firstName">Observacion</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Otro idioma</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Conocimientos</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Nombre</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Contactame (Nombre)</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Contactame (Telefono)</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Contactame (Email)</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
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
         
           <button class="button-disponibilidad" onclick="ocultartodo()">Subir Vacante</button>
           <div style="padding-bottom:10%;"></div>
         </div>
         
   
</div>
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