<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reglamentos</title>
 <link rel="shortcut icon" type="image/x-icon" href="img/reglamento.ico"/>
</head>

<body style="background-color: #0ff" oncontextmenu="return false">
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<h3><a href="index2.html">Inicio</a></h3>
<br>
<br>
<br>
<br>
<br>
<center>
  <table class="responsive-table"  width="500" height="100">
    <thead>
    
      <tr>
      
        <th bgcolor="#FEF2A7">Titulo</th>
        <th bgcolor="#FEF2A7">Nombre Archivo </th>
        <th bgcolor="#FEF2A7" colspan="2">Operaciones</th>
      </tr>

    </thead>
    <tbody>
<?php
include('conexion.php');
$query="SELECT * from reglamentos";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
   ?>
   <tr>
     <td bgcolor="#DAF9ED"><?php echo $row['titulo']; ?></td>
     <td bgcolor="#DAF9ED"><?php echo $row['nombre_archivo']; ?></td>
  
   <th bgcolor="#DAF9ED"><a href="modificar_reglamentos.php?id_documento=<?php echo $row['id_documento']; ?>" ><img src="img/editar.png" width="40" height="40"></a></th>
   
   </tr>
  <?php
}
 ?>
  </tbody>


  </table>


</center>
</body>
</html>