<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">

     <title>UNAPP</title>
       <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
      <link rel="shortcut icon" type="image/x-icon" href="img/logo1.ico"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">  
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
     <link rel="stylesheet" type="text/css" href="css/slider.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="css/fontello.css">

     <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body oncontextmenu="return false">
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>

<section id ="eventos" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            
            <hr class="bottom-line">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
        <?php
        include('conexion.php');
        $query="SELECT * from eventos where id_evento=2";
        $resultado=$conexion->query($query);
        while($row=$resultado->fetch_assoc())
        {
            
            echo '<img src="'.$row['foto'].'"/>';
            ?>
            <figcaption>
                <h5><?php echo $row['titulo']; ?></h5>
                <?php echo $row['descripcion']; ?>

                   </figcaption>
                   <?php
        }
         ?>
          

               </figure>
      </div>
      <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
        <?php
        include('conexion.php');
        $query="SELECT * from eventos where id_evento=3";
        $resultado=$conexion->query($query);
        while($row=$resultado->fetch_assoc())
        {
            
            echo '<img src="'.$row['foto'].'"/>';
            ?>
            <figcaption>
                <h3><?php echo $row['titulo']; ?></h3>
                <?php echo $row['descripcion']; ?>

                   </figcaption>
                   <?php
        }
         ?>
          

               </figure>
      </div>
      <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
        <?php
        include('conexion.php');
        $query="SELECT * from eventos where id_evento=4";
        $resultado=$conexion->query($query);
        while($row=$resultado->fetch_assoc())
        {
            
            echo '<img src="'.$row['foto'].'"/>';
            ?>
            <figcaption>
                <h3><?php echo $row['titulo']; ?></h3>
                 <?php echo $row['descripcion']; ?>

                   </figcaption>
                   <?php
        }
         ?>
          

               </figure>
      </div>
      <br>
      <br>
      <br>
     
      <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
        <?php
        include('conexion.php');
        $query="SELECT * from eventos where id_evento=5";
        $resultado=$conexion->query($query);
        while($row=$resultado->fetch_assoc())
        {
            
            echo '<img src="'.$row['foto'].'"/>';
            ?>
            <figcaption>
                <h3><?php echo $row['titulo']; ?></h3>
                <?php echo $row['descripcion']; ?>

                   </figcaption>
                   <?php
        }
         ?>
          

               </figure>
      </div>
      <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
        <?php
        include('conexion.php');
        $query="SELECT * from eventos where id_evento=6";
        $resultado=$conexion->query($query);
        while($row=$resultado->fetch_assoc())
        {
            
            echo '<img src="'.$row['foto'].'"/>';
            ?>
            <figcaption>
                <h3><?php echo $row['titulo']; ?></h3>
                 <?php echo $row['descripcion']; ?>

                   </figcaption>
                   <?php
        }
         ?>
          

               </figure>
      </div>
      <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
        <?php
        include('conexion.php');
        $query="SELECT * from eventos where id_evento=7";
        $resultado=$conexion->query($query);
        while($row=$resultado->fetch_assoc())
        {
            
            echo '<img src="'.$row['foto'].'"/>';
            ?>
            <figcaption>
                <h3><?php echo $row['titulo']; ?></h3>
                 <?php echo $row['descripcion']; ?>

                   </figcaption>
                   <?php
        }
         ?>
          

               </figure>
      </div>
         
        
          </div>
        </div>
      </div>
    </section>
  </body>
  <script src="js/menu.js"></script>
<script src="js/jquery.min.js"></script>


    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

</html>
