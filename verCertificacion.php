<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
$query="SELECT * from certificaciones where id_documento=".$_GET['id'];
$resultado=$conexion->query($query);
if($row=$resultado->fetch_assoc())
{
	header('content-type: application/pdf');
    readfile($row['nombre_archivo']);
    
 } 
 ?>