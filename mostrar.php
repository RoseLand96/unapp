<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body oncontextmenu="return false">
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>

<br><br>
<?php
include('conexion.php');
$query="SELECT * from subir_foto";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
  
  echo '<img src="'.$row['foto'].'" width="400" height="600" />';
  
}
 ?>




</body>
</html>
