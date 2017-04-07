<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['matricula_es'];
$nom=$_POST['txtnom'];
$ap_pat=$_POST['ap_pat'];
$ap_mat=$_POST['ap_mat'];
$mat=$_POST['mat'];
$contras=$_POST['contras'];
$query="UPDATE estudiantes SET nombre='$nom', apellido_pat='$ap_pat',apellido_mat='$ap_mat',matricula_es='$mat',contrasena='$contras' WHERE matricula_es='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: estudiante_cambio.php");
}
else
{
	echo "no se modifico";
}

?>