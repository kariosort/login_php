<?php

include('conexion.php');

$usuario=mysqli_real_escape_string($conexion,$_POST['usuario']);
$clave=mysqli_real_escape_string($conexion,$_POST['clave']);

$query=("SELECT COUNT(*) as contar FROM usuarios_nueva WHERE usuario='$usuario' and contrasena='$clave' ");
$consulta=mysqli_query($conexion,$query);
$array=mysqli_fetch_array($consulta);

if ($array['contar']>0){
    session_start();
    $_SESSION['username']=$usuario;
    header("location: ../paginaprincipal.php");
}else{
    header("location:../login.php?fallo=true");
}

?>