<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_materia'];
$materia=$_POST['txtnom'];

$query="UPDATE materias SET materia='$materia' WHERE id_materia='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: materias_cambio.php");
}
else
{
	echo "no se modifico";
}

?>