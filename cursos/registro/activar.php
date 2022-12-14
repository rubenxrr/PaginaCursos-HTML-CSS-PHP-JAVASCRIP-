<?php
include('../conec.php');
    $usuario=$_GET['usuario'];
    $status ='si';
   
   $consulta="UPDATE registro SET estatus = '$status' WHERE usuario = '$usuario' ";
	    	$resultado = mysqli_query($conex,$consulta);
    if($resultado){
                echo"<script languaje ='JavaScript'>alert('Cuenta activada');
                location.assign('login.php');
                </script>";
            }else{
                echo"<script languaje ='JavaScript'>alert('Error al activar');
                location.assign('login.php');
                </script>";
            }
            mysqli_close($conex);
?>      