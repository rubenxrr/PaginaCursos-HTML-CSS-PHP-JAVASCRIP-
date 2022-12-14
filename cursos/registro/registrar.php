<?php

include("../conec.php");

if(isset($_POST['boton'])){
    if  (strlen($_POST ['nombre']) >=1 && strlen($_POST ['apellidop'])>=1 && strlen($_POST ['apellidom'])>=1 
    && strlen($_POST ['usuario'])>=1 && strlen($_POST ['correo'])>=1 && strlen($_POST ['contra'])>=1){
        $nombre = trim($_POST['nombre']);
        $apellidop = trim($_POST['apellidop']);
        $apellidom = trim($_POST['apellidom']);
        $usuario = trim($_POST['usuario']);
        $email = trim($_POST['correo']);
        $password = trim($_POST['contra']);
        
        $consulta2 = "SELECT * from registro where usuario='$usuario'";
            $resultado2 = mysqli_query($conex,$consulta2);
            if(mysqli_num_rows($resultado2)>0){
                echo"<script languaje ='JavaScript'>alert('Ya existe este usuario');
                location.assign('registro.php');
                </script>";
            }else{
                
            $consulta = "INSERT INTO registro(nombre,apellido_p,apellido_m,usuario,email,password) VALUES ('$nombre','$apellidop','$apellidom','$usuario','$email','$password')";
            $resultado = mysqli_query($conex,$consulta);
                if($resultado){
                    $asunto = "Confirma tu registro";
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
      <td><a href="https://rubenxr.com/cursos/registro/activar.php?usuario=$usuario "><img src="https://i.imgur.com/CgFdJUg.png"></a>
      </td>
     </tr>
    </table>
    </body>
    </html>
EOF;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    
                    $contenido = " <h1>CONFIRMA TU REGISTRO!</h1> <br>
                    Hola $nombre <br>
                    Gracias por su preferencia. <br> 
                    Confirme su registro dandole click al boton: <br>
                    $msg";
                    
                    mail($email, $asunto, $contenido, $headers);

                    echo"<script languaje ='JavaScript'>alert('Registrado');
                location.assign('login.php');
                </script>";
                }else{
                    echo"<script languaje ='JavaScript'>alert('Error al registrar');
                location.assign('login.php');
                </script>";
                }
                
            }
        
    }else{
        ?>
        <script>
            alert('COMPLETE FORMULARIO')
        </script>
        <?php
    }
}
?>