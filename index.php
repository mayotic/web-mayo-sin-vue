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
          data-delay="0.2s"
          data-offset="100"
          data-iteration="1">
            Salud
          </h2>
          <h2 class="animate"
          data-animate="fadeInRightBig"
          data-duration="1s"
          data-delay="0.3s"
          data-offset="100"
          data-iteration="1">
            Personas
          </h2>
          <h2 class="animate"
          data-animate="fadeInRightBig"
          data-duration="1s"
          data-delay="0.4s"
          data-offset="100"
          data-iteration="1">
            Futuro
          </h2>
          <h2 class="animate"
          data-animate="fadeInRightBig"
          data-duration="1s"
          data-delay="0.5s"
          data-offset="100"
          data-iteration="1">
            Difusión
          </h2>
         
          <h1 class="animate"
          data-animate="fadeInLeftBig"
          data-duration="1s"
          data-delay="0.6s"
          data-offset="100"
          data-iteration="1">Comunicación integral personalizada en salud</h1>
        </section>
      </div>

      <video id="background-video-header" autoplay loop muted poster="" class="img-fluid relative">
      <source src="assets/newFace.mp4" type="video/mp4" class="img-fluid">
      </video>
  </section>

<div id="nosotros"></div>
<!-- seccion datos -->
  <section class="relative bg-claro pb-5">
    <div class="rellax" data-rellax-speed="-1" class="face1">
          <img src="img/FACE-1.png" alt="face1" class="face1">
     </div> 
    <section class="container-fluid row  justify-content-end relative">
      <h3 class="col-lg-7 text-end mt-5"
         >
          Facilitando el acceso al <b>conocimiento 
          científico-sanitario</b>
      </h3>
    </section><!--container-fluid-->
    <section class="container-fluid d-flex">
        <div class="col-3"></div>
        <div class="col">
          <div class="relative mt-5">
          <article class="num num-300 d-flex align-items-end col-6 mt-0 rellax" data-rellax-speed="-1" >
            <img src="img/+300.svg" alt="300">
            <div class="text-num mx-3"><b>KOL’s</b> que confían en nosotros</div>
          </article>
          <article class="num num-17 d-flex flex-column col-6 offset-3 align-items-end justify-content-end mt-5 rellax" data-rellax-speed="0">
            <img src="img/+17.svg" alt="17000">
            <div class="text-num">proyectos</div>
          </article>
          <article class="num num-12 d-flex flex-column col-3 offset-2   align-items-end justify-content-end mt-5 rellax" data-rellax-speed="-.5">
            <img src="img/+12.svg" alt="12000">
            <div class="text-num text-end ml-5"><b>autores</b> han participado en nuestras publicaciones</div>
          </article>
          <article class="num num-600 d-flex flex-column col-6 offset-5   align-items-end justify-content-end mt-5 rellax" data-rellax-speed="1">
            <img src="img/+600.svg" alt="600">
            <div class="text-num text-end ">clientes</div>
          </article>
          <article class="num num-40 d-flex  col-8   align-items-end justify-content-end my-5 rellax" data-rellax-speed="0">
            <img src="img/40.svg" alt="40">
            <div class="text-num text-start mx-3"><span class="years">años</span><br>
            comunicando salud
            </div>
          </article>
          </div>
          
        </div><!--col-->
    </section>
  </section><!--bg-claro-->
 
  <!-- seccion consultoria -->
  <section class="">
  <div id="consultoria"></div>
  <div class="container-fluid">
    <div class="ml-3 title-page py-4"><span class="destacado">consultoRía</span> contenido producción difusión  </div>
    <article class="d-flex align-items-center">
      <div class="col-6 text-end">
        <img src="img/img-ref.png" alt="consultoria" class="img-fluid">
      </div>
      <div class="col-6 relative">
      <img src="img/consultoria.svg" alt="consultoria" class="triangle1">
      </div>
    </article>
    <article class="d-flex">
    <div class="col-6 relative">
        <img src="img/medical.svg" alt="consultoria" class="triangle2">
      </div>
      <div class="col-6">
      <img src="img/img-ref.png" alt="consultoria" class="img-fluid">
      </div>
    </article>
  </div>

   
  
  </section>


  </section><!--container-total-->
    <!--scripts-->
    <script  src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="js/jquery.scrolla.min.js"></script>
    <script src="js/multi-animated-counter.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" crossorigin="anonymous"referrerpolicy="no-referrer" ></script>
    
    
    <script src="js/main.js"></script>
    <script>
      var rellax = new Rellax(".rellax");
    </script>
  </body>
</html>