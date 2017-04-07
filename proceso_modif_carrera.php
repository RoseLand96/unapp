<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_carrera'];
$carrera=$_POST['txtnom'];

$query="UPDATE carreras SET carrera='$carrera' WHERE id_carrera='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: carreras_cambio.php");
}
else
{
	echo "no se modifico";
}

?>