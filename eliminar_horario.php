<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_horario'];

$query="DELETE FROM horario WHERE id_horario='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: horario_cambio.php");
	//header("Location: tabla_mos.php");
}
else
{
	echo "no se elemino";
}

?>