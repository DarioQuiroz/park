<?php 

	$conexion=mysqli_connect('localhost','root','','vacantes');
    error_reporting(0);
 ?>
<!DOCTYPE HTML>
<html lang="utf-8">
<head>
	<meta charset="UTF-8">
	<title>Parque Industrial Querétaro</title>
    
    
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>


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
	
<div class="space-30"></div>
  <section class="bg-vertical-thirty-half-base sm-bg-vertical-ten-half-base">
     <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 center-col margin-50px-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
                <div class="space-30"></div>
                    <p id="instruccion">Para ingresar una nueva vacante, dale click al boton "Registrar vacante"
                     </p>
                    <button style="align:center;" class="btn Registrarvac" type="submit"><a href="login.php">Registrar vacante</a></button>
                </div>
            </div>
         </div>
     </div>
    </section>
    <section class="bg-vertical-thirty-half-base sm-bg-vertical-ten-half-base">
     <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 center-col margin-50px-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
                <div class="space-30"></div>
                   
                    <button style="align:center;" class="btn ingresa_loguin" type="submit"><a href="login.php"> ingresar</a></button>
                </div>
            </div>
         </div>
     </div>
    </section>
<div class="space-60"></div>

<table class="table">
  <thead style="background-color:#34363a; border-collapse: collapse; color: white; ">
       <tr style="border-radius: 10px;">
          <th>Empresa_que solicita_vacante</th>
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
            $sql="SELECT * from tvacantes";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
         ?>
    <tbody>
      <tr>
        <th style='border-right: 1px solid black;'><?php echo $mostrar['emp_vac'] ?></th>
        <th style='border-right: 1px solid black;'><?php echo $mostrar['puesto'] ?></th>
        <th style='border-right: 1px solid black;'><?php echo $mostrar['Perfil_puesto'] ?></th>
        <th style='border-right: 1px solid black;'><?php echo $mostrar['expe'] ?></th>
        <th style='border-right: 1px solid black;'><?php echo $mostrar['idioma_add'] ?></th>
        <th style='border-right: 1px solid black;'><?php echo $mostrar['nom'] ?></th>
	    	<th style='border-right: 1px solid black;'><?php echo $mostrar['tel'] ?></th>
        <th style='border-right: 1px solid black;'><?php echo $mostrar['correo'] ?></th>
		    <th style='border-right: 1px solid black;'><?php echo $mostrar['add_date'] ?></th>
	      </tr>
      <?php 
            }
        ?>
   </tbody>
</table>
<div class="space-20"></div>
   <footer class="footer" style="    height: 120px;">
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
  <div class="scrollup">
		<a href="#"><i class="fa fa-chevron-up"></i></a>
	</div>

	<script type="text/javascript" src="../js/jquery/jquery.js"></script>
	
	<script type="text/javascript" src="../js/script.js"></script>
	
	<script type="text/javascript" src="../js/bootstrap/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="../js/fancybox/jquery.fancybox.pack.js"></script>
	
	<script type="text/javascript" src="../js/nivo-lightbox/nivo-lightbox.min.js"></script>
	
	<script type="text/javascript" src="../js/owl-carousel/owl.carousel.min.js"></script>

	<script type="text/javascript" src="../js/jquery-easing/jquery.easing.1.3.js"></script>
    
	<script type="text/javascript" src="../js/wow/wow.min.js"></script>
</body>
</html>