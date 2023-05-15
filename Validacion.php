<?php
$servername = "localhost";
$username = "root";
$password = "fordfocus1";
$dbname = "loginregister_db";
$conexion = mysqli_connect($servername, $username, $password, $dbname);


$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contrasena' ";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {

    header("Location: ArgPrograma.html");
    exit();
} else {
    echo "Usuario o contraseña incorrectos";
}

mysqli_close($conexion);

?>

