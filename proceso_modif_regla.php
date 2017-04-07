<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_documento'];
$titulo=$_POST['titulo'];
$nombre=$_FILES["archivo"]["name"];
$ruta=$_FILES["archivo"]["tmp_name"];
$destino="archivos/".$nombre;
copy($ruta,$destino);
$query="UPDATE reglamentos SET titulo='$titulo', nombre_archivo='$destino' WHERE id_documento='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: reglamentos_cambio.php");
}
else
{
	echo "no se modifico";
}

?>