<?php

$conexion = mysqli_connect("127.0.0.1:3307","root","","tabla3") or die ("Error en la conexión");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];

$query = mysqli_query($conexion,'INSERT INTO registros (nombre,apellido,telefono,correo,direccion) VALUES ("'.$nombre.'","'.$apellido.'","'.$telefono.'","'.$email.'","'.$direccion.'")') or die ("Error en la la consulta".mysql_error($conexion));

$res =["res"=> "ko", "message" => "Ha ocurrido un error"];


if($conexion->affected_rows > 0){

    echo '<script>alert("Usuario registrado correctamente");
location.href = "tabla3.html";
</script>';
}




mysqli_close($conexion);
?>