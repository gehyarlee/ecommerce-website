<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <script src="https://cdn.emailjs.com/sdk/2.3.2/email.min.js"></script>

    <script type="text/javascript">
      (function(){
        emailjs.init("vSoIWsx-sRaDZVsPx");
      })();
    </script> 

    <title>ecommerce Website</title>
  </head>
  <body>
    <!-- Header -->
    <header class="header" id="header">
      <!-- Top Nav -->
      <div class="top-nav">
        <div class="container d-flex">
          <p>Order Online Or Call Us: example@gamil.com Or +250787962295</p>
          <ul class="d-flex">
            <li><a href="#">About Us</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="navigation">
        <div class="nav-center container d-flex">
        <a href="/" class="logo"><h1>ECOMMERCE</h1></a>

          <ul class="nav-list d-flex">
            <li class="nav-item">
              <a href="/" style="color: var(--green);" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="product.php" class="nav-link">Shop</a>
            </li>
            <li class="nav-item">
            <a href="./terms.php" class="nav-link">Terms</a>
            </li>
            <li class="nav-item">
              <a href="./about.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="./contactUs.php" class="nav-link">Contact</a>
            </li>

          <?php
            include('header.php');
          ?>

            <li class="icons d-flex">
            <a href="login.php" class="icon">
              <i class="bx bx-user"></i>
            </a>
            <div class="icon">
              <i class="bx bx-search"></i>
            </div>
            <div class="icon">
              <i class="bx bx-heart"></i>
              <span class="d-flex">0</span>
            </div>
            <a href="cart.php" class="icon">
              <i class="bx bx-cart"></i>
              <span class="d-flex">0</span>
            </a>
          </li>
          </ul>

          <div class="icons d-flex">
            <a href="login.php" class="icon">
              <i class="bx bx-user"></i>
            </a>
            <div class="icon">
              <i class="bx bx-search"></i>
            </div>
            <div class="icon">
              <i class="bx bx-heart"></i>
              <span class="d-flex">0</span>
            </div>
            <a href="cart.php" class="icon">
              <i class="bx bx-cart"></i>
              <span class="d-flex">0</span>
            </a>
          </div>

          <div class="hamburger">
            <i class="bx bx-menu-alt-left"></i>
          </div>
        </div>
      </div>

    <div class="hero">
      <div class="glide" id="glide_1">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <div class="center">
                <div class="left">
                  <span class="">New Inspiration 2023</span>
                  <h1 class="">NEW COLLECTION!</h1>
                  <p>Trending from men's and women's  style collection</p>
                  <a href="./product.php" class="hero-btn"><button class="shopNow-btn">SHOP NOW</button></a>
                </div>
                <div class="right">
                    <img class="img1" src="./images/hero-1.png" alt="">
                </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="center">
                <div class="left">
                  <span>New Inspiration 2023</span>
                  <h1>THE PERFECT MATCH!</h1>
                  <p>Trending from men's and women's  style collection</p>
                  <a href="./product.php" class="hero-btn"><button class="shopNow-btn">SHOP NOW</button></a>
                </div>
                <div class="right">
                  <img class="img2" src="./images/hero-2.png" alt="">
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </header>

    
    <!-- New Arrivals -->
    <section class="section new-arrival">
      <div class="title">
        <h1>NEW ARRIVALS</h1>
        <p>All the latest picked from designer of our store</p>
      </div>

      <div class="product-center">
       
      
      </div>
    </section>


    <!-- Promo -->

  




    <!-- Featured -->
  
    <section class="section new-arrival">
      <div class="title">
        <h1>Featured</h1>
        <p>All the latest picked from designer of our store</p>
      </div>

      <div class="product-center">
      <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/product-7.jpg" alt="" />
            </a>
            <span class="discount">50%</span>
          </div>
          <div class="product-info">
            <span>MEN'S CLOTHES</span>
            <a href="">Quis Nostrud Exercitation</a>
            <h4>$55</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/product-4.jpg" alt="" />
            </a>
          </div>

          <div class="product-info">
            <span>MEN'S CLOTHES</span>
            <a href="">Sonata White Men’s Shirt</a>
            <h4>$40</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/product-1.jpg" alt="" />
            </a>
            <span class="discount">40%</span>
          </div>
          <div class="product-info">
            <span>MEN'S CLOTHES</span>
            <a href="">Concepts Solid Pink Men’s Polo</a>
            <h4>$60</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/product-6.jpg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>MEN'S CLOTHES</span>
            <a href="">Edor do eiusmod tempor</a>
            <h4>$50</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
      </div>

    </section>

    <!-- Contact -->
    <section class="section contact">
        
          <h2>EXCELLENT SUPPORT</h2>
          <p>We love our customers and they can reach us any time
          of day we will be at your service 24/7</p>
          <a href="./contactUs.php" ><button class="ContactButton" >Contact</button></a>
        
        <!-- <div class="col">
          <form action="">
            
              <input type="email" name="email" placeholder="Email Address">
            <a href="">Send</a>
            </div>
          </form>
        </div> -->
      
    </section>

    <!-- Footer -->
    <footer class="footer">
      <div class="row">
        <div class="col d-flex">
          <h4>INFORMATION</h4>
          <a href="./about.php">About us</a>
          <a href="./contactUs.php">Contact Us</a>
          <a href="./terms.php">Term & Conditions</a>
          <a href="./productDetails.php">Shipping Guide</a>
        </div>
        <div class="col d-flex">
          <h4>USEFUL LINK</h4>
          <a href="">Online Store</a>
          <a href="">Customer Services</a>
          <a href="">Promotion</a>
          <a href="">Top Brands</a>
        </div>
        <div class="col d-flex">
          <a href="https://www.facebook.com/profile.php?id=100071869614042"><span><i class="bx bxl-facebook-square"></i></span></a>
          <a href="https://www.instagram.com/leegehyarlee/"><span><i class="bx bxl-instagram-alt"></i></span></a>
          <a href="https://github.com/gehyarlee"><span><i class="bx bxl-github"></i></span></a>
          <a href="https://twitter.com/LeeGehyarlee"><span><i class="bx bxl-twitter"></i></span></a>
          <a href="https://www.pinterest.co.uk/gehyarlee1999/"><span><i class="bx bxl-pinterest"></i></span></a>
        </div>
      </div>
    </footer>


  <!-- PopUp -->
  <div class="popup hide-popup">
    <div class="popup-content">
      <div class="popup-close">
        <i class='bx bx-x'></i>
      </div>
      <div class="popup-left">
        <div class="popup-img-container">
          <img class="popup-img" src="./images/popup.jpg" alt="popup">
        </div>
      </div>
      <div class="popup-right">
        <div class="right-content">
          <h1>Get Discount <span>50%</span> Off</h1>
          <p>Sign up to our newsletter and save 30% for you next purchase. No spam, we promise!
          </p>
          <form  name="popupSubscribed" id="popupSubscribed">
            <input type="email" id="newsEmail" name="email" placeholder="Enter your email..." class="popup-form">
            <button class="SubscribeButton" type="submit">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </div>

 

  </body>
  <script src="./js/newsEmail.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
</html>
