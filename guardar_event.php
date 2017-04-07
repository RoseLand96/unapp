<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$titulo=$_POST['txtnom'];
$descrip=$_POST['txtDes'];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="img/".$foto;
copy($ruta,$destino);
$query="INSERT into eventos (titulo,descripcion,foto) values('$titulo','$descrip','$destino')";
$resultado=$conexion->query($query);
if($resultado)
{
	echo "si se inserto";
	header("Location: eventos_cambio.php");
}
else
{
	echo "no se inserto";
}

?>