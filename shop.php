
<?php
include "includes/head.php"
?>



<body>

  <div class="site-wrap">

  <?php include "includes/header.php";?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Store</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
              
    
        <div class="row">

        <?php
        $data = all_items();
        // echo '<pre>';
        // print_r($data[0]);
        // echo '</pre>';
        // Output the variable information to the terminal
          if (isset($data)) {


            $num = sizeof($data);
            for ($i = 0; $i < $num; $i++) {
              $itemId = $data[$i]['item_id']; 
        ?>
                <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale 20%</span>
            <a href="single.php?product_id=<?php echo $itemId; ?>"><img  class="product_image" src="images/<?php echo $data[$i]['item_image']; ?>" alt="Image"></a>
            <h3 class="text-dark"><a href="single.php?product_id=<?php echo $itemId; ?>" class="product_title"><?php echo $data[$i]['item_title'] ?></a></h3>
            <p class="price">&#8377; <?php echo $data[$i]['item_price'] - $data[$i]['item_price'] * 0.20 ?> <del> &#8377; <?php echo $data[$i]['item_price'] ?></del></p>
            <!-- <p class="price">&#8377; <?php echo $data[$i]['item_price'] ?></p> -->
          </div>
        <?php
            }
        }
        ?>


        

         






          <!-- <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="single.php"> <img src="images/product_02.png" alt="Image"></a>
            <h3 class="text-dark"><a href="single.php">Chanca Piedra</a></h3>
            <p class="price">$70.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="single.php"> <img src="images/product_03.png" alt="Image"></a>
            <h3 class="text-dark"><a href="single.php">Umcka Cold Care</a></h3>
            <p class="price">$120.00</p>
          </div>
    
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
    
            <a href="single.php"> <img src="images/product_04.png" alt="Image"></a>
            <h3 class="text-dark"><a href="single.php">Cetyl Pure</a></h3>
            <p class="price"><del>45.00</del> &mdash; $20.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="single.php"> <img src="images/product_05.png" alt="Image"></a>
            <h3 class="text-dark"><a href="single.php">CLA Core</a></h3>
            <p class="price">$38.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="single.php"> <img src="images/product_06.png" alt="Image"></a>
            <h3 class="text-dark"><a href="single.php">Poo Pourri</a></h3>
            <p class="price"><del>$89</del> &mdash; $38.00</p>
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="single.php"> <img src="images/product_01.png" alt="Image"></a>
            <h3 class="text-dark"><a href="single.php">Bioderma</a></h3>
            <p class="price"><del>95.00</del> &mdash; $55.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="single.php"> <img src="images/product_02.png" alt="Image"></a>
            <h3 class="text-dark"><a href="single.php">Chanca Piedra</a></h3>
            <p class="price">$70.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="single.php"> <img ˀsrc="images/product_03.png" alt="Image"></a>
            <h3 class="text-dark"><a href="single.php">Umcka Cold Care</a></h3>
            <p class="price">$120.00</p>
          </div>
          
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
          
            <a href="single.php"> <img src="images/product_04.png" alt="Image"></a>
            <h3 class="text-dark"><a href="single.php">Cetyl Pure</a></h3>
            <p class="price"><del>45.00</del> &mdash; $20.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="single.php"> <img src="images/product_05.png" alt="Image"></a>
            <h3 class="text-dark"><a href="single.php">CLA Core</a></h3>
            <p class="price">$38.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="single.php"> <img src="images/product_06.png" alt="Image"></a>
            <h3 class="text-dark"><a href="single.php">Poo Pourri</a></h3>
            <p class="price"><del>$89</del> &mdash; $38.00</p>
          </div> -->
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


    <?php include "includes/footer.php";?>
  </div>


</body>

