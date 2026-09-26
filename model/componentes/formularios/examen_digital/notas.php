<?php 
$conexion = mysqli_connect("127.0.0.1:3307","root","","examen") OR die('error de conexion');

$datos = json_decode(file_get_contents("php://input"), true);

$nota = $datos['notaExamen'];
$idOculto = $datos['idOculto'];

$insert = mysqli_query($conexion,'INSERT INTO notas (nota,id_examen) VALUES ('.$nota.','.$idOculto.')') or die("error insert".mysql_error($conexion));

$res = ['res'=>'ko','message' =>'algun error'];

if($conexion->affected_rows > 0){
  $update = mysqli_query($conexion,'UPDATE respuestas SET corregido="Y" WHERE id_examen='.$idOculto);
  $res =["res"=> "ok", "message" => "La nota al examen insertada correctamente","id"=> $idOculto];
}

echo json_encode($res);
mysqli_close($conexion);
?>