<?php 
session_start();
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$_SESSION['usuario']=$usuario;
$conexion=mysqli_connect("localhost","root","","vacantes");
$consulta="SELECT * FROM usuarios where correo='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);


while($mostrar=mysqli_fetch_array($resultado)){

  if($usuario=="administracion@administracion.com"&&$mostrar['correo']==="administracion@administracion.com"&& $clave===$mostrar['clave']){
    header("location:registro_provedor.php");
  }
  else if($usuario== $mostrar['correo'] && $clave==$mostrar['clave'])
  {
    header("location:loguin_porv.php");
  }
  else
  {
    ?>
    <script type="text/javascript">
alert("¡LO SENTIMOS, PARA ENTRAR A ESTA SECCION DEBES SER ADMNISTRADOR!");
//window.location.href='loguin_facturar.php';
</script>
   <?php

  }
  echo '<br>';


}



  mysqli_free_result($resultado);
  mysqli_close($conexion);

 ?>







