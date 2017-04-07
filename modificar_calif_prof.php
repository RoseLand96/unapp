<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('conexion.php');
session_start();
$matricul=$_REQUEST['matricula_es'];
$query="SELECT * from calificacione,materias,materia_prof,profesores where matricula_es='$matricul' AND calificacione.id_materia=materias.id_materia AND materias.id_materia=materia_prof.id_materia AND materia_prof.id_profesor=profesores.id_profesor AND  matricula_prof='".$_SESSION["matricul"]."'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();

   ?>
<form action="proceso_modif_califi_prof.php?matricula_es=<?php echo $row['matricula_es'];?>" method="POST" enctype="multipart/form-data">
<center><table border="1">
  <tr bgcolor="skyblue">
  
  <tr bgcolor="skyblue">
    <td><strong>matricula:</strong></td><td><input type="text" name="matricul_es" value="<?php echo $row['matricula_es'];?>"></td>
    
  </tr>
  <tr bgcolor="skyblue">
    <td><strong>P1:</strong></td><td><input type="text" name="p1" value="<?php echo $row['parcial1'];?>"></td>
    
  </tr>
  <tr bgcolor="skyblue">
    <td><strong>P2:</strong></td><td><input type="text" name="p2" value="<?php echo $row['parcial2'];?>"></td>
    
  </tr>
  <tr bgcolor="skyblue">
    <td><strong>P3:</strong></td><td><input type="text" name="p3" value="<?php echo $row['parcial3'];?>"></td>
    
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="skyblue"><input type="submit" REQUIRED name="aceptar"  value="Enviar"></td>
    
  </tr>
</table></center>