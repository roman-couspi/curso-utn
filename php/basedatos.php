<?php 
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$email_form = $_POST['email'];

$conexion = mysqli_connect("localhost", "root", "", "utn") or exit("no se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO registro VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$email_form')");

mysqli_Close($conexion);

header("location: formulario.php?ok");