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
<?php 
$conexion=mysqli_connect('localhost','root','','vacantes');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Parque Industrial Querétaro</title>
    
    
    
    <!--empiezan adaptaciones de share en redes sociales-->
    
    <meta data-react-helmet="true" http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta data-react-helmet="true" http-equiv="Accept-CH" content="DPR, Width, Viewport-Width, Save-Data" />

    <meta data-react-helmet="true" name="viewport" content="width=device-width, initial-scale=1" />
    <meta data-react-helmet="true" name="description" content="La mejor opción para líderes, hospeda tu empresa y conóce nuestros beneficios."/>
    
    <meta data-react-helmet="true" name="google-site-verification" content="1rE9jjZz1N50ap3MzuT3b31qXOWEN4Z--OfhREYiwLw" />
    <meta data-react-helmet="true" property="og:title" content="Nosotros somos un parque industrial Queretano" />
    <meta data-react-helmet="true" property="og:description" content="La mejor opción para líderes, hospeda tu empresa y conóce nuestros beneficios."/>
    <meta data-react-helmet="true" property="og:image" content="http://piq.com.mx/images/images/iphone1.png" />
    <meta data-react-helmet="true" property="og:url" content="http://piq.com.mx" />
    <meta data-react-helmet="true" property="og:locale" content="es_LA" />
    <meta data-react-helmet="true" property="og:type" content="website"/>
    <meta data-react-helmet="true" property="og:site_name" content="PIQ"/>
    
    

    <!--TERMINAN adaptaciones de share en redes sociales-->
    <link rel="stylesheet" href="../css/UI-Flag-master/flag.css" />
    <link rel="stylesheet" href="../css/UI-Flag-master/flag.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity=
    "sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css" />
	<link rel="stylesheet" href="../css/linearicons.css" />
	<link rel="stylesheet" href="../css/iconmoon.css" />
	<link rel="stylesheet" href="../css/animat/animate.min.css" />
	<link rel="stylesheet" href="../css/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="../css/nivo-lightbox/nivo-lightbox.css" />
	<link rel="stylesheet" href="../css/themes/default/default.css" />
	<link rel="stylesheet" href="../css/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="../css/owl-carousel/owl.theme.css" />
	<link rel="stylesheet" href="../css/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="../css/space.css"/>
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/responsive.css" />
    <link rel="stylesheet" href="../SVG/PLANO.html" />
    <link rel="" href="php/php - mysql.txt"/>



    
</head>
<body>



	<header id="home" class="header">
		<div class="main_menu_bg navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="nave_menu">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button id="menu-boton" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" 
                          aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
                                
                               <a  href="#home" id="logo">
                                <div class="logo hide-navigation">
                                  <img src="../images/piq.png"   alt="Parque_industrial_queretaro" class="logo-light"/>
                                  <img src="../images/piq-01.svg" alt="Parque_industrial_queretaro" class="logo-dark">
                                 </div>
				   	            </a>
							
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  
						  <ul class="nav navbar-nav navbar-right">
						
                            <li><a href="../index.html">Inicio</a></li>
						
                            <li><a href="segundo.html">INTRANET</a></li>
                            <li><a href="cerrarsesion.php">Cerrar sesion</a></li>
                             
                           
						  </ul>
						</div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
					</div>	
				</div><!--End of row -->
				
			</div><!--End of container -->
            
			
		</div>

        
        

	</header> <!--End of header -->


<div class="parallax"></div>
	



<section  style="background-color: white;"  class="container" >
<div id="contenido">
    <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">

<form  action="insertarvacante.php" id="form_modif" method="post" onsubmit="return validar();">
<div class="space-50"></div>

<h2 class="">Registrar vacante</h2>
    <div class="col-4 columna col-lg-4 col-md-4 col-sm-12 col-xs-12" >
        <a class="descripcion" style=" color: rgb(11, 12, 12);">Empresa: </a>
        <input type="text" class="form-control" name="empresa" id="empresa">
        <a class="descripcion" style=" color: rgb(11, 12, 12);">Puesto: </a>
        <input type="text" class="form-control" id="puesto" name="puesto" />
        <a class="descripcion" style=" color: rgb(11, 12, 12);">Perfil: </a>
        <textarea style="border-radius: 10px;" type="text" class="form-control" id="perfil" name="perfil" > </textarea>
        <a class="descripcion" style=" color: rgb(11, 12, 12);">Experiencia: </a>
        <input type="text" class="form-control" id="experiencia" name="experiencia" />
        <a class="descripcion" style=" color: rgb(11, 12, 12);">Idiomas: </a>     
        <input type="text" class="form-control" id="idioma" name="idioma" />
    </div>
    <div class="col-4 columna col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <a class="descripcion" style=" color: rgb(11, 12, 12);">Nombre(contacto): </a>
          <input type="text" class="form-control" id="nombre" name="nombre" />
         <a class="descripcion" style=" color: rgb(11, 12, 12);">Telefono: </a>
         <input type="number" class="form-control" id="telefono" name="telefono" />
         <a class="descripcion" style=" color: rgb(11, 12, 12);">Correo: </a>
         <input type="email" class="form-control" id="correo" name="correo" />
         <a class="descripcion" style=" color: rgb(11, 12, 12);">RFC: </a>
         <input type="text" class="form-control" id="rfc" name="rfc" />
         <a class="descripcion" style=" color: rgb(11, 12, 12);">Fecha:</a>
         <input type="date" class="form-control" id="fecha" name="fecha" />
    </div>
 
  <div class="space-20"></div>
         <div class="text-center">
           <input id="registe" type="submit" class="btn btn-lg button-disponibilidad" value="Registrar"/>
         </div>
            <div class="space-30"></div>
            </div>
            </div>
