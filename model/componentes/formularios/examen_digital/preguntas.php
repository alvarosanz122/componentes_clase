<?php
$conexion = mysqli_connect("127.0.0.1:3307","root","","examen") or die ("Error en la conexión");

$res =["res"=> "ko","message"=>"El examen ya fue entregado"];




$datos = json_decode(file_get_contents("php://input"), true);
$respuesta1 = $datos['respuesta1'];
$respuesta2 = $datos['respuesta2'];
$respuesta3 = $datos['respuesta3'];
$respuesta4 = $datos['respuesta4'];
$respuesta5 = $datos['respuesta5'];

$insert = mysqli_query($conexion,'INSERT INTO preguntas (pregunta1,pregunta2,pregunta3,pregunta4,pregunta5) VALUES("'.$respuesta1.'","'.$respuesta2.'","'.$respuesta3.'","'.$respuesta4.'","'.$respuesta5.'")');
if($conexion->affected_rows > 0){
    $res =["res"=> "ok","message"=> "El examen entregado, Suerte"];
}




echo json_encode($res);

mysqli_close($conexion);

?>