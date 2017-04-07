<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Talleres</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="css/estilos.css">
     <link rel="stylesheet" type="text/css" href="css/slider.css">
    <!-- =======================================================
        Theme Name: Mentor
        Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body oncontextmenu="return false">
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>

    <!--/ Modal box-->
    <!--Banner-->
     
    <!--/ Banner-->
    <!--Feature-->
  <section id ="taller" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Talleres</h2>
          <center>
            <table border=1>
               <thead>
               <tr>
                   <th  bgcolor="#FEF2A7">Nombre</th>
                   <th  bgcolor="#FEF2A7">Descripcion</th>
               </tr>  
               </thead>
               <tbody>
            <?php
include('conexion.php');
$query="SELECT * from talleres";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
   ?>
     <tr>
     <td bgcolor="#DAF9ED"><?php echo $row['nombre'];?></td>
     <td bgcolor="#F5F5F3"><?php echo $row['descripcion'];?></td>
     </tr>
  <?php
}
 ?>
 </tbody>
 </table>
 </center>
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
    <footer id="footer" class="footer">
      <div class="container text-center">
    
     
      <ul class="social-links">
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
       
      </ul>
        ©2016 UNAPP. todo derecho reservado
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
            -->
             <a href="#">UNIVERSITY'S APLICATION</a>
        </div>
      </div>
    </footer>
    <!--/ Footer-->
    
        <script src="js/menu.js"></script>
<script src="js/jquery.min.js"></script>


    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    <script type="text/javascript">
    	$(function()
        {
        	$("#slider div:gt(0)").hide;
                   setInterval(function()
                   {
                        $("#slider div:first-child").fadeOut(1000)
                           .next("div").fadeIn(1000)
                            .end().appendTo("#slider");
                   },3000);
        })
    </script>
  </body>
</html>
