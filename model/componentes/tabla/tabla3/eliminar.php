<?php
$conexion = mysqli_connect("127.0.0.1:3307","root","","tabla3");
$email = $_POST['email'];
$sanitized_email = filter_var($email, FILTER_SANITIZE_EMAIL);


if(filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)){

$consultar = mysqli_query($conexion,'SELECT COUNT(*) as contador FROM registros WHERE correo ="'.$email.'"') OR DIE("Problemas en el registro");

$res = ['res' => 'ok',"message"=>'El correo no existe'];

$ar = mysqli_fetch_assoc($consultar);


if($ar['contador'] > 0){
$consulta = mysqli_query($conexion,'DELETE FROM registros WHERE correo="'.$sanitized_email.'"');


echo '<script>
alert("usuario borrado correctamente");
location.href = "tablas2.php";
</script>';

}else{
    echo $res['message'];
}

mysqli_close($conexion);
}
?>