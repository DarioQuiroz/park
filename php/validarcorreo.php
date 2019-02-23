<?php 
session_start();
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$_SESSION['usuario']=$usuario;
$conexion=mysqli_connect("localhost","root","","vacantes");
$consulta="SELECT * FROM usuarios where correo='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if ($filas>0)
{
  header("location:subirvacante.php");
  

  }
  else
  {
    ?>
    <script type="text/javascript">
alert("Los datos que ingresaste no corrrespoonden a ninguna cuenta!!");
window.location.href='login.php';
</script>
   <?php

  }
  mysqli_free_result($resultado);
  mysqli_close($conexion);

 ?>