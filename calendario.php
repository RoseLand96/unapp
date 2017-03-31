<?php
$db_host = "if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
     $db_name = "wy8olcrbdohq8vub";
     $db_user = "hx09anllb8j1tlyz";
     $db_password = "wynpitkcrhqf6u3z";
    
     $connection = mysqli_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysqli_error());
    
mysqli_select_db($connection,$db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysqli_query("SET NAMES 'utf8'");

$query="SELECT * from calendario;";
$result = mysqli_query($connection,$query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>