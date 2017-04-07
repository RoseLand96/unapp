<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php 
include('conexion.php');
		$matricula=$_REQUEST['matricul'];
		$contrasena=$_REQUEST['contras'];
	
/*mysql_connect('localhost', 'root', '1234', "unapp") or die ("no conection".mysql_error());
mysql_select_db('unapp') or die("Error al seleccionar la base de datos:".mysql_error());*/
$query="SELECT * from estudiantes where matricula_es='".$matricula."'";
$query2="SELECT * from profesores where matricula_prof='".$matricula."'";

$resultado2=$conexion->query($query2);
$resultado3=$conexion->query($query3);
$resultado=$conexion->query($query);

if($row=$resultado->fetch_assoc())
{
    if($row['contrasena']==$contrasena)
    {
    	session_start();
    	$_SESSION["matricul"]=$matricula;
    	$_SESSION["contras"]=$contrasena;
    	header("Location: calificacion2.php");
    }else
    {
    	header("Location: login_form.php");

    }
}else if($row=$resultado2->fetch_assoc())
{
   if($row['contrasena']==$contrasena)
    {
        session_start();
        $_SESSION["matricul"]=$matricula;
        $_SESSION["contras"]=$contrasena;
        header("Location: calif_prof2.php");
    }else
    {
        header("Location: login_form.php");

    }
}
else
{
    	header("Location: login_form.php");
}

?>