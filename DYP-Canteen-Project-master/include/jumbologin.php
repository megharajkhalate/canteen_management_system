<form method="post">
<?php
  if(empty($cust_id))
    {
  ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-5 text-center p-5">To Avail Some Exciting Offers!!</h1>
      <div class="text-center">
        <hr class="line">
        <a href="./form/login.php">
        <button id="jumbobuttons" type="button" class="btn btn-primary btn-lg m-4">Login to order!</button>
        <a href="./menu.php">
        <button id="jumbobuttons" type="button" class="btn btn-success btn-lg">Take a look at our menu!</button>
      </a>
      </div>
    </div>
  </div>
  <?php
     }
    else
      {
    ?>
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-5 text-center p-5">Welcome <?php echo $cresult['fld_name']."!"; ?></h1>
      <div class="text-center">
        <hr class="line">
        <a href="./menu.php">
        <button id="jumbobuttons" type="button" class="btn btn-success btn-lg">Take a look at our menu!</button>
      </a>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
  </form>