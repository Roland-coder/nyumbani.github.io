<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nyumbani website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Playfair+Display:400,700,900 " rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">


      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="index.php" class="mb-0"><img src="Nyumabani logo2.png" alt="NYUMBANI"></a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php#home-section" class="nav-link">Home</a></li>
                <li><a href="index.php#properties-section" class="nav-link">Properties</a></li>
                
                <li><a href="index.php#about-section" class="nav-link">About</a></li>
                <!-- <li><a href="#news-section" class="nav-link">News</a></li> -->
                <li><a href="index.php#contact-section" class="nav-link">Contact</a></li>
                <?php if (!isset($_SESSION['username'])): ?>
                <li><a href="login.php">Sign In</a></li>
                <?php endif ?>
                <?php if (isset($_SESSION['username'])): ?>
                <li><a href="index.php#agents-section" class="nav-link">Agents</a></li>
                <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" data-toggle="dropdown" ><?php echo $_SESSION['username'];?></a>
                               <div class="dropdown-menu" style= 'background: gray;'>
                               <a class="dropdown-item" href="profile.php">View Profile</a>
                               <a class="dropdown-item" href="logout.inc.php">Logout</a>
                           </div>
                       </li>

                <?php endif ?>

                
                    
                
                  <!-- notification message -->

                <!-- logged in user information -->


	
	
              </div>

      
    
         
                <!-- <li><a href="login.php">Sign In</a></li> -->
              </ul>
            </nav>
          </div>
          


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

     
      
    </header>