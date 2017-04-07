<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Horario</title>
     <link rel="shortcut icon" type="image/x-icon" href="img/horario.ico"/>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="css/slider.css">
     <style type="text/css">
       img
       {
         height:auto;
         max-width: 100%;
       }

       h3{
        margin-left: 50px;
        margin-right: 1px;
        display: inline;
      }
     </style>
    <!-- =======================================================
        Theme Name: Mentor
        Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
  <?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
    <!--Navigation bar-->
 
    <!--/ Modal box-->
    <!--Banner-->
     
    <!--/ Banner-->
    <!--Feature-->
  <section id ="horario" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
       <a href="calificacion2.php">Calificación</a>
<a href="logout2.php">Cerrar sesión</a>
            <h2>Horario<img width="100" src="img/horario.jpg"></h2>

<?php
include('conexion.php');

session_start();

if(isset($_SESSION["matricul"])  || isset($_SESSION["contras"]))
{
$query="SELECT * from horario,grupos where horario.id_horario=grupos.id_horario AND grupos.matricula_es='".$_SESSION["matricul"]."'";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{

  
  echo $row['nombre'];
   echo '<img src="'.$row['foto'].'" width="1000" height="800" />';

}
}
 ?>
  </div>
        </div>
      </div>
    </section>
    <!--/ feature-->
    <!--Organisations-->
 
    <!--/ Organisations-->
    <!--Cta-->
   
    <!--/ work-shop-->
    <!--Faculity member-->

     <!--/ Faculity member-->
    <!--/ Testimonial-->
    <!--Courses-->

    <!--/ Courses-->
    <!--Pricing-->

    <!--/ Pricing-->
    <!--Contact-->

    <!--/ Contact-->
    <!--Footer-->
    

    <!--/ Footer-->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
   
  </body>
</html>