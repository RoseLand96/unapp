<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_evento'];
$titulo=$_POST['txtnom1'];
$desc=$_POST['txtnom2'];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="img/".$foto;
copy($ruta,$destino);
$query="UPDATE eventos SET titulo='$titulo', descripcion='$desc', foto='$destino' WHERE id_evento='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: eventos_cambio.php");
}
else
{
	echo "no se modifico";
}

?>