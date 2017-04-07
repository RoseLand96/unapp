<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<center>
	<table border="2">
		<thead>
		<tr>
			<th colspan="5"><a href="index.php">Nuevo</a></th>
		</tr>
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>Imagen</th>
				<th colspan="2">Operaciones</th>
			</tr>

		</thead>
		<tbody>
<?php
include('conexion.php');
$query="SELECT * from imagen";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
   ?>
   <tr>
     <td><?php echo $row['id_calendario']; ?></td>
     <td><?php echo $row['nombre']; ?></td>
   <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
   <th><a href="modificar.php?id_calendario=<?php echo $row['id_calendario']; ?>" >Modificar</a></th>
    <th><a href="eliminar.php?id_calendario=<?php echo $row['id_calendario']; ?>" >Eliminar</a></th>
   </tr>
  <?php
}
 ?>
 </tbody>


	</table>


</center>
</body>
</html>