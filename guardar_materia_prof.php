<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$materia=$_POST['txtnom'];
$prof=$_POST['txtnom2'];

$query="INSERT into materia_prof (id_materia,id_profesor) values('$materia','$prof')";
$resultado=$conexion->query($query);
if($resultado)
{
	echo "si se inserto";
	header("Location: materia_prof_cambio.php");
}
else
{
	echo "no se inserto";
}

?>