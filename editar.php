<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
include('conexion.php');
$query="SELECT * from imagen";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();

   ?>

<p>
<form action="guardar.php" method="POST" enctype="multipart/form-data">
<center><table border="1">
  
  <tr bgcolor="skyblue">
    <td><strong>Nombre:</strong></td><td><input type="text" name="nombre" value=""></td>
    
  </tr>
  <tr bgcolor="skyblue">
    <td bgcolor="skyblue"><strong>Foto:</strong></td><td><input type="file" REQUIRED name="imagen" id="foto"></td>
    
  </tr>
   <tr>
    <td colspan="2" align="center" bgcolor="skyblue"><input type="submit" REQUIRED name="aceptar"  value="Enviar"></td>
    
  </tr>
</table></center>
  

</form>
<p>
<br><br>
</body>
</html>