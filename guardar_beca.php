<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$titulo=$_POST['titulo'];
$nombre=$_FILES["archivo"]["name"];
$ruta=$_FILES["archivo"]["tmp_name"];
$destino="archivos/".$nombre;
copy($ruta,$destino);
$query="INSERT INTO becas (titulo,nombre_archivo) values('$titulo','$destino')";
$resultado=$conexion->query($query);
if($resultado)
 {
	   echo "si se inserto";
 }else

{
	echo "no se inserto";
  }
?>