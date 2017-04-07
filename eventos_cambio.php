<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventos cambio</title>
 <link rel="shortcut icon" type="image/x-icon" href="img/evento.ico"/>
</head>

<body style="background-color: #0ff" oncontextmenu="return false">
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<p>
<h3><a href="index2.html">Inicio</a></h3>
<p align="center"><img src="img/cal.png" width="100" height="100"></p>
<p>
<center>
	<table class="responsive-table">
		<thead>
		<tr>
			<th bgcolor="#FEF2A7" colspan="6">Eventos</th>
		</tr>
			<tr>
				<th bgcolor="#FEF2A7"></th>
				<th bgcolor="#FEF2A7">Titulo</th>
				<th bgcolor="#FEF2A7">Descripcion</th>
				<th bgcolor="#FEF2A7">Imagen</th>
				<th bgcolor="#FEF2A7" colspan="2">Operaciones</th>
			</tr>


		</thead>
		<tbody>
<?php
include('conexion.php');

$query="SELECT * from eventos where id_evento=2 or id_evento=3 or id_evento=4 ";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
   ?>
   <tr>
     <td bgcolor="#DAF9ED"><?php echo $row['id_evento']; ?></td>
     <td bgcolor="#DAF9ED"><?php echo $row['titulo']; ?></td>
      <td bgcolor="#DAF9ED"><?php echo $row['descripcion']; ?></td>
   <td bgcolor="#DAF9ED"><img height="50px" src="<?php echo $row['foto']; ?>"/></td>
   <th bgcolor="#DAF9ED"><a href="modificar_eventos.php?id_evento=<?php echo $row['id_evento']; ?>" ><img src="img/editar.png" width="40" height="40"></a></th>
   </tr>
  <?php
}
 ?>
 </tbody>


	</table>


</center>
<center>
  <table class="responsive-table">
    <thead>
    <tr>
      <th bgcolor="#FEF2A7" colspan="6">Lo más reciente</th>
    </tr>
      <tr>
        <th bgcolor="#FEF2A7"></th>
        <th bgcolor="#FEF2A7">Titulo</th>
        <th bgcolor="#FEF2A7">Descripcion</th>
        <th bgcolor="#FEF2A7">Imagen</th>
        <th bgcolor="#FEF2A7">Operaciones</th>
      </tr>

    </thead>
    <tbody>
<?php
include('conexion.php');

$query="SELECT * from eventos where id_evento=5 or id_evento=6 or id_evento=7 ";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
   ?>
   <tr>
     <td bgcolor="#DAF9ED"><?php echo $row['id_evento']; ?></td>
     <td bgcolor="#DAF9ED"><?php echo $row['titulo']; ?></td>
     <td bgcolor="#DAF9ED"><?php echo $row['descripcion']; ?></td>
   <td bgcolor="#DAF9ED"><img height="50px" src="<?php echo $row['foto']; ?>"/></td>
   <th bgcolor="#DAF9ED"><a href="modificar_eventos.php?id_evento=<?php echo $row['id_evento']; ?>" ><img src="img/editar.png" width="40" height="40"></a></th>
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
