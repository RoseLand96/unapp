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
$id=$_REQUEST['id_calificacion'];
$query="SELECT * from calificacione where id_calificacion='$id'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();

   ?>
   <form action="proceso_modif_calif_cambio.php?id_calificacion=<?php echo $row['id_calificacion'];?>" method="POST" enctype="multipart/form-data">
<center><table border="1">

  <tr bgcolor="skyblue">
    <td><strong>Clave materia:</strong></td><td><input type="text" REQUIRED name="txtnom1" value="<?php echo $row['id_materia'];?>"></td>
    
  </tr>
  <tr bgcolor="skyblue">
    <td><strong>Matricula estudiante:</strong></td><td><input type="number" REQUIRED name="txtnom2" value="<?php echo $row['matricula_es'];?>"></td>
    
  </tr>
  <tr bgcolor="skyblue">
    <td><strong>Parcial 1:</strong></td><td><input type="text" REQUIRED name="txtnom3" value="<?php echo $row['parcial1'];?>"></td>
    
  </tr>
  <tr bgcolor="skyblue">
    <td><strong>Parcial 2:</strong></td><td><input type="text" REQUIRED name="txtnom4" value="<?php echo $row['parcial2'];?>"></td>
    
  </tr>
  <tr bgcolor="skyblue">
    <td><strong>Parcial 3:</strong></td><td><input type="text" REQUIRED name="txtnom5" value="<?php echo $row['parcial3'];?>"></td>
    
  </tr>
  
  
   <tr>
    <td colspan="2" align="center" bgcolor="skyblue"><input type="submit" REQUIRED name="aceptar"  value="Enviar"></td>
    
  </tr>
</table></center>
   </body>
</html>