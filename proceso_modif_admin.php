<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_admin'];
$mat=$_POST['txtnom'];
$contras=$_POST['txtnom2'];

$query="UPDATE administrador SET matricula_admin='$mat', contrasena='$contras' WHERE id_admin='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: admin_cambio.php");
}
else
{
	echo "no se modifico";
}

?>