<?php
include "includes/head.php"

  ?>

<head>
   <script src="js/checkout.js"></script>
</head>

<body>
  <div class="site-wrap">
  <?php include "includes/header.php"; ?>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Checkout</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

      <?php
      if (session_status() == PHP_SESSION_NONE) {
        // Start the session
        session_start();
      }

      // Now you can proceed with your code
      if (empty($_SESSION['user_id'])) {
        // echo '<script>alert("Your message goes here.");</script>';
        echo '<div class="row mb-5">
           <div class="col-md-12">
             <div class="bg-light rounded p-3">
               <p class="mb-0">Returning customer? <a href="login.php" class="d-inline-block">Click here</a> to login</p>
             </div>
           </div>
         </div>'; // Don't forget the semicolon here
      } else {
        // echo "";
        // echo '<script>alert("Your message goes 2.");</script>';
      }
      ?>

      
       


        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Billing Details</h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group">
                <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
                <select id="c_country" class="form-control">
                  <!-- <option value="1">Select a country</option> -->
                  <option value="2">India</option>
               
                </select>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_lname">
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
                </div>
              </div>
    
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
              </div>
    
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                </div>
              </div>
    
              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                </div>
              </div>
    
    
    
         
    
            </div>
          </div>
          <div class="col-md-6">  
              
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Quantity</th>
                      <th>Total</th>
                    </thead>
                    <!-- <tbody>
                      <tr>
                        <td>Bioderma <strong class="mx-2">x</strong> 1</td>
                        <td>55.00</td>
                      </tr>
                      <tr>
                        <td>Ibuprofeen <strong class="mx-2">x</strong> 1</td>
                        <td>45.00</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                        <td class="text-black">350.00</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>350.00</strong></td>
                      </tr>
                    </tbody> -->
                    <tbody id="tblCheckOutList">

                    </tbody>
                  </table>
    
                
    
                 
    
                  <div class="border mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button"
                        aria-expanded="false" aria-controls="collapsepaypal">Pay Using Card</a></h3>
    
                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2 px-4">
                        <?php
                        require ('config.php');
                        ?>
                            <form action="thankyou.php" method="post">
                              <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="<?php echo $publishableKey ?>"
                                data-amount="<?php echo $total ?>"
                                data-name="Sonali Pharma"
                                data-description="Soanli Pagade - Indira college Pune"
                                data-image="https://companieslogo.com/img/orig/4581.T-0d6d91eb.png?t=1604535627"
                                data-currency="inr"
                                data-email="pagadesonali@gmail.com"
                              >
                              </script>

                            </form>
                      </div>
                    </div>
                  </div>
    
                  <div class="form-group">
                    <!-- <button class="btn btn-primary btn-lg btn-block" onclick="window.location='thankyou.php'">Place Cash On Delivery</button> -->
                    <button class="btn btn-primary btn-lg btn-block" onclick="makePayment()">Place Cash On Delivery</button>
                  </div>
    
                </div>
              </div>
            </div>
    
          </div>
        </div>
        <!-- </form> -->
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

function makePayment() {
  // if(checkValidation()) {
  //   window.location.href = 'thankyou.php'; 
  //   localStorage.removeItem('cartData');
  // }
    //window.location.href = 'thankyou.php'; 
    // localStorage.removeItem('cartData');
        // Retrieve date from local storage
        var storedDate = localStorage.getItem('cartData');
        if (storedDate) {
            // Send date to PHP script via AJAX
            $.ajax({
                url: 'add_order.php',
                type: 'POST',
                data: { order: storedDate },
                success: function(response) {
                    //alert(response); // Show response from PHP script
                        window.location.href = 'thankyou.php'; 
                        localStorage.removeItem('cartData');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        } else {
            alert('No date found in local storage.');
        }
}

function checkValidation() {
            var firstName = document.getElementById("c_fname").value;
            var lastName = document.getElementById("c_lname").value;
            var address = document.getElementById("c_address").value;
            var stateCountry = document.getElementById("c_state_country").value;
            var postalZip = document.getElementById("c_postal_zip").value;
            var emailAddress = document.getElementById("c_email_address").value;
            var phone = document.getElementById("c_phone").value;

            if (firstName.trim() === '') {
                alert("First Name cannot be empty!");
                return false; 
            }

            if (lastName.trim() === '') {
                alert("Last Name cannot be empty!");
                return false; 
            }

            if (address.trim() === '') {
                alert("Address cannot be empty!");
                return false;
            }

            if (stateCountry.trim() === '') {
                alert("State/Country cannot be empty!");
                return false; 
            }

            if (postalZip.trim() === '') {
                alert("Postal/Zip Code cannot be empty!");
                return false;
            }

            if (emailAddress.trim() === '') {
                alert("Email Address cannot be empty!");
                return false; // Prevent form submission
            }

            if (isNaN(postalZip)) {
                alert("Postal/Zip Code must be a number!");
                return false; // Prevent form submission
            }

            // Email validation using regular expression
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailAddress)) {
                alert("Invalid Email Address!");
                return false; // Prevent form submission
            }

            if (phone.trim() === '') {
                alert("Phone Number cannot be empty!");
                return false; // Prevent form submission
            }

            // Phone number validation using regular expression
            var phoneRegex = /^\d{10}$/; // Assumes 10 digit mobile phone number format
            if (!phoneRegex.test(phone)) {
                alert("Invalid Phone Number! Please enter a 10-digit mobile number.");
                return false; // Prevent form submission
            }

            // If all validations pass, return true
            return true;
        }

        // function checkValidation() {
        //     var errors = []; // Array to store error messages
            
        //     var firstName = document.getElementById("c_fname").value;
        //     var lastName = document.getElementById("c_lname").value;
        //     var address = document.getElementById("c_address").value;
        //     var stateCountry = document.getElementById("c_state_country").value;
        //     var postalZip = document.getElementById("c_postal_zip").value;
        //     var emailAddress = document.getElementById("c_email_address").value;
        //     var phone = document.getElementById("c_phone").value;

        //     if (firstName.trim() === '') {
        //         errors.push("First Name cannot be empty!");
        //     }

        //     if (lastName.trim() === '') {
        //         errors.push("Last Name cannot be empty!");
        //     }

        //     if (address.trim() === '') {
        //         errors.push("Address cannot be empty!");
        //     }

        //     if (stateCountry.trim() === '') {
        //         errors.push("State/Country cannot be empty!");
        //     }

        //     if (postalZip.trim() === '') {
        //         errors.push("Postal/Zip Code cannot be empty!");
        //     } else if (isNaN(postalZip)) {
        //         errors.push("Postal/Zip Code must be a number!");
        //     }

        //     if (emailAddress.trim() === '') {
        //         errors.push("Email Address cannot be empty!");
        //     } else {
        //         var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        //         if (!emailRegex.test(emailAddress)) {
        //             errors.push("Invalid Email Address!");
        //         }
        //     }

        //     if (phone.trim() === '') {
        //         errors.push("Phone Number cannot be empty!");
        //     } else {
        //         var phoneRegex = /^\d{10}$/; // Assumes 10 digit mobile phone number format
        //         if (!phoneRegex.test(phone)) {
        //             errors.push("Invalid Phone Number! Please enter a 10-digit mobile number.");
        //         }
        //     }

        //     // If there are any errors, display them in a single alert
        //     if (errors.length > 0) {
        //         alert(errors.join("\n"));
        //         return false; // Prevent form submission
        //     }
            
        //     // If all validations pass, return true
        //     return true;
        // }
  
  
</script>

</html>