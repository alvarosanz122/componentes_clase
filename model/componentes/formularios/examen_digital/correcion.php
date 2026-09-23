<?php 


$conexion = mysqli_connect("127.0.0.1:3307","root","","examen") or die ("Error en la conexión");

$datos = json_decode(file_get_contents("php://input"), true);


$nombreEstudiante = $datos['nombreEstudiante'];
$identificacionEstudiante = $datos['identificacionEstudiante'];
$respuesta1 = $datos['respuesta1'];
$respuesta2 = $datos['respuesta2'];
$respuesta3 = $datos['respuesta3'];
$respuesta4 = $datos['respuesta4'];
$respuesta5 = $datos['respuesta5'];

$query = mysqli_query($conexion,'INSERT INTO respuestas (nombre_estudiante,identificacion,respuesta1,respuesta2,respuesta3,respuesta4,respuesta5) VALUES ("'.$nombreEstudiante.'",'.$identificacionEstudiante.',"'.$respuesta1.'","'.$respuesta2.'","'.$respuesta3.'","'.$respuesta4.'","'.$respuesta5.'")') or die ("Error en la la consulta".mysql_error($conexion));

$res =["res"=> "ko", "message" => "Ha ocurrido un error"];


if($conexion->affected_rows > 0){
  $res =["res"=> "ok", "message" => "Respuestas del examen insertadas correctamente"];
}

echo json_encode($res);

mysqli_close($conexion);


?>