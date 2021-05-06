<?php
session_start();


include("connection.php");
extract($_REQUEST);
$arr=array();
if(isset($_GET['msg']))
{
	$loginmsg=$_GET['msg'];
}
else
{
	$loginmsg="";
}
if(isset($_SESSION['cust_id']))
{
	 $cust_id=$_SESSION['cust_id'];
	 $cquery=mysqli_query($con,"select * from tblcustomer where fld_email='$cust_id'");
	 $cresult=mysqli_fetch_array($cquery);
}
else
{
	$cust_id="";
}
 





$query=mysqli_query($con,"select  tblvendor.fld_name,tblvendor.fldvendor_id,tblvendor.fld_email,
tblvendor.fld_mob,tblvendor.fld_address,tbfood.food_id,tbfood.foodname,tbfood.cost,
tbfood.cuisines,tbfood.paymentmode 
from tblvendor inner join tbfood on tblvendor.fldvendor_id=tbfood.fldvendor_id;");
while($row=mysqli_fetch_array($query))
{
	$arr[]=$row['food_id'];
	shuffle($arr);
}

//print_r($arr);

 if(isset($addtocart))
 {
	 
	if(!empty($_SESSION['cust_id']))
	{
		 
		header("location:form/cart.php?product=$addtocart");
	}
	else
	{
		header("location:form/?product=$addtocart");
	}
 }
 
 if(isset($login))
 {
	 header("location:form/login.php");
 }
 if(isset($logout))
 {
	 session_destroy();
	 header("location:index.php");
 }
 $query=mysqli_query($con,"select tbfood.foodname,tbfood.fldvendor_id,tbfood.cost,tbfood.cuisines,tbfood.fldimage,tblcart.fld_cart_id,tblcart.fld_product_id,tblcart.fld_customer_id from tbfood inner  join tblcart on tbfood.food_id=tblcart.fld_product_id where tblcart.fld_customer_id='$cust_id'");
  $re=mysqli_num_rows($query);
if(isset($message))
 {
	 
	 if(mysqli_query($con,"insert into tblmessage(fld_name,fld_email,fld_phone,fld_msg) values ('$nm','$em','$ph','$txt')"))
     {
		 echo "<script> alert('We will be Connecting You shortly')</script>";
	 }
	 else
	 {
		 echo "failed";
	 }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" type="text/css" href="./css/about-us.css">
  <title>DYPCOE CANTEEN PORTAL</title>

</head>
 <body>
   <nav class="navbar navbar-expand-md navbar-light bg-transparent">
      <!--md break point at 768px-->
      <div class="container-fluid">
        <!-- container fluid takes up 100% of the screen-->
        
        <h3 id="headtext">DY PATIL COLLEGE OF ENGINEERING</h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <!--thsi is navigation toggler for smaller screens-->
          <span class="navbar-toggler-icon"></span>
          <!--this is for the navbar icon-->
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu.php">Menu</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <form method="post">
                  <?php
              if(empty($cust_id))
              {
              ?>              
              &nbsp;&nbsp;&nbsp;
              <button class="btn btn-outline-danger my-2 my-sm-0" name="login" type="submit">Log In</button>&nbsp;&nbsp;&nbsp;
                    <?php
              }
              else
              {
              ?>
              <button class="btn btn-outline-success my-2 my-sm-0" name="logout" type="submit">Log Out</button>&nbsp;&nbsp;&nbsp;
              <?php
              }
              ?>
              </form>
        </li>
          </ul>
        </div>
      </div>
    </nav>
    <header id="header">
<div class="container h-100">
  <div class="d-flex h-100 text-center align-items-center py-5" style='background-image: url("./assets/about-us/bgabout.jpg");background-size:cover'>
    <div class="w-100 text-white pt-5">
      <h1 class="display-4 mb-5">About Us</h1>
      <h2> D Y Patil College Of Engineering</h2>
    </div>
  </div>
</div>
</header>

<br><br>

   <div class="container">
  <div class="row">
    <div class="col-lg- 6 col-sm-6 col-xs-12">
      <img id="dyp-img" src="assets/about-us/dypcoe.jpg" alt="">
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
      Dr. D. Y. Patil Prathishthan's, D.Y. Patil College of Engineering, was established in 1984 in Pimpri and later shifted to Akurdi complex in 2001, which is in the vicinity of Pimpri Chinchwad Industrial area, one of the biggest Industrial belts in Asia. The college spreads over 10 acres of land with seven Engineering disciplines. This Institute is approved by AICTE, New Delhi and is affiliated to the Savitribai Phule Pune University.

The college has excellent & ambient infrastructure with well-equipped laboratories. Well-qualified, motivated, and dedicated faculty members are serving in the Institute. Students are encouraged to actively participate in National and State level co-curricular and extracurricular activities. The institute has well planned boys and girls hostel in the campus with better amenities and ultra-modern facilities.
    </div>
    
    <hr>
    
    
  </div>
</div>

<br>
   <div class="container">
  <div class="row">
    <div class="col-lg-4 col-sm-4 col-xs-12">
      <div class="card">
        <img src="assets/about-us/col-joshi.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>Col. S. K. Joshi</b></h4>
          <p>Campus Director</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-4 col-xs-12">
      <div class="card">
        <img src="assets/about-us/principal.jfif" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>Prof. (Dr) V. M. Wadhai</b></h4>
          <p>Principal</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-4 col-xs-12">
     <div id="vice" class="card">
      <img src="assets/about-us/vice-principal.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Dr. Mrs. P. Malathi</b></h4>
        <p>Vice-Principal</p>

      </div>
    </div>
    </div>  
  </div>    
</div>
    <hr>
  <h2 id="contacthead">Get in touch with us</h2>
    <div class="container">
  <div class="row">
    <div class="col-lg-6 col-sm-6 col-xs-12">
      <a id="telephone" href="tel:+91–20–27653058">
       <i class="fas fa-phone fa-2x">:+91–20–27653058 </i>
      </a>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
      <a href="mailto:info@dypcoeakurdi.ac.in"></a>
      <i id="email" class="fas fa-envelope fa-2x">:info@dypcoeakurdi.ac.in</i>
    </div>
  </div>
</div>
     <div id="map" class="col-lg-12 col-xs-12">
        <div id="map-container-google-2" class="z-depth-1-half map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.4265987398358!2d73.75599781497598!3d18.6448432873367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9f1ca8dab03%3A0x6237cfbd36f9acf9!2sD.Y.%20Patil%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1601877210559!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
  </div>
</div>
   <hr>
  <div class="container-fluid">
    <div class="row text-center padding">
      <div class="col-12">
        <h2 class="display-5 mb-3">Connect With Us!</h2>
      </div>
      <div class="col-12 social padding">
      <a id="icon" href="https://www.facebook.com/1040599899300987/" target="_blank"><i class="fab fa-2x fa-facebook-f"></i></a>
      <a id="icon" href="https://twitter.com/DYPCOE_AKURDI/" target="_blank"><i class="fab fa-2x fa-twitter"></i></a>
      <a id="icon" href="https://www.instagram.com/dypcoe_ak/" target="_blank"><i class="fab fa-2x fa-instagram"></i></a>
      <a id="icon" href="https://www.youtube.com/channel/UCl7EyZv0Rb3QKxgTjDQ3e-Q" target="_blank"><i class="fab fa-2x fa-youtube"></i></a>
      <a id="icon" href="https://www.linkedin.com/in/d-y-patil-college-of-engineering-akurdi-pune-379b701b1" target="_blank"><i class="fab fa-2x fa-linkedin"></i></a>

      </div>
    </div>
  </div>
  </div>
  <footer class="p-5">
    <div class="container-fluid padding">
      <div class="row">
        <div class="col-lg-4">
          <h4 class="font-weight-bold">DY PATIL COLLEGE OF ENGINEERING</h4>
          <hr class="light">
          <p>Good Food leads to a Good Mood</p>
        </div>
        <div class="col-lg-4 d-flex justify-content-center">
          <div>
            <h3>Timings</h3>
            <hr class="light">
            <p>8:00 am - 6:00 pm</p>
          </div>
        </div>

        <div class="col-lg-4 d-flex justify-content-center">
          <div>
            <h3>For feeback</h3>
            <hr class="light">
            <p>Email: info@dypcoeakurdi.ac.in</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
 </body>
</html>