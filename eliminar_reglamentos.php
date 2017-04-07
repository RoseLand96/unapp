<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_documento'];

$query="DELETE FROM reglamentos WHERE id_documento='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: reglamentos_cambio.php");
	//header("Location: tabla_mos.php");
}
else
{
	echo "no se elemino";
}

?>