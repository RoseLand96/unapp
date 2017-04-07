<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<form action="login2.php" method="POST" enctype="multipart/form-data">
<center><table border="1" bgcolor="0BFC2B">
  
  <tr bgcolor="#DAF9ED">
    <td><strong>Matricula:</strong></td><td><input type="number" REQUIRED name="matricul" value=""></td>
    
  </tr>
  <tr bgcolor="#DAF9ED">
    <td><strong>Contraseña:</strong></td><td><input type="password" REQUIRED name="contras" value=""></td>
    
  </tr>
  
  
    <tr>
    <td colspan="2" align="center" bgcolor="#FEF2A7"><input type="submit" REQUIRED name="aceptar"  value="Aceptar"></td>
    
  </tr>
</table></center>
  
</form>