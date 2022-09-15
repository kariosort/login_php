<?php

include('conexion.php');

$usuario_rec=mysqli_real_escape_string($conexion,$_POST['usuario_rec']);
$resultado='';

if (!empty($usuario_rec)){
    verificarUsuario($usuario_rec);
}

function verificarUsuario($user){
    include('conexion.php');
    $query=("SELECT COUNT(*) as contar FROM usuarios_nueva WHERE usuario='$user'");
    $consulta=mysqli_query($conexion,$query);
    $array=mysqli_fetch_array($consulta);
    
    if ($array['contar']>0){
/*         header("location: ../preguntas_seguridad.php"); */
        echo $resultado;
    
    }else{
        header("location:../recuperarcontrasena.php?fallo=true");
    }
}

?>