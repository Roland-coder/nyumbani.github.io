<?php 
include('header.php');
?>

  
    
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" id="home-section">


      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 mt-lg-5 text-center">
            <h1>Property Listings</h1>
            <p class="mb-5">We provide you with the best houses that suit your prerences from very qualified agents</p>
            
          </div>
        </div>
      </div>

      <a href="#listings-section" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>  

    
    <div class="site-section" id="listings-section">
      <div class="container">
        
        <div class="row">
          <div class="col-md-3 order-1 order-md-2">
          <div class="mb-5">
            <!-- <h3 class="text-black mb-4 h5 font-family-2">Filter</h3> -->
            <form action="#">
              <div class="form-group">
                <!-- <div class="select-wrap">
                  <span class="icon icon-keyboard_arrow_down"></span>
                  <select class="form-control px-3"> -->
                    <!-- <option value="">By Date</option>
                    <option value="">Trending</option>
                    <option value="">Best</option> -->
                  </select>
                </div>
              </div>
              <div class="form-group">
                <!-- <div class="select-wrap">
                  <span class="icon icon-keyboard_arrow_down"></span>
                  <select class="form-control px-3"> -->
                    <!-- <option value="">1 Bath, 1 Bedroom</option>
                    <option value="">2 Bath, 2 Bedroom</option>
                    <option value="">3+ Bath, 3+ Bedroom</option> -->
                  </select>
                </div>
              </div>
              <div class="form-group">
                <!-- <div class="select-wrap">
                  <span class="icon icon-keyboard_arrow_down"></span>
                  <select class="form-control px-3"> -->
                    <!-- <option value="">For Sale</option>
                    <option value="">For Rent</option>
                    <option value="">For Lease</option> -->
                  </select>
                </div>
              </div>
            </form>
            </div>

            <!-- <div class="mb-5">
              <h3 class="text-black mb-4 h5 font-family-2">Filter by Price</h3>
              <div id="slider-range" class="border-primary"></div>
              <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
            </div> -->
          </div>

          <?php
                    
            $db = mysqli_connect('localhost', 'root', '', 'registration');
            $sql = "SELECT * FROM addhouse";

            if ($result = mysqli_query($db, $sql)) {
              // Fetch one and one row
              while ($row = mysqli_fetch_row($result)) {
                // printf ("%s (%s)\n", $row[0], $row[1]);
                $price = $row[1];
                $beds = $row[2];
                $location = $row[3];
                $size = $row[4];
                $image = $row[5];
                
          ?>
          <div class="col-md-9 order-2 order-md-1">

                <div class="property horizontal d-flex">
                  
                  
                  <div class="mr-3 img-entry">
                  
                    <a href="property-single.php"><img src="imagesuploadedf/<?php echo $image ?>" alt="Image" class="img-fluid"></a>
                  </div>
                  <div class="prop-details p-3">
                  
                    <div><a href="property-single.php"><strong class="price">$<?php echo $price ?></strong></a></div>
                    <div class="mb-2 d-flex justify-content-between">
                      <span class="w border-r"><p><?php echo $beds ?>  beds</span> 
                      <span class="w border-r">   4 baths</span>
                      <span class="w"><p><?php echo $size ?>  sqft.</span>
                    </div>
                    <div><?php echo $location ?></div>
                  </div>
                </div>
                <?  } ?>
              <?  } ?>
              <?php
                }
                mysqli_free_result($result);
              }

              mysqli_close($db);
            ?>
              
            
                  
          </div>
            

                 

    
        
  
            <div class="property horizontal d-flex">
              <div class="mr-3 img-entry">
                <a href="property-single.php"><img src="images/property_1-sm.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="prop-details p-3">
                <div><a href="property-single.php"><strong class="price">$3,400,000</strong></a></div>
                <div class="mb-2 d-flex justify-content-between">
                  <span class="w border-r">6 beds</span> 
                  <span class="w border-r">4 baths</span>
                  <span class="w">4,250 sqft.</span>
                </div>
                <div>480 12th, Unit 14, San Francisco, CA</div>
              </div>
            </div>

            <div class="property horizontal d-flex">
              <div class="mr-3 img-entry">
                <a href="property-single.php"><img src="images/property_2-sm.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="prop-details p-3">
                <div><a href="property-single.php"><strong class="price">$3,400,000</strong></a></div>
                <div class="mb-2 d-flex justify-content-between">
                  <span class="w border-r">6 beds</span> 
                  <span class="w border-r">4 baths</span>
                  <span class="w">4,250 sqft.</span>
                </div>
                <div>480 12th, Unit 14, San Francisco, CA</div>
              </div>
            </div>

            <div class="property horizontal d-flex">
              <div class="mr-3 img-entry">
                <a href="property-single.php"><img src="images/property_3-sm.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="prop-details p-3">
                <div><a href="property-single.php"><strong class="price">$3,400,000</strong></a></div>
                <div class="mb-2 d-flex justify-content-between">
                  <span class="w border-r">6 beds</span> 
                  <span class="w border-r">4 baths</span>
                  <span class="w">4,250 sqft.</span>
                </div>
                <div>480 12th, Unit 14, San Francisco, CA</div>
              </div>
            </div>

            <div class="property horizontal d-flex">
              <div class="mr-3 img-entry">
                <a href="property-single.php"><img src="images/property_4-sm.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="prop-details p-3">
                <div><a href="property-single.php"><strong class="price">$3,400,000</strong></a></div>
                <div class="mb-2 d-flex justify-content-between">
                  <span class="w border-r">6 beds</span> 
                  <span class="w border-r">4 baths</span>
                  <span class="w">4,250 sqft.</span>
                </div>
                <div>480 12th, Unit 14, San Francisco, CA</div>
              </div>
            </div>

            <div class="property horizontal d-flex">
              <div class="mr-3 img-entry">
                <a href="property-single.php"><img src="images/property_5-sm.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="prop-details p-3">
                <div><a href="property-single.php"><strong class="price">$3,400,000</strong></a></div>
                <div class="mb-2 d-flex justify-content-between">
                  <span class="w border-r">6 beds</span> 
                  <span class="w border-r">4 baths</span>
                  <span class="w">4,250 sqft.</span>
                </div>
                <div>480 12th, Unit 14, San Francisco, CA</div>
              </div>
            </div>

            <div class="property horizontal d-flex">
              <div class="mr-3 img-entry">
                <a href="property-single.php"><img src="images/property_1-sm.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="prop-details p-3">
                <div><a href="property-single.php"><strong class="price">$3,400,000</strong></a></div>
                <div class="mb-2 d-flex justify-content-between">
                  <span class="w border-r">6 beds</span> 
                  <span class="w border-r">4 baths</span>
                  <span class="w">4,250 sqft.</span>
                </div>
                <div>480 12th, Unit 14, San Francisco, CA</div>
              </div>
            </div>

            <div class="property horizontal d-flex">
              <div class="mr-3 img-entry">
                <a href="property-single.php"><img src="images/property_2-sm.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="prop-details p-3">
                <div><a href="property-single.php"><strong class="price">$3,400,000</strong></a></div>
                <div class="mb-2 d-flex justify-content-between">
                  <span class="w border-r">6 beds</span> 
                  <span class="w border-r">4 baths</span>
                  <span class="w">4,250 sqft.</span>
                </div>
                <div>480 12th, Unit 14, San Francisco, CA</div>
              </div>
            </div>

            <div class="property horizontal d-flex">
              <div class="mr-3 img-entry">
                <a href="property-single.php"><img src="images/property_3-sm.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="prop-details p-3">
                <div><a href="property-single.php"><strong class="price">$3,400,000</strong></a></div>
                <div class="mb-2 d-flex justify-content-between">
                  <span class="w border-r">6 beds</span> 
                  <span class="w border-r">4 baths</span>
                  <span class="w">4,250 sqft.</span>
                </div>
                <div>480 12th, Unit 14, San Francisco, CA</div>
              </div>
            </div>

            <div class="property horizontal d-flex">
              <div class="mr-3 img-entry">
                <a href="property-single.php"><img src="images/property_4-sm.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="prop-details p-3">
                <div><a href="property-single.php"><strong class="price">$3,400,000</strong></a></div>
                <div class="mb-2 d-flex justify-content-between">
                  <span class="w border-r">6 beds</span> 
                  <span class="w border-r">4 baths</span>
                  <span class="w">4,250 sqft.</span>
                </div>
                <div>480 12th, Unit 14, San Francisco, CA</div>
              </div>
            </div>

            <div class="property horizontal d-flex">
              <div class="mr-3 img-entry">
                <a href="property-single.php"><img src="images/property_5-sm.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="prop-details p-3">
                <div><a href="property-single.php
                  "><strong class="price">$3,400,000</strong></a></div>
                <div class="mb-2 d-flex justify-content-between">
                  <span class="w border-r">6 beds</span> 
                  <span class="w border-r">4 baths</span>
                  <span class="w">4,250 sqft.</span>
                </div>
                <div>480 12th, Unit 14, San Francisco, CA</div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-9">
            <div class="custom-pagination text-center">
              <span>1</span>
              <a href="#">2</a>
              <a href="#">3</a>
              <span class="more-page">...</span>
              <a href="#">7</a>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="properties-section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-7 text-left">
            <h2 class="section-title mb-3">More Properties</h2>
          </div>
          <div class="col-md-5 text-left text-md-right">
            <div class="custom-nav1">
              <a href="#" class="custom-prev1">Previous</a><span class="mx-3">/</span><a href="#" class="custom-next1">Next</a>
            </div>
          </div>
        </div>

        <div class="owl-carousel nonloop-block-13 mb-5">

          <div class="property">
            <a href="property-single.php">
              <img src="images/property_1.jpg" alt="Image" class="img-fluid">
            </a>
            <div class="prop-details p-3">
              <div><strong class="price">$3,400,000</strong></div>
              <div class="mb-2 d-flex justify-content-between">
                <span class="w border-r">6 beds</span> 
                <span class="w border-r">4 baths</span>
                <span class="w">4,250 sqft.</span>
              </div>
              <div>480 12th, Unit 14, San Francisco, CA</div>
            </div>
          </div>

          <div class="property">
            <a href="property-single.php">
              <img src="images/property_2.jpg" alt="Image" class="img-fluid">
            </a>
            <div class="prop-details p-3">
              <div><strong class="price">$3,400,000</strong></div>
              <div class="mb-2 d-flex justify-content-between">
                <span class="w border-r">6 beds</span> 
                <span class="w border-r">4 baths</span>
                <span class="w">4,250 sqft.</span>
              </div>
              <div>480 12th, Unit 14, San Francisco, CA</div>
            </div>
          </div>

          <div class="property">
            <a href="property-single.php">
              <img src="images/property_3.jpg" alt="Image" class="img-fluid">
            </a>
            <div class="prop-details p-3">
              <div><strong class="price">$3,400,000</strong></div>
              <div class="mb-2 d-flex justify-content-between">
                <span class="w border-r">6 beds</span> 
                <span class="w border-r">4 baths</span>
                <span class="w">4,250 sqft.</span>
              </div>
              <div>480 12th, Unit 14, San Francisco, CA</div>
            </div>
          </div>

          <div class="property">
            <a href="property-single.php">
              <img src="images/property_4.jpg" alt="Image" class="img-fluid">
            </a>
            <div class="prop-details p-3">
              <div><strong class="price">$3,400,000</strong></div>
              <div class="mb-2 d-flex justify-content-between">
                <span class="w border-r">6 beds</span> 
                <span class="w border-r">4 baths</span>
                <span class="w">4,250 sqft.</span>
              </div>
              <div>480 12th, Unit 14, San Francisco, CA</div>
            </div>
          </div>

        </div>
        
      </div>
    </div>

    <div class="py-5 bg-light site-section how-it-works" id="howitworks-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3">How It Works</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="custom-icon flaticon-house text-primary"></span>
              <h3 class="text-dark">Find Property.</h3>
              <p>Search our houses to see the ones that match your preference</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="custom-icon flaticon-coin text-primary"></span>
              <h3 class="text-dark">Buy Property.</h3>
              <p>Fill in the form provided and an agent will get back to you</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="custom-icon flaticon-home text-primary"></span>
              <h3 class="text-dark">Make Investment.</h3>
              <p>You can then enjoy your Investment</p>
            </div>
          </div>
        </div>
      </div>  
    </div>

    
    

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Nyumbani</h2>
                <p>Nyumbani is a real estate company that was founded by a group of ALU students who were looking for a way of helping international students in Rwanda find their dream houses .</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="index.php#about-section">About Us</a></li>
                  <!-- <li><a href="#">Services</a></li> -->
                  <li><a href="index.php#testimonials-section">Testimonials</a></li>
                  <li><a href="index.php#contact-section">Contact Us</a></li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-4">
              <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>  
            </div>
            
            <div class="">
              <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>