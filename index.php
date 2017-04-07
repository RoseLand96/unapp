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
<div class="barra"><img src="img/barra.jpg"></div>

<header>

<input type="checkbox" id="btn-menu">
<label for="btn-menu" class="icon-menu"></label>

  <nav class="menu">

  <ul>
    <li><a class="icon-home" href="index.php">Inicio</a></li>
     <li class="submenu"><a href="">Ofertas educativas<span class="icon-down-open"></span></a>
          <ul>
            <li><a href="carreras.php"><img src="img/circulo.png">&nbsp;Carreras &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
         
          </ul>
      </li>
     <li class="submenu"><a href="">Alumnos<span class="icon-down-open"></span></a>
        <ul>
            <li><a href="#login" data-target="#login" data-toggle="modal"><img src="img/circulo.png"> &nbsp;Calificaciones</a></li>
            <li><a href="calendario.php"><img src="img/circulo.png"> &nbsp;Calendario</a></li>
            <li><a href="talleres.php"><img src="img/circulo.png"> &nbsp;Talleres</a></li>
             <?php
include('conexion.php');
$query="SELECT * from  titulacion";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
  
    ?>
            <li><a href="titulacion.php?id=<?php echo $row['id_documento']; ?>"><img src="img/circulo.png"> &nbsp;Requisitos titulación</a></li>
         <?php
 } 
 ?>
         <?php
include('conexion.php');
$query="SELECT * from  reglamentos";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
  
    ?>
             <li><a href="verReglamentos.php?id=<?php echo $row['id_documento']; ?>"><img src="img/circulo.png"> &nbsp;Reglamentos</a></li>
       <?php
 } 
 ?>
            
        </ul>
     </li>
      <li class="submenu"><a href="">Docentes<span class="icon-down-open"></span></a>
          <ul>
            <li><a href="#login" data-target="#login" data-toggle="modal"><img src="img/circulo.png"> &nbsp;Calificaciones</a></li>
            <li><a href="calendario.php"><img src="img/circulo.png"> &nbsp;Calendario</a></li>
          </ul>
      </li>
       <li class="submenu"><a href="">Vinculacion<span class="icon-down-open"></span></a>
          <ul>
            <?php
include('conexion.php');
$query="SELECT * from becas";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
  
    ?>
            <li><a href="verBecas.php?id=<?php echo $row['id_documento']; ?>"><img src="img/circulo.png"> &nbsp;Becas</a></li>
             <?php
 } 
 ?>

 <?php
include('conexion.php');
$query="SELECT * from certificaciones";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
  
    ?>

            <li><a href="verCertificacion.php?id=<?php echo $row['id_documento']; ?>"><img src="img/circulo.png"> &nbsp;Certificaciones</a></li>
          <?php
 } 
 ?>
        </ul>
       </li>
        <li><a href="#eventos">Eventos</a></li>
       <li><a href="#AcercaDe">Acerca de</a></li>
       <li><a class="icon-login" href="#" data-target="#login" data-toggle="modal">Iniciar sesión</a></li>

  </ul>
    
  </nav>
</header>
    <!--Modal box-->
    <div class="modal fade" id="login" role="dialog">
      <div class="modal-dialog modal-sm">
      
        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title">Iniciar sesión</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
  <p class="login-box-msg">Iniciar para empezar con una sesión</p>
              <div class="form-group">
                <form  id="loginForm" action="login.php" method="POST" enctype="multipart/form-data">
            <div class="form-group has-feedback">
             
            <p><!----- username -------------->
              <input class="form-control" placeholder="Matricula"  id="loginid" type="text" autocomplete="off" REQUIRED name="matricul" />
              </p>
            <p><span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span></p>
            <!---Alredy exists  ! -->
                      <span class="icon-user"></span>
                  </div>
                  <div class="form-group has-feedback"><!----- password -------------->
                      <input class="form-control" placeholder="Contraseña" id="loginpsw" type="password" autocomplete="off" REQUIRED  name="contras"/>
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="icon-lock"></span>
                  </div>
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="checkbox icheck">
                         </div>
                      </div>
                      <div class="col-xs-12">
                          <input type="submit" name="submit" class="btn btn-green btn-block btn-flat" onclick="userlogin()" value="Iniciar">
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!--/ Modal box-->
 <div class="banner">
           <div class="bg-color">
        <div class="container">
        <div class="row">
