<?php 
include 'conexionvacante.php';
$empresa= $_POST['empresa'];
$puesto=$_POST['puesto'];
$perfil=$_POST['perfil'];
$experiencia=$_POST['experiencia'];
$idiomas=$_POST['idioma'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$rfc=$_POST['rfc'];
$fecha=$_POST['fecha'];

echo  $empresa;
echo  $puesto;
echo  $perfil;
echo  $experiencia;
echo  $idiomas;
echo  $nombre;
echo  $empresa;
echo  $telefono;
echo  $correo;
echo  $rfc;
echo  $fecha;

$insertar="INSERT INTO tvacantes (`emp_vac`, `puesto`, `Perfil_puesto`, `expe`, `idioma_add`, `nom`, `tel`, `correo`, `rfc`,`add_date`) VALUES 
('$empresa', '$puesto', '$perfil', '$experiencia', '$idiomas', '$nombre', '$telefono', '$correo','$rfc','$fecha')";

$resultado=mysqli_query($conn, $insertar);
if(!$resultado)
{
    ?>
      <script type="text/javascript">
	alert("¡ Error al registrar vacante!");
	window.location.href='subirvacante.php';
</script>
   
<?php

}

else{
    
     ?>
    <script type="text/javascript">
	alert("! Vacante registrada exitosamente!");
	window.location.href='subirvacante.php';
</script>
<?php

}

mysqli_close($conn);


?>