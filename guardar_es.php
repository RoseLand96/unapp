<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$nom=$_POST['txtnom'];
$ap_pat=$_POST['ap_pat'];
$ap_mat=$_POST['ap_mat'];
$mat=$_POST['mat'];
$contras=$_POST['contras'];

$query="INSERT into estudiantes (nombre,apellido_pat,apellido_mat,matricula_es,contrasena) values('$nom','$ap_pat','$ap_mat','$mat','$contras')";
$resultado=$conexion->query($query);
if($resultado)
{
	echo "si se inserto";
	header("Location: estudiante_cambio.php");
}
else
{
	echo"<script>alert('matricula existante')</script>";
	echo "<script language=Javascript> window.location =\"estudiante_cambio.php\"; </script>";
	echo "no se inserto";
	
}

?>