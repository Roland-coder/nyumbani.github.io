<?php 
include('header.php');
?>

  
   

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" id="home-section">


      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 mt-lg-5 text-center">
            <h1>Buy and sell real estate properties</h1>
            <p class="mb-5"> We provide you with the best houses that suit your prerences from very qualified agents  </p>
            
          </div>
        </div>
      </div>

      <a href="#howitworks-section" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
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
              <p>Search through our website to find your preferences.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="custom-icon flaticon-coin text-primary"></span>
              <h3 class="text-dark">Buy Property.</h3>
              <p>Make payments to get full access to property.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="custom-icon flaticon-home text-primary"></span>
              <h3 class="text-dark">Make Investment.</h3>
              <p>Enjoy your investment .</p>
            </div>
          </div>
        </div>
      </div>  
    </div>

    <div class="site-section" id="properties-section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-7 text-left">
            <h2 class="section-title mb-3">Properties</h2>
          </div>
          <div class="col-md-5 text-left text-md-right">
            <div class="custom-nav1">
              <a href="#" class="custom-prev1">Previous</a><span class="mx-3">/</span><a href="#" class="custom-next1">Next</a>
            </div>
          </div>
        </div>

        <div class="owl-carousel nonloop-block-13 mb-5">

          <div class="property">
            <?php if (isset($_SESSION['username'])):  ?>
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
            <?php endif ?> 
            <?php if (!isset($_SESSION['username'])):  ?>
                <a href="login.php">
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
        <?php endif ?>
            

          <div class="property">
            <?php if (isset($_SESSION['username'])):  ?>
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
            <?php endif ?> 
            <?php if (!isset($_SESSION['username'])):  ?>
                <a href="login.php">
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
            <?php endif ?>


          <div class="property">
            <?php if (isset($_SESSION['username'])):  ?>
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
            <?php endif ?> 
            <?php if (!isset($_SESSION['username'])):  ?>
                <a href="login.php">
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
            <?php endif ?> 
            

          <div class="property">
            <?php if (isset($_SESSION['username'])):  ?>
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
            <?php endif ?> 
            <?php if (!isset($_SESSION['username'])):  ?>
                <a href="login.php">
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
            <?php endif ?> 





        </div>
        <?php if (isset($_SESSION['username'])):  ?>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <a href="listings.php" class="btn btn-primary btn-block">View All Property Listings</a>
          </div>
        </div>
        <?php endif ?> 
        <?php if (!isset($_SESSION['username'])):  ?>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <a href="login.php" class="btn btn-primary btn-block">View All Property Listings</a>
          </div>
        </div>
        <?php endif ?> 
   
      </div>
    </div>
    

    
    <section class="site-section border-bottom" id="agents-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left">
            <h2 class="section-title mb-3">Agents</h2>
            <p class="lead">Our agents are very qualified personnels who have above five years of field experience .</p>
          </div>
        </div>
        <div class="row">



      




          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_5.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3 class="mb-2">Kaiara Spencer</h3>
                <span class="position">+250799576321</span>
              </div>
            </div>
          </div>
          <?php 
            $db = mysqli_connect('localhost', 'root', '', 'registration');
            $query = "SELECT * FROM `addagent`";
            if ($result = mysqli_query($db, $query)) {
              // Fetch one and one row
              while ($row = mysqli_fetch_row($result)) {
                $name = $row[1];
                $contact = $row[2];
                $image = $row[3];
                ?>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="imagesuploadedf/<?php echo $image ?>" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3 class="mb-2"><?php echo $name ?></h3>
                <span class="position"><?php echo $contact ?></span>
              </div>
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



          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_6.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3 class="mb-2">Dave Simpson</h3>
                <span class="position">+250799764671</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_7.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3 class="mb-2">Ben Thompson</h3>
                <span class="position">+250799345321</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_8.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3 class="mb-2">Kyla Stewart</h3>
                <span class="position">+250735765321</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_5.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3 class="mb-2">Kaiara Spencer</h3>
                <span class="position">+250799765123</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_6.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3 class="mb-2">Dave Simpson</h3>
                <span class="position">+250799765321</span>
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </section>


    <section class="site-section" id="about-section">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-6">

            <div class="owl-carousel slide-one-item-alt">
              <img src="images/property_1.jpg" alt="Image" class="img-fluid">
              <img src="images/property_2.jpg" alt="Image" class="img-fluid">
              <img src="images/property_3.jpg" alt="Image" class="img-fluid">
              <img src="images/property_4.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="custom-direction">
              <!-- <a href="#" class="custom-prev">Prev</a><a href="#" class="custom-next">Next</a> -->
            </div>

          </div>
          <div class="col-lg-5 ml-auto">
            
            <h2 class="section-title mb-3">We Are The Best RealEstate Company</h2>
                <p class="lead">We bring your prerences to you in just one click.</p>
                <p>We understand the struggle you go through to get your dream so our agents have put a lot of variety for you so no need to worry. Our agents are:</p>

                <ul class="list-unstyled ul-check success">
                  <li>Honest</li>
                  <li>Resilient</li>
                  <li>Pay attention to detail </li>
                  <li>Engaging Personnel </li>
                  <li>Have connections all over the city</li>
                </ul>

                <!-- <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p> -->
            
          </div>
        </div>
      </div>
    </section>

    

    <!-- <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Services</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-house"></span></div>
              <div>
                <h3>Search Property</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-coin"></span></div>
              <div>
                <h3>Buy Property</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-home"></span></div>
              <div>
                <h3>Invest a Home</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-flat"></span></div>
              <div>
                <h3>Post Properties</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-location"></span></div>
              <div>
                <h3>Property Locator</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-mobile-phone"></span></div>
              <div>
                <h3>Stated Apps</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> -->

    <section class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">People Says...</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              
              <blockquote class="mb-5">
                <p>&ldquo;“Kyla was a pleasure to have as my real estate agent. Kyla never left any questions unanswered and always responded promptly. I would highly recommend her over any conventional 6% brokers as you will save thousands as well as receive the best service any agent can provide. I know from experience as we were able to sell our home in one day using Kyla.”.&rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>John Smith</p>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;I would definitely recommend Simpson and the Nyumbani team! This was not my first selling of a home but was the first time I really felt the agent knew her business. She came to initial meeting with very helpful information and explained her process in a way that definitely showed her expertise in real estate Super responsive as if you are her only client! Friendly and professional. Thanks for helping me sell my house!.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Christine Aguilar</p>
              </figure>
              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lynn – Jay and I can’t thank you enough for all the hard work, dedication and the time you spent in selling our duplex, so quickly. You made it very easy for Jay and I to sell the house, you did all the work for us, and we very much appreciate it. We most definitely will suggest you to anyone we know who is selling or wanting to purchase a home, you are an expert in your field and we were lucky to have you.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Robert Spears</p>
              </figure>

              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;You have done a great job and stood up to your words – selling in one month and even without my presence. If anyone of my friends in Milwaukee ever needs a realtor, I am going to recommend your name. I liked your professional work, immediate responses and knowledge of the local real estate. Five cheers to you!.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Bruce Rogers</p>
              </figure>

            </div>
          </div>

        </div>
    </section>

    
    

   


    <section class="site-section bg-light bg-image" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <!-- <h3 class="section-sub-title">Get</h3> -->
            <h2 class="section-title mb-3">Contct Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="" method="post" class="p-5 bg-white">
            <!-- <textarea name="message"></textarea> -->
            <!-- https://formsubmit.co/n.ngwa@alustudent.com -->
              
              <h2 class="h4 text-black mb-5">Contact Form</h2> 
              
              
              <?php
                  $connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
                  $db = mysqli_select_db( $connection, "contact"); // Selecting Database from Server
                  if(isset($_POST['contactus'])){ // Fetching variables of the form which travels in URL
                  $fname = $_POST['fname'];
                  $lname = $_POST['lname'];
                  $email = $_POST['email'];
                  $subject = $_POST['subject'];
                  $message = $_POST['message'];

                  //Insert Query of SQL
                  $query = "insert into responses(fname, lname, email, subject, message) values ('$fname', '$lname', '$email', '$subject', '$message')";
                  if($connection->Query($query) === TRUE){
                      echo "<br/><br/><span>Thanks For Contacting Us We Will Get Back To You soon...!!</span>";
                  //     $_SESSION['fname'] = $fname;
                  //     $_SESSION['success'] = "Data Inserted successfully...!!";
                  // // header('location: index.php');
                  //     header('location: main.php');
                  //     echo "<br/><br/><span>Data Inserted successfully...!!</span>";
                  }

                  else{
                    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
                  }
                  }
                  mysqli_close($connection); // Closing Connection with Server
              ?>

              
              <!-- // $fname = "";
              // $lname = "";
              // $email = "";
              // $subject = "";
              // $message = "";
              // $errors = array();
              // session_start();
              // if (isset($_POST['contactus'])) {
              //     if ( empty(($_POST['fname'])) || empty(($_POST['lname'])) || empty(($_POST['lname'])) || empty(($_POST['email'])) || empty(($_POST['subject'])) || empty(($_POST['message'])) ) {
              //         echo "All fields are required";
                  // } else {
              //       # code...
                    // $db = mysqli_connect('localhost', 'root', '', 'contact');
                    // $conn = mysqli_connect('localhost', 'root', '', 'contact');
                    // $conn = new mysqli('localhost', 'root', '')
            
                    // $conn->select_db('contact')
                                      
              //       $fname = mysqli_real_escape_string($db, $_POST['fname']);
              //       $lname = mysqli_real_escape_string($db, $_POST['lname']);
              //       $email = mysqli_real_escape_string($db, $_POST['email']);
              //       $subject = mysqli_real_escape_string($db, $_POST['subject']);
              //       $message = mysqli_real_escape_string($db, $_POST['message']);

                    
              //       $query = "INSERT INTO responses (fname, fname, email, subject, message) 
              //       VALUES('$fname', '$lname', '$email', '$subject', '$message') ";
              //       mysqli_query($db, $query);
              //       $_SESSION['fname'] = $fname;
              //       $_SESSION['success'] = "Thanks for contacting us";
                    

                  //   $fname = $_POST['fname']
                  //   $lname = $_POST['lname']
                  //   $email = $_POST['email']
                  //   $subject = $_POST['subject']
                  //   $message = $_POST['message']
                  //   $conn->query("INSERT INTO responses (fname, lname, email, subject, message ) values ('$fname', '$lname', '$email', '$subject', '$message') ");
                  //   echo "Thanks for contacting us";
                  // }


              // } -->

              

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname" >First Name</label>
                  <input type="text" name="fname" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname" >Last Name</label>
                  <input type="text" name="lname" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email" >Email</label> 
                  <input type="email" name="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject" >Subject</label> 
                  <input type="subject" name="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message" >Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" name= "contactus" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Kigali, Kacyru, Rwanda</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+250789286589</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">n.ngwa@alustudent.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </section>

    
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
                  <!-- <li><a href="main.php#service-section">Services</a></li> -->
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
  <script>
    $(window).load(function () {
    $("#signup").click(function(){
       $('.popup').show();
    });
    $('.hover_bkgr_fricc').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
});
  </script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>

<!--  -->