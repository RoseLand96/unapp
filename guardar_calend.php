<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$nom=$_POST['txtnom'];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="img/".$foto;
copy($ruta,$destino);
$query="INSERT into calendario (nombre,foto) values('$nom','$destino')";
$resultado=$conexion->query($query);
if($resultado)
{
	echo "si se inserto";
	header("Location: calendario.php");
}
else
{
	echo "no se inserto";
}

?>