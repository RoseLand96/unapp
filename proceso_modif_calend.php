<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$id=$_REQUEST['id_calendario'];
$nom=$_POST['txtnom'];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="img/".$foto;
copy($ruta,$destino);
$query="UPDATE calendario SET nombre='$nom', foto='$destino' WHERE id_calendario='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: calend_cambio.php");
}
else
{
	echo "no se modifico";
}

?>