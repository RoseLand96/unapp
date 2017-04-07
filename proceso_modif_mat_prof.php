<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_mat_prof'];
$materia=$_POST['txtnom'];
$prof=$_POST['txtnom2'];
$query="UPDATE materia_prof SET id_materia='$materia', id_profesor='$prof' WHERE id_mat_prof='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: materia_prof_cambio.php");
}
else
{
	echo "no se modifico";
}

?>