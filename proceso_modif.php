<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_calendario'];
$nom=$_POST['nombre'];
$imagen=addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
$query="UPDATE imagen SET nombre='$nom', imagen='$imagen' WHERE id_calendario='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: tabla_mos.php");
}
else
{
	echo "no se modifico";
}

?>