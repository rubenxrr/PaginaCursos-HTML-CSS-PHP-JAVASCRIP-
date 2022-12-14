<?php

include("../conec.php");
$usuario=$_GET['usuario'];  
        $sql = "SELECT * FROM java";
        if ($result=mysqli_query($conex,$sql)) {
        $rowcount=mysqli_num_rows($result);
}
if($rowcount == 30){
    echo"<script languaje ='JavaScript'>alert('Curso lleno');
                location.assign('../cursos/cursos.php?usuario=$usuario');
                </script>";
}else{
     $usuario=$_GET['usuario'];  
            $fechareg = date("d/m/y");
            $curso='Java';
            $idreg ='ja'.$usuario.'va';
            
            $consulta2 = "SELECT * from java where id_reg='$idreg'";
            $resultado2 = mysqli_query($conex,$consulta2);
            if(mysqli_num_rows($resultado2)>0){
                echo"<script languaje ='JavaScript'>alert('Ya tienes este curso');
                location.assign('../frame/panel_usuario.php?usuario=$usuario');
                </script>";
            }else{
            $consulta = "INSERT INTO java (usuario_reg,fecha_reg,id_reg) VALUES ('$usuario','$fechareg','$idreg')";
            $resultado = mysqli_query($conex,$consulta);
            
            $consulta1 = "SELECT * FROM registro WHERE usuario='".$usuario."'";
            $resultado2 = mysqli_query($conex,$consulta1);
            
            $fila=mysqli_fetch_assoc($resultado2);
            $nombre=$fila["nombre"];
            $apellidop=$fila["apellido_p"];
            $apellidom=$fila["apellido_m"];
            $email=$fila["email"];
            
            $msg= <<<EOF
   <html>
    <style>
        img{
            width: 100px;
        }
    </style>
   <body>
   <table>
     <tr>
      <td><a href="https://rubenxr.com/cursos/"><img src="https://i.imgur.com/ibVEXUc.png"><a>
      </td>
     </tr>
    </table>
    </body>
    </html>
EOF;

        $msg2= <<<EOF
   <html>
    <style>
        img{
            width: 100px;
        }
    </style>
   <body>
   <table>
     <tr>
      <td><a href="https://rubenxr.com/cursos/"><img src="https://i.imgur.com/9FSkv1e.png"><a>
      </td>
     </tr>
    </table>
    </body>
    </html>
EOF;
            
            $asunto = "HOLA";
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $contenido = "<h1>REGISTRO EXITOSO!</h1>
            Hola $nombre $apellidop $apellidom. <br>
            Su registro al curso de Java fue un exito. <br>
            Ingrese en el apartado 'Mis cursos' para comenzar. <br>
            Presione la imagen para ir a la plataforma. <br>
            $msg";
            $emisor = "ruben@rubenxr.com";
            $fecha = date('d/m/y');
            mail($email, $asunto, $contenido, $headers);
            
            $admin='hdeznavaruben@gmail.com';
            $asunto2 = 'Nuevo registro';
            $contenido2="<h1>NUEVO REGISTRO!</h1>
            El usuario $usuario se registro al curso 'Java'. <br>
            Fecha de registro: $fecha. <br>
            Ingrese al panel para ver los registros. <br>
            Presione la imagen para ir a la plataforma. <br>
            $msg2";
            mail($admin, $asunto2, $contenido2, $headers);
            
            mysqli_close($conex);


            if($resultado){
                echo"<script languaje ='JavaScript'>alert('Se registro el curso');
                location.assign('../frame/panel_usuario.php?usuario=$usuario');</script>";
            }
        }
}
?>