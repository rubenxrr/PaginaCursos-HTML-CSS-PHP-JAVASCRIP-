<?php

include("../conec.php");
$usuario=$_POST["usuario"];
$contraseña=$_POST["contra"];
$estatus='si';

if(!empty($_POST["boton"])){
    if(empty($_POST["usuario"]) and empty($_POST["contra"])){
        echo '<div class="alert alert-danger">DATOS VACIOS</div>';
    }else{
         $sql2=$conex->query(" select * from admin where usuario='$usuario' and password='$contraseña'");
        if($datos2=$sql2->fetch_object()){
            header("location:../frame/panel_admin.php?usuario=$usuario");
        }else{
        $sql=$conex->query(" select * from registro where usuario='$usuario' and password='$contraseña' and estatus='$estatus' ");
        if($datos=$sql->fetch_object()){
            header("location:../frame/panel_usuario.php?usuario=$usuario");
        }else{
            echo '<div class="alert alert-danger">DATOS INCORRECTOS</div>';
        }
        }
    }
}

?>