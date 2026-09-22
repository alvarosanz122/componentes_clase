<?php
$archivo = $_GET['archivo'];

$arra =['pagina1'=>['tabla1.html','js/tabla1.js'],
        'pagina2'=>['tabla2.html','js/tabla2.js','css/estilos.css','img/62821.png','img/763072.png'],
        'pagina3'=>['tabla3/bd.sql','tabla3/conexion.php','tabla3/eliminar.php','tabla3/tabla3.html','tabla3/tablas2.php']
];


$zip = new ZipArchive();

$nombreZip = __DIR__ . '/archivo_temporal.zip';

if ($zip->open($nombreZip, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== TRUE) {
    exit("No se pudo crear el ZIP");
}

foreach ($arra as $indice => $value) {
   
foreach ($value as $value2) {
    if($archivo ==  $indice){

if (!file_exists(__DIR__.'/'.$value2)) {
    exit("No existe: " . $value2);
}

if (!$zip->addFile(__DIR__.'/'.$value2, $value2)) {
    exit("No se pudo añadir ".$value2);
    }
   }
  }
}

if (!$zip->close()) {
    exit("No se pudo cerrar el ZIP");
}

if (!file_exists($nombreZip)) {
    exit("El ZIP no se ha creado");
}

// Limpiar cualquier salida anterior
if (ob_get_level()) {
    ob_end_clean();
}

header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="archivo_'.$archivo.'.zip"');
header('Content-Length: ' . filesize($nombreZip));
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');

readfile($nombreZip);

unlink($nombreZip);

exit;

?>