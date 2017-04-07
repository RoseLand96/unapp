<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>grupos cambio</title>
</head>

<body style="background-color: #0ff" oncontextmenu="return false">
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<h3><a href="index2.html">Inicio</a></h3>
<p align="center"><img src="img/grupo.png" width="100" height="100"></p>
<h3 align="center">Insertar grupos</h3>
<p>
<form action="guardar_grupos.php" method="POST" enctype="multipart/form-data">
<center><table class="responsive-table">
  
  <tr bgcolor="#DAF9ED">
    <td><strong>Clave carrera:</strong></td><td><input type="text" REQUIRED name="txtnom" value=""></td>
    
  </tr>
  <tr bgcolor="#DAF9ED">
    <td><strong>Clave horario:</strong></td><td><input type="text" REQUIRED name="txtnom2" value=""></td>
    
  </tr>
  <tr bgcolor="#DAF9ED">
    <td><strong>Matricula estudiante:</strong></td><td><input type="number" REQUIRED name="txtnom3" value=""></td>
    
  </tr>
  <tr bgcolor="#DAF9ED">
    <td><strong>Nombre grupo:</strong></td><td><input type="text" REQUIRED name="txtnom4" value=""></td>
    
  </tr>
    <tr>
    <td colspan="2" align="center" bgcolor="#DAF9ED"><input type="submit" REQUIRED name="aceptar"  value="Enviar"></td>
    
  </tr>
</table></center>
  
<h3 align="center">Operaciones con grupos</h3>
</form>
<p>
<center>
  <table class="responsive-table">
    <thead>
    <tr>
      <th bgcolor="#FEF2A7" colspan="8">Grupos</th>
    </tr>
      <tr>
        <th bgcolor="#FEF2A7"></th>
        <th bgcolor="#FEF2A7">Clave carrera</th>
         <th bgcolor="#FEF2A7">Clave horario</th>
         <th bgcolor="#FEF2A7">Matricula estudiante</th>
         <th bgcolor="#FEF2A7">Nombre grupo</th>
        <th bgcolor="#FEF2A7" colspan="2">Operaciones</th>
      </tr>

    </thead>
    <tbody>
<?php
include('conexion.php');
$query="SELECT * from grupos";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
   ?>
   <tr>
     <td bgcolor="#DAF9ED"><?php echo $row['id_grupo']; ?></td>
     <td bgcolor="#DAF9ED"><?php echo $row['id_carrera']; ?></td>
     <td bgcolor="#DAF9ED"><?php echo $row['id_horario']; ?></td>
     <td bgcolor="#DAF9ED"><?php echo $row['matricula_es']; ?></td>
     <td bgcolor="#DAF9ED"><?php echo $row['nombre_grupo']; ?></td>
   <th bgcolor="#DAF9ED"><a href="modificar_grupo.php?id_grupo=<?php echo $row['id_grupo']; ?>" ><img src="img/editar.png" width="40" height="40"></a></th>
    <th bgcolor="#DAF9ED"><a href="eliminar_grupos.php?id_grupo=<?php echo $row['id_grupo']; ?>" ><img src="img/borrar.png" width="50" height="50"></a></th>
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