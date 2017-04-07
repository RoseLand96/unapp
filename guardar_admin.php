<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$mat=$_POST['txtnom'];
$contras=$_POST['txtnom2'];

$query="INSERT into administrador (matricula_admin,contrasena) values('$mat','contras')";
$resultado=$conexion->query($query);
if($resultado)
{
	echo "si se inserto";
	header("Location: admin_cambio.php");
}
else
{
	echo"<script>alert('matricula existante')</script>";
	echo "<script language=Javascript> window.location =\"admin_cambio.php\"; </script>";
}

?>