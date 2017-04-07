<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$materia=$_POST['txtnom'];

$query="INSERT into materias (materia) values('$materia')";
$resultado=$conexion->query($query);
if($resultado)
{
	echo "si se inserto";
	header("Location: materias_cambio.php");
}
else
{
	echo "no se inserto";
}

?>