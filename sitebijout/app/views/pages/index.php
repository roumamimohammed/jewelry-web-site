<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <!-- responsive style -->
   <link href="<?php echo URLROOT; ?>/css/responsive.css" rel="stylesheet" />
  <!-- icons -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">


  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/bootstrap.css" />
  <title><?php echo SITENAME; ?></title>
</head>

<body class="sub_page">
<div class="hero_area">
  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="<?php echo URLROOT; ?>">
          <img src="<?php echo URLROOT; ?>/images/dim.png" alt="">
          <span>
            <?php echo SITENAME; ?>
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link " style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/pages/about"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/articles/index"> Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/pages/contact"> Contact</a>
              </li>
            
          <?php if(isset($_SESSION['user_id'])) : ?>
            <?php if($_SESSION['user_id'] == 7) : ?>
               <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/articles/dashbord"> Dashbord</a>
              </li> 
              <?php endif; ?>
            <li class="nav-item">
            <a href="<?php echo URLROOT; ?>/users/logout">  <svg    class="d-none d-lg-block" style="margin: 27%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" ><path fill="none" d="M0 0h24v24H0z"/><path d="M5 11h8v2H5v3l-5-4 5-4v3zm-1 7h2.708a8 8 0 1 0 0-12H4A9.985 9.985 0 0 1 12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.985 9.985 0 0 1-8-4z" fill="rgba(255,255,255,1)"/></svg>     </a>  
            <a href="<?php echo URLROOT; ?>/users/logout"> <svg   class="d-lg-none" style="margin:40%"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path fill="none" d="M0 0h24v24H0z"/><path d="M5 11h8v2H5v3l-5-4 5-4v3zm-1 7h2.708a8 8 0 1 0 0-12H4A9.985 9.985 0 0 1 12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.985 9.985 0 0 1-8-4z"/></svg> </a>
            </li>
            
           <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/users/login"> login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/users/register"> register</a>
              </li>
            <?php endif; ?>
            </ul>

          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->
