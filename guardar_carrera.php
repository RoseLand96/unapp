<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$carrera=$_POST['txtnom'];

$query="INSERT into carreras (carrera) values('$carrera')";
$resultado=$conexion->query($query);
if($resultado)
{
	echo "si se inserto";
	header("Location: carreras_cambio.php");
}
else
{
	echo "no se inserto";
}

?>