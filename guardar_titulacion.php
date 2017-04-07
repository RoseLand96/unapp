<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$titu=$_POST['titulo'];
$nomb=$_FILES["archivo"]["name"];
$ruta=$_FILES["archivo"]["tmp_name"];
$destino="archivos/".$nomb;
copy($ruta,$destino);
$query="INSERT INTO titulacion (titulo,nombre_archivo) values('$titu','$destino')";
$resultado=$conexion->query($query);
if($resultado)
 {
	   echo "si se inserto";
 }else

{
	echo "no se inserto";
  }
?>