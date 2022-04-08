<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="Css_F/css/bootstrap.min.css">

   <!-- google font link -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Palette+Mosaic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Poppins:wght@300&display=swap" rel="stylesheet">

<!-- font awesome link -->
<script src="https://kit.fontawesome.com/62f5df6ae3.js" crossorigin="anonymous"></script>

<!-- css link -->
<link rel="stylesheet" href="style.css">



    <title>online vegetable store</title>
  </head>
  <body>

  <?php
  include 'header.php';
  ?>

<!-- <div id="slide-wrap">
        <section class="slider">
          <ul class="slider1">
            <li><img src="image/bk6.jpg" height="600px" width="100%" alt=""></li>
            <li><img src="image/bk5.jpg" height="600px" width="100%" alt=""></li>
            <li><img src="image/broccoli.jpg" height="600px" width="100%" alt=""></li>
          </ul>
        </section>
      </div> -->
      
<section class="main">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-lg-7 ">
          <h1 class="pt-5">Nature Has Always Cared For Us!</h1>
           <button class="btn1 mt-3">Explore</button>
        </div>
      </div>
  </div>
</section>

<section class="services py-5 bg-light">
  <div class="container py-5">
    <h1 class="text-center pb-5">Services</h1>
    <div class="rowpb-3">
      <div class="col-lg-4 mb-3"></div>
      <div class="card">
        <div class="circle">
          <span><a href="#" ><i class="fas fa-motorcycle fa-3x"></i></a></span>
        </div>
        <h4 class="font-weight-bold pb-2"> delivery</h4>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
    <div class="col-sm">
      <img src="image/chilli.jpg" width="300px" alt="" srcset="">
    </div>
  <div class="col-sm"><img src="image/tomato.jpg"width="300px" alt="" srcset=""></div>
  <div class="col-sm"><img src="image/pineapple.jpg"width="300px"alt="" srcset=""></div>
  <div class="row">
    <div class="col-sm">
      <img src="image/chilli.jpg" width="300px" alt="" srcset="">
    </div>
  <div class="col-sm"><img src="image/bg_3.jpg"width="315px" alt="" srcset=""></div>
  <div class="col-sm"><img src="image/pineapple.jpg"width="300px"alt="" srcset=""></div>
  </div>
</section>
<?php
include 'footer.php'
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
  <!-- SCRIPTS -->
  <script>
    $(document).ready(function(){
      $('.slider1').bxSlider({
        mode: 'fade',
      });
      $('.slider2').bxSlider({
        mode: 'fade',
      });
      $('.slider3').bxSlider({
        mode: 'fade',
      });
    });
  </script>
</html>