</form>
</section>   

<?php
 
if(isset($_POST['submit'])){
$name = $_POST['name'];
}?>
 <div class="space-100"></div>
<section  class="container" style="float:rigth; align: right;">
     
          <div class="col-md-8 "></div>   
          <form method="post" class="form-signin col-4" > 
             
              <p class="h6 mb-3 font-weight-normal" >Ingresa tu RFC para acceder a tus vacantes</p>
              
              <input  type="text" name="name" class="form-control" placeholder="RFC" required>
              <div class="space-20"></div>
             
  <button class="btn btn-sm vervacantes btn-block"  type="submit" name="submit" value="Submit Form">Ver mis Vacantes</button>
  
          </form>   
          <div class="col-4"></div> 
    
   </section >
            
   <section style="background-color:#ffffff;"> 
     

<div id="vacs" class="space-50"></div>
<table class="table">
<thead style="background-color:#34363a; border-collapse: collapse; color: white; ">
<tr style="border-radius: 10px;">
   
        <th>Empresa_que solicita vacante</th>
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


        echo "<tr >";
        echo "<th style='border-right: 1px solid black;'>"; echo $mostrar['emp_vac']; echo "</th>";
        echo "<th style='border-right: 1px solid black;'>"; echo $mostrar['puesto']; echo "</th>";
        echo "<th style='border-right: 1px solid black;'>"; echo $mostrar['Perfil_puesto']; echo "</th>";
        echo "<th style='border-right: 1px solid black;'>"; echo $mostrar['expe']; echo "</th>";
        echo "<th style='border-right: 1px solid black;'>"; echo $mostrar['idioma_add']; echo "</th>";
        echo "<th style='border-right: 1px solid black;'>"; echo $mostrar['nom']; echo "</th>";
        
        echo "<th style='border-right: 1px solid black;'>"; echo $mostrar['tel']; echo "</th>";
        echo "<th style='border-right: 1px solid black;'>"; echo $mostrar['correo']; echo "</th>";
        echo "<th style='border-right: 1px solid black;'>"; echo $mostrar['add_date']; echo "</th>";
        echo "<th style='border-right: 1px solid black;'>  <a href=> <button type='button' class=' btn-success modeli'>Modificar</button> </a> </th>";
        echo "<th style='border-right: 1px solid black;'> <a href='eliminar.php?no=".$mostrar['id_vac']."''><button type='button' class=' btn-danger modeli'>Eliminar</button></a> </th>";
      echo "</tr>";
     ?>
<tbody>

<?php 

}
 ?>

</tbody>
</table>
</section>
   
	<!-- footer Section -->
	<footer style="    height: 120px;" class="footer">
		<div class="container">
			<div class="row wow zoomIn" data-wow-duration="2s">
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="single_footer text-right">
						
						
					
					</div>
				</div>
                
                <!--inicia login-->
            

              
                 <div class="space-20 text-center">
                       <a href="../files/aviso%20de%20privacidad%20PIQ.pdf" >AVISO DE PRIVACIDAD </a>
                 </div>
         
  
			</div>
			
		</div>
	</footer>

	<!-- STRAT SCROLL TO TOP -->
	
	<div class="scrollup">
		<a href="#"><i class="fa fa-chevron-up"></i></a>
	</div>

	<script type="text/javascript" src="../js/jquery/jquery.js"></script>
  
  
  <script type="text/javascript" src="../js/script.js"></script>
  
	<script type="text/javascript" src="../js/validar.js"></script>
	
	<script type="text/javascript" src="../js/bootstrap/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="../js/fancybox/jquery.fancybox.pack.js"></script>
	
	<script type="text/javascript" src="../js/nivo-lightbox/nivo-lightbox.min.js"></script>
	
	<script type="text/javascript" src="../js/owl-carousel/owl.carousel.min.js"></script>

	<script type="text/javascript" src="../js/jquery-easing/jquery.easing.1.3.js"></script>
    
  <script type="text/javascript" src="../js/wow/wow.min.js"></script>

</body>
</html>