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
 
    header("location:login.php");

  }
  else
  {

    header("location:subirvacante.php");

  }
  mysqli_free_result($resultado);
  mysqli_close($conexion);

 ?>