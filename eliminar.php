<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_calendario'];

$query="DELETE FROM imagen WHERE id_calendario='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	echo "si se elimino";
	//header("Location: tabla_mos.php");
}
else
{
	echo "no se elemino";
}

?>