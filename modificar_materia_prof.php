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
$id=$_REQUEST['id_mat_prof'];
$query="SELECT * from materia_prof where id_mat_prof='$id'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();

   ?>
 <form action="proceso_modif_mat_prof.php?id_mat_prof=<?php echo $row['id_mat_prof'];?>" method="POST" enctype="multipart/form-data">
<center><table border="1">
  
  <tr bgcolor="skyblue">
    <td><strong>Clave materia:</strong></td><td><input type="text" REQUIRED name="txtnom" value="<?php echo $row['id_materia'];?>"></td>
    
  </tr>
  <tr bgcolor="skyblue">
    <td><strong>Clave profesor:</strong></td><td><input type="text" REQUIRED name="txtnom2" value="<?php echo $row['id_profesor'];?>"></td>
    
  </tr>
   <tr>
    <td colspan="2" align="center" bgcolor="skyblue"><input type="submit" REQUIRED name="aceptar"  value="Enviar"></td>
    
  </tr>
</table></center>
   </body>
</html>