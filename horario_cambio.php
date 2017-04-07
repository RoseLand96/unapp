
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Horario cambio</title>
 <link rel="shortcut icon" type="image/x-icon" href="img/horario.ico"/>
</head>

<body style="background-color: #0ff" oncontextmenu="return false">
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<h3><a href="index2.html">Inicio</a></h3>
<p align="center"><img src="img/horario.ico" width="100" height="100"></p>
<h3 align="center">Insertar horarios</h3>
<form action="guardar_horario.php" method="POST" enctype="multipart/form-data">
<center><table class="responsive-table">
  
  <tr bgcolor="#DAF9ED">
    <td><strong>Nombre:</strong></td><td><input type="text" name="txtnom" value=""></td>
    
  </tr>
  <tr bgcolor="#DAF9ED">
    <td bgcolor="#DAF9ED"><strong>Foto:</strong></td><td><input type="file" REQUIRED name="foto" id="foto"></td>
    
  </tr>
   <tr>
    <td colspan="2" align="center" bgcolor="#DAF9ED"><input type="submit" REQUIRED name="aceptar"  value="Enviar"></td>
    
  </tr>
</table></center>
  
<h3 align="center">Operaciones con horarios</h3>
</form>
<p>
<center>
  <table class="responsive-table">
    <thead>
    
      <tr>
        <th bgcolor="#FEF2A7"></th>
        <th bgcolor="#FEF2A7">Nombre</th>
        <th bgcolor="#FEF2A7">Imagen</th>
        <th bgcolor="#FEF2A7" colspan="2">Operaciones</th>
      </tr>

    </thead>
    <tbody>
<?php
include('conexion.php');
$query="SELECT * from horario";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
   ?>
   <tr>
     <td bgcolor="#DAF9ED"><?php echo $row['id_horario']; ?></td>
     <td bgcolor="#DAF9ED"><?php echo $row['nombre']; ?></td>
   <td bgcolor="#DAF9ED"><img height="50px" src="<?php echo $row['foto']; ?>"/></td>
   <th bgcolor="#DAF9ED"><a href="modificar_horario.php?id_horario=<?php echo $row['id_horario']; ?>" ><img src="img/editar.png" width="40" height="40"></a></th>
    <th bgcolor="#DAF9ED"><a href="eliminar_horario.php?id_horario=<?php echo $row['id_horario']; ?>" ><img src="img/borrar.png" width="50" height="50"></a></th>
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