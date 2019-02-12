<?php
include("conexionvacante.php");
  
  $doc    ="";
  $nombre ="";
  $dir    ="";
  $tel    ="";

  if(isset($_POST['btn_registrar']))
  {      
    echo "Presiono el boton Registrar";
  }

  
  
  if(isset($_POST['modificar']))
  {
      $doc=$_POST['llave'];
      
    $resultados = mysqli_query($conexion,"SELECT * FROM tvacantes WHERE id_vac='$doc'");
while($consulta = mysqli_fetch_array($resultados))
{
  echo $consulta['id_vac']."<br>";
  echo $consulta['emp_vac']."<br>";
  echo $consulta['puesto']."<br>";
  echo $consulta['Perfil_puesto']."<br>";

}
  }

  if(isset($_POST['btn_actualizar']))
  {
    echo "Presiono el boton actualizar";
  }

  if(isset($_POST['btn_eliminar']))
  {
    echo "Presiono el boton eliminar";
  }


?>

  
  