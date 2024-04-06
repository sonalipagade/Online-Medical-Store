<div class="site-navbar py-2">
  <div class="search-wrap">
    <div class="container">
      <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
      <form action="#" method="post">
        <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
      </form>
    </div>
  </div>

  <div class="container">
    <div class="d-flex align-items-center justify-content-between">
      <div class="logo">
        <div class="site-logo">
          <a href="index.php" class="js-logo-clone">Sonali Pharma</a>
        </div>
      </div>
      <div class="main-nav d-none d-lg-block">
        <nav class="site-navigation text-right text-md-center" role="navigation">
          <ul class="site-menu js-clone-nav d-none d-lg-block">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="shop.php">Store</a></li>
            <!-- <li class="has-children">
                  <a href="#">Dropdown</a>
                  <ul class="dropdown">
                    <li><a href="#">Supplements</a></li>
                    <li class="has-children">
                      <a href="#">Vitamins</a>
                      <ul class="dropdown">
                        <li><a href="#">Supplements</a></li>
                        <li><a href="#">Vitamins</a></li>
                        <li><a href="#">Diet &amp; Nutrition</a></li>
                        <li><a href="#">Tea &amp; Coffee</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Diet &amp; Nutrition</a></li>
                    <li><a href="#">Tea &amp; Coffee</a></li>
                    
                  </ul>
                </li> -->
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <!-- <li><a href="login.php">Login</a></li> -->
            <?php

            if (!isset ($_SESSION['user_id'])) {
              // echo "<a class='nav-link' href='login.php' style='color: #000; font-size:bold;'> Log in</a>";
              echo "<li><a href='login.php'>Login</a></li>";
              echo "<li><a href='SignUp.php'>Sign up</a></li>";

            } else {
              $check_user_id = check_user($_SESSION['user_id']);
              if ($check_user_id == 1) {
                // echo "<a class='nav-link' href='logout.php' style='color: #000; font-size:bold;'> Log out</a>  ";
                echo "<li><a href='logout.php'>Log out</a></li>";
              } else {
                post_redirect("logout.php");
              }
            }
            ?>
          </ul>

        </nav>
      </div>
      <div class="icons">
        <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
        <a href="cart.php" class="icons-btn d-inline-block bag">
          <span class="icon-shopping-bag"></span>
          <span class="number" id="cartNumber">0</span>
        </a>
        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
            class="icon-menu"></span></a>

        <a href="#" class="ml-3 d-inline-block">

          <?php
          if (session_status() == PHP_SESSION_NONE) {
            // Start the session
            session_start();
          }

          // Now you can proceed with your code
          if (isset ($_SESSION['user_fname'])) {
            $username = $_SESSION['user_fname'];
            echo "Hello $username";
          } else {
            echo "";
          }
          ?>
        </a>
      </div>
    </div>
  </div>

</div>




<script>
  $(document).ready(function () {
    let cartNumber = document.getElementById("cartNumber");
    let storedData = JSON.parse(localStorage.getItem("cartData")) || [];
    let intervalId = setInterval(() => {
      cartNumber.innerText = storedData.length;
    }, 1000);
  });  
</script>