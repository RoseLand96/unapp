<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
<title>Documento sin título</title>

</script>

</head>

<body style="background-color: #0ff" oncontextmenu="return false">

<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<h3><a href="index2.html">Inicio</a></h3>
<p align="center"><img src="img/carrera.png" width="100" height="100"></p>
<h3 align="center">Insertar carreras</h3>
<p>
<form action="guardar_carrera.php" method="POST" enctype="multipart/form-data">
<center><table class="responsive-table">
  
  <tr bgcolor="#DAF9ED">
    <td><strong>Carrera:</strong></td><td><input type="text" REQUIRED name="txtnom" value=""></td>
    
  </tr>
    <tr>
    <td colspan="2" align="center" bgcolor="#DAF9ED"><input type="submit" REQUIRED name="aceptar"  value="Enviar"></td>
    
  </tr>
</table></center>
  
<h3 align="center">Operaciones con carreras</h3>
</form>
<p>
<center>
  <table class="responsive-table">
    <thead>
    <tr>
      <th bgcolor="#FEF2A7" colspan="8">Carreras</th>
    </tr>
      <tr>
        <th bgcolor="#FEF2A7"></th>
        <th bgcolor="#FEF2A7">Carreras</th>
        
        <th bgcolor="#FEF2A7" colspan="2">Operaciones</th>
      </tr>

    </thead>
    <tbody>
<?php
include('conexion.php');
$query="SELECT * from carreras";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
   ?>
   <tr>
     <td bgcolor="#DAF9ED"><?php echo $row['id_carrera']; ?></td>
     <td bgcolor="#DAF9ED"><?php echo $row['carrera']; ?></td>
     
   <th bgcolor="#DAF9ED"><a href="modificar_carrera.php?id_carrera=<?php echo $row['id_carrera']; ?>" ><img src="img/editar.png" width="40" height="40"></a></th>
    <th bgcolor="#DAF9ED"><a onclick="return confirm('¿estas seguro(a) que desea eliminar este producto?')"  href="eliminar_carrera.php?id_carrera=<?php echo $row['id_carrera']; ?>" ><img src="img/borrar.png" width="50" height="50"></a></th>
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