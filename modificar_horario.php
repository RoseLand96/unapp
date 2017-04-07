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
<?php
include('conexion.php');
$id=$_REQUEST['id_horario'];
$query="SELECT * from horario where id_horario='$id'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();

   ?>
  <form action="proceso_modif_horario.php?id_horario=<?php echo $row['id_horario'];?>" method="POST" enctype="multipart/form-data">
<center><table border="1">
  
  <tr bgcolor="skyblue">
    <td><strong>Nombre:</strong></td><td><input type="text" name="txtnom" value="<?php echo $row['nombre'];?>"></td>
    
  </tr>
  <tr bgcolor="skyblue">
     <td bgcolor="skyblue"><strong>Foto:</strong></td><td><input type="file" REQUIRED name="foto" id="foto"></td>
    
  </tr>
   <tr>
    <td colspan="2" align="center" bgcolor="skyblue"><input type="submit" REQUIRED name="aceptar"  value="Enviar"></td>
    
  </tr>
</table></center>
  

</form>

</body>
</html>