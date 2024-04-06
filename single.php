<?php
include "includes/head.php"
  ?>



<body>

  <div class="site-wrap">

    <?php include "includes/header.php"; ?>


    <?php
    // Check if 'id' is present in the query parameters
    if (isset($_GET['product_id'])) {
      // Sanitize and retrieve the ID from the query parameters
      $itemId = filter_var($_GET['product_id'], FILTER_SANITIZE_NUMBER_INT);

      // Now you can use $itemId to fetch the specific record from your data source (e.g., database)
    
      // Example: Fetching record from an imaginary function get_item_by_id
      $item = get_item_id($itemId);

      // Output the record details
      if ($item) {
        // echo '<pre>';
        // print_r($item);
        // echo '</pre>';
        // Display the details of the item using $item array
      } else {
        echo 'Item not found.';
      }
    } else {
      echo 'ID not provided.';
    }



    ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a
              href="shop.php">Store</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">
              <?php echo $item[0]['item_title'] ?>
            </strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">


        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class="border text-center">
              <img class="img-fluid p-5" src="images/<?php echo $item[0]['item_image']; ?>" alt="Image"></a>
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="text-black">
              <?php echo $item[0]['item_title'] ?>
            </h2>
            <p>
              <?php echo $item[0]['item_details'] ?>
            </p>


            <p><del> &#8377;
                <?php echo $item[0]['item_price'] ?>
              </del> <strong class="text-primary h4">&#8377;
                <?php echo $item[0]['item_price'] - $item[0]['item_price'] * 0.20 ?>
              </strong></p>


            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 220px;">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-primary js-btn-minus" type="button" id="minus">&minus;</button>
                </div>
                <input type="text" class="form-control text-center" value="1" placeholder="" id="quantity"
                  aria-label="Example text with button addon" aria-describedby="button-addon1">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary js-btn-plus" type="button" id="add">&plus;</button>
                </div>
              </div>

            </div>
            <p><a href="cart.php" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" id="addToCart">Add To
                Cart</a></p>

            <div class="mt-5">
              <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Ordering Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Specifications</a>
                </li>

              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <table class="table custom-table">
                    <thead>
                      <th>Material</th>
                      <th>Description</th>
                      <th>Packaging</th>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>1 BT</td>
                      </tr>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>144/CS</td>
                      </tr>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>1 EA</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                  <table class="table custom-table">

                    <tbody>
                      <tr>
                        <td>HPIS CODE</td>
                        <td class="bg-light">999_200_40_0</td>
                      </tr>
                      <tr>
                        <td>HEALTHCARE PROVIDERS ONLY</td>
                        <td class="bg-light">No</td>
                      </tr>
                      <tr>
                        <td>LATEX FREE</td>
                        <td class="bg-light">Yes, No</td>
                      </tr>
                      <tr>
                        <td>MEDICATION ROUTE</td>
                        <td class="bg-light">Topical</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
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



</body>


<script>
  let itemPrice = <?php echo $item[0]['item_price'] - $item[0]['item_price'] * 0.20 ?>;
  let product = "<?php echo $item[0]['item_title'] ?>";
  let image = "<?php echo $item[0]['item_image'] ?>";
  let itemId = "<?php echo $item[0]['item_id'] ?>";
  document.addEventListener("DOMContentLoaded", function () {
    let minusBtn = document.getElementById("minus");
    let addBtn = document.getElementById("add");
    let addToCart = document.getElementById("addToCart");
    let inputElement = document.getElementById("quantity");

    // Move inputValue initialization inside the event listener
    let inputValue = parseFloat(inputElement.value);

    minusBtn.addEventListener("click", function () {
      if (inputValue > 1) {
        inputValue--;
      }
      inputElement.value = inputValue; // Update the input value
    });

    addBtn.addEventListener("click", function () {
      if (inputValue >= 1) {
        inputValue++;
      }
      inputElement.value = inputValue; // Update the input value
    });

    addToCart.addEventListener("click", function () {
      let inputElement = document.getElementById("quantity");
      let inputValue = parseFloat(inputElement.value);
      let storedData = JSON.parse(localStorage.getItem("cartData")) || [];
      let newObj = {
        indexNumber: storedData.length,
        quantity: inputValue,
        price: itemPrice,
        product: product,
        image: image,
        itemId: itemId
      };

      storedData.push(newObj);

      localStorage.setItem("cartData", JSON.stringify(storedData));


    });


  });
</script>