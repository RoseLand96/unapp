<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
session_start();
$id=$_REQUEST['matricula_es'];
$id_mat=$_POST['id_materia'];
$mat=$_POST['matricula_es'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$cal_cuat=($p1+$p2+$p3)/3;
$res=round($cal_cuat,1);
$query="UPDATE calificacione,materias,materia_prof,profesores SET parcial1='$p1', parcial2='$p2',parcial3='$p3', cal_cuatri='$res' WHERE matricula_es='$id' AND calificacione.id_materia=materias.id_materia AND materias.id_materia=materia_prof.id_materia AND materia_prof.id_profesor=profesores.id_profesor AND  matricula_prof='".$_SESSION["matricul"]."'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: calif_prof.php");
}
else
{
	echo "no se modifico";
}

?>