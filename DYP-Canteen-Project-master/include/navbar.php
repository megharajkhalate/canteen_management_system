<nav class="navbar navbar-expand-md navbar-light bg-transparent">
      <!--md break point at 768px-->
      <div class="container-fluid">
        <!-- container fluid takes up 100% of the screen-->
        <a href="https://www.dypcoeakurdi.ac.in/" class="navbar-brand"><img id="logo" src="./assets/dyp-logo1.png"></a>
        <h3 id="headtext">DY PATIL COLLEGE OF ENGINEERING</h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <!--thsi is navigation toggler for smaller screens-->
          <span class="navbar-toggler-icon"></span>
          <!--this is for the navbar icon-->
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./menu.php">Menu</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <form method="post">
                  <?php
              if(empty($cust_id))
              {
              ?>              
              &nbsp;&nbsp;&nbsp;
              <button class="btn btn-outline-danger my-2 my-sm-0" name="login" type="submit">Login/Signup</button>&nbsp;&nbsp;&nbsp;
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