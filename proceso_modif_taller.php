<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_taller'];
$nom=$_POST['nombre'];
$descrip=$_POST['descripcion'];

$query="UPDATE talleres SET nombre='$nom', descripcion='$descrip' WHERE id_taller='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: taller_cambio.php");
}
else
{
	echo "no se modifico";
}

?>