<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['matricula_es'];

$query="DELETE FROM estudiantes WHERE matricula_es='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: estudiante_cambio.php");
	//header("Location: tabla_mos.php");
}
else
{
	echo "no se elemino";
}

?>