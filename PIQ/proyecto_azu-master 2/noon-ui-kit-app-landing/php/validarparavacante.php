<?php 
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$conexion=mysqli_connect("localhost","root","","pruebadesesion");
$consulta="SELECT * FROM usuario where usuario='$usuario' and contra='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if ($filas>0)
{
    header("location:subirarch.php");

  }
  else
  {

    header("location:login.html");

  }
  mysqli_free_result($resultado);
  mysqli_close($conexion);

 ?>