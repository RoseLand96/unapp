<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_calificacion'];
$clave_mat=$_POST['txtnom1'];
$matri=$_POST['txtnom2'];
$p1=$_POST['txtnom3'];
$p2=$_POST['txtnom4'];
$p3=$_POST['txtnom5'];
$cal_cuat=($p1+$p2+$p3)/3;
$res=round($cal_cuat,1);

$query="UPDATE calificacione SET id_materia='$clave_mat', matricula_es='$matri', parcial1='$p1', parcial2='$p2', parcial3='$p3', cal_cuatri='$res' WHERE id_calificacion='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: calificacion_cambio.php");
}
else
{
	echo "no se modifico";
}

?>