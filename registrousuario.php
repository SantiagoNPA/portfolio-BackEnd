<?php
$conexion= mysqli_connect("localhost","root","fordfocus1","loginregister_db");
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
        VALUES('$nombre_completo','$correo','$usuario','$contrasena')";

$verificarcorreo = mysqli_query($conexion,"SELECT*FROM usuarios WHERE correo= '$correo' ");


if(mysqli_num_rows($verificarcorreo) > 0)
        {
                echo '
                <script>
                alert("Este correo ya esta registrado,intenta con otro");
                widow.location "log.php";
                </script>
                ';
                exit();
        }
 $verificarusuario = mysqli_query($conexion,"SELECT*FROM usuarios WHERE usuario = '$usuario' ");
        if(mysqli_num_rows($verificarusuario) > 0)
                {
                        echo '
                        <script>
                        alert("Este usuario ya esta registrado,intenta con otro");
                        widow.location "log.php";
                        </script>
                        ';
                }
        
        $ejecutar = mysqli_query($conexi
$ejecutar = mysqli_query($conexion, $query);
if($ejecutar){
        echo '
        <script>
         alert ("Usuario almacenado exitosamente");
         window.location="log.php";
         </script>
        ';
}
        else{
                echo '
        <script>
         alert ("Intentalo de nuevo, usuario no almacenado");
         window.location="log.php";
         </script>
        ';

        }

mysqli_close($conexion);
?>