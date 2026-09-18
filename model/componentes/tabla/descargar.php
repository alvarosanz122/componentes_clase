<?php
$dato = $_GET['archivo'] ?? '';

$archivosPermitidos =[
'pagina1' => 'tabla1.html',
'pagina2' => 'tabla2.html',
'pagina3' => 'tabla3.html',
];



if(!isset($archivosPermitidos[$dato])){
   http_response_code(404);
   exit('Archivo no encontrado');
}


$archivo = $archivosPermitidos[$dato];


if(!is_file($archivo) || !is_readable($archivo)){
    http_response_code(404);
   exit('Archivo no se puede leer');
}

header('Content-type:aplication/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($archivo).'"');
header('Content-Length: '.filesize($archivo));

readfile($archivo);
exit;
?>