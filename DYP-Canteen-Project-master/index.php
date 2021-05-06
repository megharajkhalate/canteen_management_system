<?php
  include "./include/file.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--some starter content-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
      <link rel="stylesheet" href="css/index.css">                 <!--css file-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />  <link rel="stylesheet" href="../css/index.css">
  <title>DYPCOE CANTEEN PORTAL</title>
</head>

<body>
  <!--Section 1-->
  <section class="section_1 container-fluid  p-0">
    <!--Navigation Bar-->
    <?php
      include "./include/navbar.php";
    ?>

    <header>

      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="./assets/bgvideo.mp4" type="video/mp4">
      </video>
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center py-5">
          <div class="w-100 text-white pt-5">
            <h1 class="display-4 mb-5">Welcome to D Y Patil College Of Engineering Canteen Portal</h1>
            <h2>Good Food leads to a Good Mood</h2>
          </div>
        </div>
      </div>
    </header>

  </section>

  <!--section 2-->
  <?php 
   include "./include/jumbologin.php";
  ?>

  <div class="container-fluid padding py-5">
    <div class="row text-center padding">
      <div class="col-xs-12 col-md-4 col-sm-6">
        <i class="fas fa-3x fa-leaf mb-3"></i>
        <h3>FRESH</h3>
        <p class="px-5">All our food is made with the freshest ingredients</p>
      </div>
      <div class="col-xs-12 col-md-4 col-sm-6">
        <i class="fas fa-3x fa-hand-holding-usd mb-3"></i>
        <h3>AFFORDABLE</h3>
        <p class="px-5">We are commited to the affordability of our food and will continue to keep in the future</p>
      </div>
      <div class="col-xs-12 col-md-4 col-sm-6">
        <i class="fas fa-3x fa-heartbeat mb-3"></i>
        <h3>CLEAN</h3>
        <p class="px-5">We always keep a clean environment in our premises</p>
      </div>
    </div>
  </div>


  <div class="container-fluid px-0">
    <div class="row no-gutters">
      <div class="col-lg-6 p-5">
        <h2 class="font-weight-bold mb-4">About us</h2>
        <p>We are committed to serving the best food for all our customers be the students or the college staff. The
          food
          we serve is made by certified cooks with lot of experiance in the field of cooking.</p>
        <p>We are looking for ways to keep our premises upto a high standard of taste, health, and cleanliness</p>
      </div>
      <div class="col-lg-6">
        <img src="./assets/college.jpeg" class="img-fluid" alt="college">
      </div>
    </div>
  </div>


  <div class="container-fluid px-0">
    <div class="row padding no-gutters">
      <div class="col-lg-6">
        <img src="./assets/veggies.jpg" class="img-fluid" alt="fresh">
      </div>
      <div class="col-lg-6 p-5 align-items-center">
        <h2 class="font-weight-bold mb-5 pt-5">In these difficult times....</h2>
        <p>We are determined to take care of the safety of our customers.</p>
        <p>We promise to ensure that the order takes the least contact as possible</p>
        <p>We have implemented better practices in almost all the areas and also ensured to keep the amount of waste
          generated to the minimum</p>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <h1 class="display-4 text-center py-5">Where can you find us</h1>
    <hr class="line">
    <div class="row padding no-gutters">
      <div class="col-lg-6 p-5">
        <h3 class="font-weight-bold mb-4"><i class="fas fa-map-marker-alt"></i> Location:</h3>
        <p>You can find us by following these directions:</p>
        <ul class="list-group-item-light">
          <li>Head to the C-building of the Old Engineering College in the campus</li>
          <li>Go inside the building to find some stairs leading to the basement</li>
          <li>Go down to the basement and look to your right!</li>
        </ul>
        <p class="font-weight-bold mt-4">Et Voila!<br>You have found us!</p>
        </ul>
      </div>

      <div class="col-lg-6 d-flex container-fluid">
        <div id="map-container-google-2" class="z-depth-1-half map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.4265987398358!2d73.75599781497598!3d18.6448432873367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9f1ca8dab03%3A0x6237cfbd36f9acf9!2sD.Y.%20Patil%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1601877210559!5m2!1sen!2sin" width="250%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row text-center padding">
      <div class="col-12">
        <h2 class="display-5 mb-3">Connect With Us!</h2>
      </div>
      <div class="col-12 social padding">
        <a href="https://www.facebook.com/1040599899300987/" target="_blank"><i class="fab fa-2x fa-facebook-f"></i></a>
        <a href="https://twitter.com/DYPCOE_AKURDI/" target="_blank"><i class="fab fa-2x fa-twitter"></i></a>
        <a href="https://www.instagram.com/dypcoe_ak/" target="_blank"><i class="fab fa-2x fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCl7EyZv0Rb3QKxgTjDQ3e-Q" target="_blank"><i class="fab fa-2x fa-youtube"></i></a>
        <a href="https://www.linkedin.com/in/d-y-patil-college-of-engineering-akurdi-pune-379b701b1" target="_blank"><i class="fab fa-2x fa-linkedin"></i></a>
      </div>
    </div>
  </div>
  </div>

  <?php
    include "./include/footer.php"
  ?>
</body>

</html>