<?php 
include 'conexionvacante.php';
$nombre= $_POST['nombre'];
$giro=$_POST['giro'];
$contacto=$_POST['contacto'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$rfc =$_POST['rfc'];
$correo=$_POST['correo'];
$sitioweb=$_POST['sitioweb'];
$Referencia1=$_POST['Referencia1'];
$Referencia2=$_POST['Referencia2'];
$Referencia3=$_POST['Referencia3'];
$pdf=$_POST['pdf'];




$insertar="INSERT INTO provedores ( `nombre`, `giro`, `contacto`, `direccion`, `telefono`, `rfc`, `correo`, `sitioweb`, `Referencia1`, `Referencia2`, `Referencia3`)
 VALUES ('$nombre', '$giro', '$contacto', '$direccion', ' $telefono', ' $rfc', '$correo', '$sitioweb', '$Referencia1', '$Referencia2', '$Referencia3')";
$resultado=mysqli_query($conn, $insertar);
if(!$resultado)
{
    ?>
      <script type="text/javascript">
    alert("¡ Error al registrar vacante!");
    window.location.href='provedores_public.php';
 
</script>
   
<?php

}

else{
    
     ?>
    <script type="text/javascript">
	alert("!Proveedor registrado!");
	window.location.href='provedores_public.php';
</script>
<?php

}

mysqli_close($conn);


?>