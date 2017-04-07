<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_grupo'];
$clavCar=$_POST['txtnom'];
$calHor=$_POST['txtnom2'];
$matEs=$_POST['txtnom3'];
$nomGrup=$_POST['txtnom4'];
$query="UPDATE grupos SET id_carrera='$clavCar', id_horario='$calHor', matricula_es='$matEs', nombre_grupo='$nomGrup' WHERE id_grupo='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location:grupos_cambio.php");
}
else
{
	echo "no se modifico";
}

?>