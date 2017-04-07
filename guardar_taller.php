<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$nom=$_POST['nombre'];
$descrip=$_POST['descripcion'];
$query="INSERT into talleres(nombre,descripcion) values('$nom','$descrip')";
$resultado=$conexion->query($query);
if($resultado)
{
	echo "si se inserto";
}
else
{
	echo "no se inserto";
}

?>