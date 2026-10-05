<?php 
$conexion = mysqli_connect("localhost","root","","examen") OR die('error de conexion');

$datos = json_decode(file_get_contents("php://input"), true);

$nota = $datos['notaExamen'];
$idOculto = $datos['idOculto'];
$idRespuesta = $datos['idRespuesta'];

$insert = mysqli_query($conexion,'INSERT INTO notas (nota,id_respuesta,id_examen) VALUES ('.$nota.','.$idRespuesta.','.$idOculto.')') or die("error insert".mysql_error($conexion));

$res = ['res'=>'ko','message' =>'algun error'];

if($conexion->affected_rows > 0){
  $update = mysqli_query($conexion,'UPDATE respuestas SET corregido="Y" WHERE id_examen='.$idOculto.' AND id_respuesta='.$idRespuesta);
  $res =["res"=> "ok", "message" => "La nota al examen insertada correctamente"];
}

echo json_encode($res);
mysqli_close($conexion);
?>