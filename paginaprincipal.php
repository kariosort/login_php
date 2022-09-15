<?php

session_start();
$usuario_logueado=$_SESSION['username'];

if(!isset($usuario_logueado)){
    header("location:login.php");
}else{
    echo "<h1>Bienvenido $usuario_logueado </h1>";
    echo "<a href='config_login/salir.php'> Salir </a>";
}


?>