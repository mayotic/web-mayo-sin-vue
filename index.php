<?php
  require "includes/head.php";
 require "includes/header.php";
?>
 <div id="inicio"></div>  
<section class="container-total">

  <video id="background-video-fondo-triangulos" autoplay loop muted poster="" class="img-fluid relative">
      <source src="assets/textura-triangulos.mp4" type="video/mp4" class="img-fluid">
  </video> 
   
    <section class="relative bg-oscuro">
      <div class="textBaner d-flex justify-content-between ">
        <section class="txt" >
        
          <h2 class="animate"
          data-animate="fadeInRightBig"
          data-duration="1s"
          data-delay="0.5s"
          data-offset="100"
          data-iteration="1">
            Salud
          </h2>
          <h2 class="animate"
          data-animate="fadeInRightBig"
          data-duration="1s"
          data-delay="1s"
          data-offset="100"
          data-iteration="1">
            Personas
          </h2>
          <h2 class="animate"
          data-animate="fadeInRightBig"
          data-duration="1s"
          data-delay="1.5s"
          data-offset="100"
          data-iteration="1">
            Futuro
          </h2>
          <h2 class="animate"
          data-animate="fadeInRightBig"
          data-duration="1s"
          data-delay="2s"
          data-offset="100"
          data-iteration="1">
            Difusión
          </h2>
         
          <h1 class="animate"
          data-animate="fadeInLeftBig"
          data-duration="1s"
          data-delay="2s"
          data-offset="100"
          data-iteration="1">Comunicación integral personalizada en salud</h1>
        </section>
      </div>

      <video id="background-video-header" autoplay loop muted poster="" class="img-fluid relative">
      <source src="assets/newFace.mp4" type="video/mp4" class="img-fluid">
      </video>
  </section>

<div id="nosotros"></div>
<?php
  require "includes/datos.php";
  require "includes/consultoria.php";
  require "includes/contenido.php";
  require "includes/produccion.php";
  require "includes/difusion.php";
?>



 
 


  </section><!--container-total-->
    <!--scripts-->
    <script  src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="js/jquery.scrolla.min.js"></script>
    <!-- <script src="js/multi-animated-counter.js"></script> -->
    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" crossorigin="anonymous"referrerpolicy="no-referrer" ></script>
    
    
    <script src="js/main.js"></script>
    <script>
      var rellax = new Rellax(".rellax");
    </script>
  </body>
</html>