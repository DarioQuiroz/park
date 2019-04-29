<?php 
session_start();
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$rfc=$_POST['RFC'];

$_SESSION['usuario']=$usuario;
$conexion=mysqli_connect("localhost","root","","vacantes");
$consulta="SELECT * FROM usuarios where correo='$usuario' and clave='$clave' and rfc='$rfc'";
$resultado=mysqli_query($conexion, $consulta);


while($mostrar=mysqli_fetch_array($resultado)){

  if($usuario=="facturapiq@piq.com.mx"&&$mostrar['correo']==="facturapiq@piq.com.mx"&& $clave===$mostrar['clave']&& $rfc===$mostrar['rfc']){
    header("location:files_id.php");
  }
  else if($usuario== $mostrar['correo'] && $clave==$mostrar['clave'] && $rfc===$mostrar['rfc'])
  {
    header("location:consulta_fac_por_rfc.php?rfc=$rfc");
  }
  else
  {
    ?>
    <script type="text/javascript">
alert("¡Los datos que ingresaste no corresponden a ninguna cuenta!");
//window.location.href='loguin_facturar.php';
</script>
   <?php

  }
  echo '<br>';


}



$filas=mysqli_num_rows($resultado);
if ($filas>0)
{
 // header("location:consulta_fac_por_rfc.php");
  

  }
  else
  {
    ?>
    <script type="text/javascript">
alert("¡Los datos que ingresaste no corrrespoonden a ninguna cuenta!");
window.location.href='loguin_facturar.php';
</script>
   <?php

  }
  mysqli_free_result($resultado);
  mysqli_close($conexion);

 ?>