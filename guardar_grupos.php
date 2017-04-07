<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$clavCar=$_POST['txtnom'];
$calHor=$_POST['txtnom2'];
$matEs=$_POST['txtnom3'];
$nomGrup=$_POST['txtnom4'];
$query="INSERT into grupos (id_carrera,id_horario,matricula_es,nombre_grupo) values('$clavCar','$calHor','$matEs','$nomGrup')";
$resultado=$conexion->query($query);
if($resultado)
{
	echo "si se inserto";
	header("Location: grupos_cambio.php");
}
else
{
	echo "no se inserto";
}

?>