<?php
include('../conec.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="misdatos.css">
    <title>Mis datos</title>
</head>
<body>
    <?php 
if(isset($_POST['boton'])){
            
            $nombre=$_POST['nombre'];
            $apellidop=$_POST['apellidop'];
            $apellidom=$_POST['apellidom'];
            $usuario=$_POST['usuario'];
            $email=$_POST['correo'];
            $password=$_POST['contra'];
            
           $consulta="UPDATE registro SET nombre = '$nombre', apellido_p = '$apellidop', apellido_m = '$apellidom',
	    	usuario ='$usuario', email = '$email', password = '$password' WHERE usuario = '$usuario' ";
	    	
	    	$resultado = mysqli_query($conex,$consulta);
            
            if($resultado){
                echo"<script languaje ='JavaScript'>alert('Se actualizaron los datos');
                location.assign('misdatos.php?usuario=$usuario');</script>";
            }else{
                echo"<script languaje ='JavaScript'>alert('Error al actualizar los datos');
                location.assign('misdatos.php?usuario=$usuario');</script>";
            }
            mysqli_close($conex);
            
        }else{
            $usuario=$_GET['usuario'];
            $consulta = "SELECT * FROM registro WHERE usuario='".$usuario."'";
            $resultado = mysqli_query($conex,$consulta);
            
            $fila=mysqli_fetch_assoc($resultado);
            $nombre=$fila["nombre"];
            $apellidop=$fila["apellido_p"];
            $apellidom=$fila["apellido_m"];
            $usuario1=$fila["usuario"];
            $email=$fila["email"];
            $password=$fila["password"];
            
            mysqli_close($conex);
?>

    <div class="contenedor">
        <center><h1 class="titulo">Mis datos.</h1></center>
        <form action="<?=$SERVER['PHP_SELF']?>" method="POST">
           <input class="datos" name="nombre" type="text" value="<?php echo $nombre;?>" placeholder="Nombre">
           <br>
           <input class="datos" name="apellidop" type="text" value="<?php echo $apellidop;?>" placeholder="Apellido Paterno">
           <br>
           <input class="datos" name="apellidom" type="text" value="<?php echo $apellidom;?>" placeholder="Apellido Materno">
           <br>
           <input class="datos" name="usuario" type="text" value="<?php echo $usuario;?>" placeholder="Usuario" readonly>
           <br>
           <input class="datos" type="text" name="correo" value="<?php echo $email;?>" placeholder="Correo Electronico">
           <br>
           <input class="datos" type="text" name="contra" value="<?php echo $password;?>" placeholder="Contraseña">
           <br> 
           <input class="boton" type="submit" name="boton" value="ACTUALIZAR DATOS">
        </form>
    </div>
    <br><br><br><br> 
    <?
    }
    ?>
    <div class="regresar"><a href="../frame/panel_usuario.php?usuario=<?php echo $usuario;?>"><button class="boton1">Regresar</button></a></div>
    
</body>
</html>