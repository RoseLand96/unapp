<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Materia cambio</title>
 <link rel="shortcut icon" type="image/x-icon" href="img/materia.ico"/>
</head>

<body style="background-color: #0ff" oncontextmenu="return false">
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<h3><a href="index2.html">Inicio</a></h3>
<p align="center"><img src="img/materia.ico" width="100" height="100"></p>
<h3 align="center">Insertar materias</h3>
<p>
<form action="guardar_materia.php" method="POST" enctype="multipart/form-data">
<center><table class="responsive-table">
  
  <tr  bgcolor="#DAF9ED">
    <td><strong>Materia:</strong></td><td><input type="text" REQUIRED name="txtnom" value=""></td>
    
  </tr>
    <tr>
    <td colspan="2" align="center"  bgcolor="#DAF9ED"><input type="submit" REQUIRED name="aceptar"  value="Enviar"></td>
    
  </tr>
</table></center>
  
<h3 align="center">Operaciones con materias</h3>
</form>
<p>
<center>
  <table class="responsive-table">
    <thead>
    <tr>
      <th bgcolor="#FEF2A7" colspan="8">Materias</th>
    </tr>
      <tr>
        <th bgcolor="#FEF2A7"></th>
        <th bgcolor="#FEF2A7">materias</th>
        
        <th bgcolor="#FEF2A7" colspan="2">Operaciones</th>
      </tr>

    </thead>
    <tbody>
<?php
include('conexion.php');
$query="SELECT * from materias";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
   ?>
   <tr>
     <td bgcolor="#DAF9ED"><?php echo $row['id_materia']; ?></td>
     <td bgcolor="#DAF9ED"><?php echo $row['materia']; ?></td>
     
   <th bgcolor="#DAF9ED"><a href="modificar_materia.php?id_materia=<?php echo $row['id_materia']; ?>" ><img src="img/editar.png" width="40" height="40"></a></th>
    <th bgcolor="#DAF9ED"><a  onclick="return confirm('¿estas seguro(a) que desea eliminar este producto?')" href="eliminar_materia.php?id_materia=<?php echo $row['id_materia']; ?>" ><img src="img/borrar.png" width="50" height="50"></a></th>
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