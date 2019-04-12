<?php 
session_start();
$varsesion = $_SESSION['usuario'];
if($varsesion==null || $varsesion='')
{
    echo'usted no tiene autorizacion';
    header("location:loguin_facturar.php");
die();
  }
session_destroy();
header("location:loguin_facturar.php");
?>