<div id="contenedor">
  <div id="slider">
    <div class="elemento">
      <a href=""><img src="img/utec1.jpg" alt=""></a>
      <p class="gancho">Estudiantes de la universidad</p>
    </div>
    <div class="elemento">
      <a href=""><img src="img/utec3.jpg" alt=""></a>
      <p class="gancho">Estudiantes de la universidad</p>
    </div>
      <div class="elemento">
      <a href=""><img src="img/utec4.jpg" alt=""></a>
      <p class="gancho">Estudiantes de la universidad</p>
    </div>
      <div class="elemento">
      <a href=""><img src="img/utec5.jpg" alt=""></a>
      <p class="gancho">Estudiantes de la universidad</p>
    </div>
  </div>
</div>
</div>
 </div>
      </div>
       </div>
 <!--Feature-->
 <section id ="AcercaDe" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>UNAPP</h2>
            <h3><strong><p>Universitary's applicacion(Aplicación universitaria)</p></strong></h3>
            <hr class="bottom-line">
          </div>
          <div class="feature-info">
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Tecnologías</h4>
                  <p>Con las nuevas tecnologías todo se está ameliorando, y facilita la vida de otros, es lo que se busca con UNAPP.</p>
                </div>
                <div class="fea-img pull-left">
                  <img src="img/tecnologia.png"></img>
                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Estudiantes</h4>
                  <p>Todo de UNAPP está dedicado a los estudiantes de universidades tecnologicas, especialmente los de la universidad tecnologíca de tulancingo.</p>
                </div>
                <div class="fea-img pull-left">
                   <img src="img/estudiante.png"></img>
                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Diseño</h4>
                  <p>UNAPP es una aplicación diseñada para dispositivos moviles.</p>
                </div>
                <div class="fea-img pull-left">
                   <img src="img/diseño.png"></img>
                </div>
              </div>
            </div>
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
<section id="faculity-member" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <strong><h2>DESARROLLADORES</h2></strong>
            
            <hr class="bottom-line">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="img/rose.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Rose Landjlord Sejour</p>
                <p class="pm-staff-profile-title">Desarrollador</p>
                
                <p class="pm-staff-profile-bio">Estudiante actual de la universidad tecnologíca de tulancingo, cursando el 5 cuatrimestre de la carrera de tecnologías de la información y comunicación. </p>
              </div>     
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="img/ray.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Raymond Simoly</p>
                <p class="pm-staff-profile-title">Desarrollador</p>
                
                <p class="pm-staff-profile-bio">Estudiante actual de la universidad tecnologíca de tulancingo, cursando el 5 cuatrimestre de la carrera de tecnologías de la información y comunicación. </p>
              </div>     
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                    <img src="img/macken.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Anis Mackendy Jean Junior</p>
                <p class="pm-staff-profile-title">Desarollador</p>
                
                <p class="pm-staff-profile-bio">Estudiante actual de la universidad tecnologíca de tulancingo, cursando el 5 cuatrimestre de la carrera de tecnologías de la información y comunicación. </p>
              </div>     
            </div>
          </div>
        </div>
      </div>
    </section>
     <!--/ Faculity member-->
    <!--/ Testimonial-->
    <!--Eventos-->
<section id ="eventos" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Eventos</h2>
           
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
                <h3><?php echo $row['titulo']; ?></h3>
                <br>
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
                <br>
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
                <br>
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
      <br>
      <br>
      <h3 align="center">Lo más reciente</h3>
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
                <br>
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
                <br>
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
                <br>
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
    <!--/ Eventos-->
    <!--Pricing-->

    <!--/ Pricing-->
    <!--Contact-->

    <!--/ Contact-->
    <!--Footer-->
    <footer id="footer" class="footer">
      <div class="container text-center">
    
     
      <ul class="social-links">
        <li><a href="https://twitter.com/unapp2017"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="https://www.facebook.com/UNAPP-501378830251456/"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href=""><i class="fa fa-google-plus fa-fw"></i></a></li>
        
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

<script type="text/javascript">//<![CDATA[
$(function(){
  $('#slider div:gt(0)').hide;
  setInterval(function(){
    $('#slider div:first-child').fadeOut(1000).next('div').fadeIn(1000).end().appendTo('#slider');},5000);

}); 
  
</script>

</body>
</html>
