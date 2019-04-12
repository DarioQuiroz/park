<?php 
include 'conexionvacante.php';
$nombre= $_POST['nombre'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$berificar=$_POST['berificarcontraseña'];
$rfc=$_POST['rfc'];





if (buscarrepetido($correo, $conn) == 1) {
        ?>
<script type="text/javascript">
        alert("!El usuario ya existe!");
        window.location.href = 'registrarse.html';
</script>
<?php
} else {
        $insertar="INSERT INTO usuarios (`nombre`, `correo`, `clave`, `rfc`) VALUES 
        ('$nombre', '$correo', '$contraseña', '$rfc')";
        
        $resultado=mysqli_query($conn, $insertar);
        
}







function buscarrepetido($user, $conn)
{
        $sql = "SELECT *FROM usuarios WHERE correo='$user'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {  ?>
                <script type="text/javascript">
                        alert("!El correo que intentas ingresar, ya ha sido registrado!");
                        window.location.href = 'registrarsefac.html';
                </script>
                <?php
                return 1;
        } else {
        return o;
}
}



if(!$resultado)
{
        ?>
     <script type="text/javascript">
	alert("! error al registrar !");
	window.location.href='registrarse.html';
</script>
<?php
}
else{
        ?>
     <script type="text/javascript">
	alert("¡ Usuario registrado exitosamente !");
	window.location.href='login.php';
</script>
<?php
}
mysqli_close($conn);
?>