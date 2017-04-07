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
<p>
<form action="guardar_taller.php" method="POST" enctype="multipart/form-data">
<center><table border="1">
  
  <tr  bgcolor="#DAF9ED">
    <td><strong>Nombre:</strong></td><td><input type="text" name="nombre" value=""></td>
    
  </tr>
  <tr  bgcolor="#DAF9ED">
    <td bgcolor="#DAF9ED"><strong>Descripción:</strong></td><td><input type="text" REQUIRED name="descripcion"></td>
    
  </tr>
   <tr>
    <td colspan="2" align="center"  bgcolor="#DAF9ED"><input type="submit" REQUIRED name="aceptar"  value="Enviar"></td>
    
  </tr>
</table></center>
  

</form>
<p>
<center>
	<table border="2" bordercolor="green">
		<thead>
		
			<tr>
				<th bgcolor="#FEF2A7"></th>
				<th bgcolor="#FEF2A7">Nombre</th>
				<th bgcolor="#FEF2A7">Descripción</th>
				<th bgcolor="#FEF2A7" colspan="2">Operaciones</th>
			</tr>

		</thead>
		<tbody>
<?php
include('conexion.php');
$query="SELECT * from talleres";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
   ?>
   <tr>
     <td  bgcolor="#DAF9ED"><?php echo $row['id_taller']; ?></td>
     <td  bgcolor="#DAF9ED"><?php echo $row['nombre']; ?></td>
   <td  bgcolor="#DAF9ED"><?php echo $row['descripcion']; ?></td>
   <th  bgcolor="#DAF9ED"><a href="modificar_taller.php?id_taller=<?php echo $row['id_taller']; ?>" >Modificar</a></th>
    <th  bgcolor="#DAF9ED"><a href="eliminar_taller.php?id_taller=<?php echo $row['id_taller']; ?>" >Eliminar</a></th>
   </tr>
  <?php
}
 ?>
 </tbody>


	</table>


</center>
<br><br>
</body>
</html>
