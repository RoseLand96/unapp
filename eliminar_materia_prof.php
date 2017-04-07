<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_mat_prof'];

$query="DELETE FROM materia_prof WHERE id_mat_prof='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: materia_prof_cambio.php");
	//header("Location: tabla_mos.php");
}
else
{
	echo "no se elemino";
}

?>