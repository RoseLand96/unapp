<?php
include('conexion.php');
$nom=$_POST['txtnom'];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="img/".$foto;
copy($ruta,$destino);
$query="INSERT into subir_foto (nombre,foto) values('$nom','$destino')";
$resultado=$conexion->query($query);
if($resultado)
{
	echo "si se inserto";
	header("Location: mostrar.php");
}
else
{
	echo "no se inserto";
}

?>