</div>

   <!-- slider section -->
   <section class=" slider_section position-relative">
     <div class="design-box">
       <img src="<?php echo URLROOT; ?>/images/design-1.png" alt="">
     </div>
     <div class="slider_number-container d-none d-md-block">
       <div class="number-box">
         <span>
           01
         </span>
         <hr>
         <span class="jwel">
           J <br>
           e <br>
           w <br>
           e <br>
           l <br>
           l <br>
           e <br>
           r <br>
           y
         </span>
         <hr>
         <span>
           02
         </span>
       </div>
     </div>
     <div class="container">
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
         </ol>
         <div class="carousel-inner">
           <div class="carousel-item active">
             <div class="row">
               <div class="col-md-6">
                 <div class="detail_box">
                   <h2>
                     <span> New Collection</span>
                     <hr>
                   </h2>
                   <h1>
                     Jewellery
                   </h1>
                   <p>
                     Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                     aptent taciti sociosqu ad litora torquent per conubia nostra
                   </p>
                   <div>
                     <a href="">Shop Now</a>
                   </div>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="img-box">
                   <img src="<?php echo URLROOT; ?>/images/slider-img.png" alt="">
                 </div>
               </div>
             </div>
           </div>
           <div class="carousel-item ">
             <div class="row">
               <div class="col-md-6">
                 <div class="detail_box">
                   <h2>
                     <span> New Collection</span>
                     <hr>
                   </h2>
                   <h1>
                     Jewellery
                   </h1>
                   <p>
                     Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                     aptent taciti sociosqu ad litora torquent per conubia nostra
                   </p>
                   <div>
                     <a href="">Shop Now</a>
                   </div>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="img-box">
                   <img src="<?php echo URLROOT; ?>/images/slider-img.png" alt="">
                 </div>
               </div>
             </div>
           </div>
           <div class="carousel-item ">
             <div class="row">
               <div class="col-md-6">
                 <div class="detail_box">
                   <h2>
                     <span> New Collection</span>
                     <hr>
                   </h2>
                   <h1>
                     Jewellery
                   </h1>
                   <p>
                     Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                     aptent taciti sociosqu ad litora torquent per conubia nostra
                   </p>
                   <div>
                     <a href="">Shop Now</a>
                   </div>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="img-box">
                   <img src="<?php echo URLROOT; ?>/images/slider-img.png" alt="">
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

   </section>
   <!-- end slider section -->
   <!-- item section -->

   <div class="item_section layout_padding2">
     <div class="container">
       <div class="item_container">
         <div class="box">
           <div class="price">
             <h6>
               Best PRICE
             </h6>
           </div>
           <div class="img-box">
             <img src="<?php echo URLROOT; ?>/images/i-1.png" alt="">
           </div>
           <div class="name">
             <h5>
               Bracelet
             </h5>
           </div>
         </div>
         <div class="box">
           <div class="price">
             <h6>
               Best PRICE
             </h6>
           </div>
           <div class="img-box">
             <img src="<?php echo URLROOT; ?>/images/i-2.png" alt="">
           </div>
           <div class="name">
             <h5>
               Ring
             </h5>
           </div>
         </div>
         <div class="box">
           <div class="price">
             <h6>
               Best PRICE
             </h6>
           </div>
           <div class="img-box">
             <img src="<?php echo URLROOT; ?>/images/i-3.png" alt="">
           </div>
           <div class="name">
             <h5>
               Earings
             </h5>
           </div>
         </div>
       </div>
     </div>
   </div>

   <!-- end item section -->

   <!-- about section -->

   <section class="about_section layout_padding2-top layout_padding-bottom">
     <div class="design-box">
       <img src="<?php echo URLROOT; ?>/images/design-2.png" alt="">
     </div>
     <div class="container">
       <div class="row">
         <div class="col-md-6">
           <div class="detail-box">
             <div class="heading_container">
               <h2>
                 About Jewellery Shop
               </h2>
             </div>
             <p>
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
               dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum dolor sit amet, consectetur
               adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
               veniam, quis nostrud
             </p>
             <div>
               <a href="">
                 Read More
               </a>
             </div>
           </div>
         </div>
         <div class="col-md-6">
           <div class="img-box">
             <img src="<?php echo URLROOT; ?>/images/about-img.png" alt="">
           </div>
         </div>
       </div>
     </div>
   </section>

   <!-- end about section -->

   <!-- price section -->

   <section class="price_section layout_padding">
     <div class="container">
       <div class="heading_container">
         <h2>
           Our Jewellery Price
         </h2>
       </div>
       <div class="price_container">
         <div class="box">
           <div class="name">
             <h6>
               Diamond Ring
             </h6>
           </div>
           <div class="img-box">
             <img src="<?php echo URLROOT; ?>/images/p-1.png" alt="">
           </div>
           <div class="detail-box">
             <h5>
               $<span>1000.00</span>
             </h5>
             <a href="">
               Buy Now
             </a>
           </div>
         </div>
         <div class="box">
           <div class="name">
             <h6>
               Diamond Ring
             </h6>
           </div>
           <div class="img-box">
             <img src="<?php echo URLROOT; ?>/images/i-2.png" alt="">
           </div>
           <div class="detail-box">
             <h5>
               $<span>1000.00</span>
             </h5>
             <a href="">
               Buy Now
             </a>
           </div>
         </div>
         <div class="box">
           <div class="name">
             <h6>
               Diamond Ring
             </h6>
           </div>
           <div class="img-box">
             <img src="<?php echo URLROOT; ?>/images/i-3.png" alt="">
           </div>
           <div class="detail-box">
             <h5>
               $<span>1000.00</span>
             </h5>
             <a href="">
               Buy Now
             </a>
           </div>
         </div>
       </div>
       <div class="d-flex justify-content-center">
         <a href="" class="price_btn">
           See More
         </a>
       </div>
     </div>
   </section>

   <!-- end price section -->

   <!-- ring section -->

   <section class="ring_section layout_padding">
     <div class="design-box">
       <img src="<?php echo URLROOT; ?>/images/design-1.png" alt="">
     </div>
     <div class="container">
       <div class="ring_container layout_padding2">
         <div class="row">
           <div class="col-md-5">
             <div class="detail-box">
               <h4>
                 special
               </h4>
               <h2>
                 Wedding Ring
               </h2>
               <a href="">
                 Buy Now
               </a>
             </div>
           </div>
           <div class="col-md-7">
             <div class="img-box">
               <img src="<?php echo URLROOT; ?>/images/ring-img.jpg" alt="">
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>

   <!-- end ring section -->

   <!-- client section -->

   <section class="client_section">
     <div class="container">
       <div class="heading_container">
         <h2>
           Testimonial
         </h2>
       </div>
       <h4 class="secondary_heading">
         What is says our customer
       </h4>
       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
           <div class="carousel-item active">
             <div class="client_container">
               <div class="client-id">
                 <div class="img-box">
                   <img src="<?php echo URLROOT; ?>/images/client.png" alt="">
                 </div>
                 <div class="name">
                   <h5>
                     Aliqua
                   </h5>
                   <h6>
                     Consectetur adipiscing
                   </h6>
                 </div>
               </div>
               <div class="detail-box">
                 <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
                 </p>
               </div>
             </div>
           </div>
           <div class="carousel-item">
             <div class="client_container">
               <div class="client-id">
                 <div class="img-box">
                   <img src="<?php echo URLROOT; ?>/images/client.png" alt="">
                 </div>
                 <div class="name">
                   <h5>
                     Aliqua
                   </h5>
                   <h6>
                     Consectetur adipiscing
                   </h6>
                 </div>
               </div>
               <div class="detail-box">
                 <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
                 </p>
               </div>
             </div>
           </div>
           <div class="carousel-item">
             <div class="client_container">
               <div class="client-id">
                 <div class="img-box">
                   <img src="<?php echo URLROOT; ?>/images/client.png" alt="">
                 </div>
                 <div class="name">
                   <h5>
                     Aliqua
                   </h5>
                   <h6>
                     Consectetur adipiscing
                   </h6>
                 </div>
               </div>
               <div class="detail-box">
                 <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
                 </p>
               </div>
             </div>
           </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>

     </div>
   </section>

   <!-- end client section -->
 <!-- info section -->
 <section class="info_section ">
    <div class="container">
      <div class="info_container">
        <div class="row">
          <div class="col-md-3 " style=" width: 230px;">
            <div class="info_logo">
              <a href="">
                <img src="<?php echo URLROOT; ?>/images/dim.png" alt="">
                <span>
                <?php echo SITENAME; ?>
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="<?php echo URLROOT; ?>/images/location.png" alt="">
                <span>
                  Address
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="<?php echo URLROOT; ?>/images/phone.png" alt="">
                <span>
                  +01 1234567890
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="<?php echo URLROOT; ?>/images/mail.png" alt="">
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="info_form">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">
              Newsletter
            </h5>
          </div>
          <form action="">
            <div class="email_box">
              <label for="email2">Enter Your Email</label>
              <input type="text" id="email2">
            </div>
            <div>
              <button>
                subscribe
              </button>
            </div>
          </form>
        </div>
        <div class="info_social">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">
              Follow Us
            </h5>
          </div>
          <div class="social_box">
            <a href="">
              <img src="<?php echo URLROOT; ?>/images/fb.png" alt="">
            </a>
            <a href="">
              <img src="<?php echo URLROOT; ?>/images/twitter.png" alt="">
            </a>
            <a href="">
              <img src="<?php echo URLROOT; ?>/images/linkedin.png" alt="">
            </a>
            <a href="">
              <img src="<?php echo URLROOT; ?>/images/insta.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
<section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved
    </p>
  </section>
  
<!-- footer section -->
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

 
