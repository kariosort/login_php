<?php

include('conexion.php');

$respuesta=mysqli_real_escape_string($conexion,$_POST['respuesta']);
$preguntas=mysqli_real_escape_string($conexion,$_POST['preguntas']);
$usuario=isset($_GET['resultado']);

echo $usuario;

/* $query=("SELECT COUNT(*) as contar FROM preguntas_usuario pu 
inner JOIN usuarios_nueva u ON pu.id_usuario = u.id_usuario 
inner JOIN preguntas p ON pu.id_pregunta = p.id_pregunta
WHERE pu.respuesta='$respuesta'and p.pregunta='$preguntas' and u.usuario='josemario'");
 
$consulta=mysqli_query($conexion,$query);
$array=mysqli_fetch_array($consulta);

    if ($array['contar']>0){
        echo 'hola mundo';
        header("location: ../login2.php");

    }else{
        echo 'houston tenemos un problema';
    }  */
?> 