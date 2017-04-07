<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$clave_mat=$_POST['txtnom1'];
$matri=$_POST['txtnom2'];
$p1=$_POST['txtnom3'];
$p2=$_POST['txtnom4'];
$p3=$_POST['txtnom5'];
$cal_cuat=($p1+$p2+$p3)/3;
$res=round($cal_cuat,1);

$query="INSERT into calificacione (id_materia,matricula_es,parcial1,parcial2,parcial3,cal_cuatri) values('$clave_mat','$matri','$p1','$p2','$p3','$res')";
$resultado=$conexion->query($query);
if($resultado)
{
	echo "si se inserto";
	header("Location: calificacion_cambio.php");
}
else
{
	echo "no se inserto";
}

?>