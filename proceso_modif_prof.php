<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_profesor'];
$nom=$_POST['txtnom'];
$ap_pat=$_POST['ap_pat'];
$ap_mat=$_POST['ap_mat'];
$mat=$_POST['mat'];
$contras=$_POST['contras'];
$query="UPDATE profesores SET nombre='$nom', apellido_pat='$ap_pat',apellido_mat='$ap_mat',matricula_prof='$mat',contrasena='$contras' WHERE id_profesor='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: prof_cambio.php");
}
else
{
	echo "no se modifico";
}

?>