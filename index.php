<?php
include "includes/head.php"
  ?>

<body>
  <div class="site-wrap">
    <?php include "includes/header.php"; ?>   
    <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2>
              <h1>Welcome To Pharma</h1>
              <p>
                <a href="shop.php" class="btn btn-primary px-5 py-3">Shop Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch section-overlap">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-primary h-100">
              <a href="#" class="h-100">
                <h5>Free <br> Shipping</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap h-100">
              <a href="#" class="h-100">
                <h5>Season <br> Sale 50% Off</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-warning h-100">
              <a href="#" class="h-100">
                <h5>Buy <br> A Gift Card</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
        </div>

        <div class="row">



          <?php
          $data = all_items();
          // echo '<pre>';
          // print_r($data[0]);
          // echo '</pre>';
          // Output the variable information to the terminal
          if (isset ($data)) {


            $num = $num = min(sizeof($data), 6);
            for ($i = 0; $i < $num; $i++) {
              $itemId = $data[$i]['item_id'];
              ?>
              <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <!-- <span class="tag">Sale 20%</span> -->
                <a href="single.php?product_id=<?php echo $itemId; ?>"><img class="product_image"
                    src="images/<?php echo $data[$i]['item_image']; ?>" alt="Image"></a>
                <h3 class="text-dark"><a href="single.php" class="product_title">
                    <?php echo $data[$i]['item_title'] ?>
                  </a></h3>
                <p class="price">&#8377;
                  <?php echo $data[$i]['item_price'] - $data[$i]['item_price'] * 0.20 ?> <del> &#8377;
                    <?php echo $data[$i]['item_price'] ?>
                  </del>
                </p>
                <!-- <p class="price">&#8377; <?php echo $data[$i]['item_price'] ?></p> -->
              </div>
              <?php
            }
          }
          ?>
        </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="shop.php" class="btn btn-primary px-4 py-3">View All Products</a>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">New Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              <?php
              $data = all_items();
              if (isset ($data)) {
                $num = $num = min(sizeof($data), 6);
                for ($i = 0; $i < $num; $i++) {
                  $itemId = $data[$i]['item_id'];
                  ?>
                  <div class="text-center item mb-4">
                    <!-- <span class="tag">Sale 20%</span> -->
                    <a href="single.php?product_id=<?php echo $itemId; ?>"><img class="product_image"
                        src="images/<?php echo $data[$i]['item_image']; ?>" alt="Image"></a>
                    <h3 class="text-dark"><a href="single.php" class="product_title">
                        <?php echo $data[$i]['item_title'] ?>
                      </a></h3>
                    <p class="price">&#8377;
                      <?php echo $data[$i]['item_price'] - $data[$i]['item_price'] * 0.20 ?> <del> &#8377;
                        <?php echo $data[$i]['item_price'] ?>
                      </del>
                    </p>
                  </div>
                  <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>


    <?php include "includes/footer.php"; ?>
  </div>

  <script src="js/owl.carousel.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

</body>