<?php 
$conexion = mysqli_connect("localhost","root","","examen") or die ("Error en la conexión");

$nombreEstudiante = $_POST['nombreEstudiante'];
$identificacionEstudiante = $_POST['identificacionEstudiante'];
$respuesta1 = $_POST['respuesta1'];
$respuesta2 = $_POST['respuesta2'];
$respuesta3 = $_POST['respuesta3'];
$respuesta4 = $_POST['respuesta4'];
$respuesta5 = $_POST['respuesta5'];

$query = mysqli_query($conexion,'INSERT INTO respuestas (nombre_estudiante,identificacion,respuesta1,respuesta2,respuesta3,respuesta4,respuesta5) VALUES ("'.$nombreEstudiante.'",'.$identificacionEstudiante.',"'.$respuesta1.'","'.$respuesta2.'","'.$respuesta3.'","'.$respuesta4.'","'.$respuesta5.'")') or die ("Error en la la consulta".mysql_error($conexion));

$res =["res"=> "ko", "message" => "Ha ocurrido un error"];


if($conexion->affected_rows > 0){

    echo '<script>alert("Respuestas del examen insertadas correctamente");
location.href = "index.html";
</script>';
}




mysqli_close($conexion);


?>