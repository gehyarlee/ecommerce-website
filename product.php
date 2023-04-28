<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Box icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Boy’s T-Shirt</title>
    
  </head>

  <body>
    <!-- Navigation -->
    <div class="top-nav">
      <div class="container d-flex">
        <p>Order Online Or Call Us: example@gamil.com Or +250787962295</p>
        <ul class="d-flex">
          <li><a href="./about.php">About Us</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="./contactUs.php">Contact</a></li>
        </ul>
      </div>
    </div>
    <div class="navigation">
      <div class="nav-center container d-flex">
        <a href="index.php" class="logo"><h1>ECOMMERCE</h1></a>

        <ul class="nav-list d-flex">
          <li class="nav-item">
            <a href="/" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="product.php" style="color: var(--green);" class="nav-link">Shop</a>
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

    <!-- All Products -->
    <section class="section all-products" id="products">
      <div class="top container">
        <h1>All Products</h1>
        
        
          <select   class="priceInput">
            <option disabled selected value="Sort price">Sort By Price</option>
            <option value="">All</option>
            <option value="$100 USD">$100 USD</option>
            <option value="$150 USD">$150 USD</option>
            <option value="$200 USD">$200 USD</option>
    
          </select>
          <span><i class="bx bx-chevron-down"></i></span>
        
      </div>
      <div class="product-center container">
 
    </section>
    <section class="pagination">
      <div class="container">
        <span>1</span> <span>2</span> <span>3</span> <span>4</span>
        <span><i class="bx bx-right-arrow-alt"></i></span>
      </div>
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


    <!-- Chat gpt -->
    <!-- <label for="price-filter">Filter by Price:</label>
<select id="price-filter">
  <option value="all">All</option>
  <option value="10">Less than $10</option>
  <option value="20">Less than $20</option>
  <option value="30">Less than $30</option>
</select>

<ul id="product-list">
  <li data-price="5">Product 1 - $5</li>
  <li data-price="15">Product 2 - $15</li>
  <li data-price="25">Product 3 - $25</li>
</ul> -->
    <!-- Custom Script -->
    <script src="./js/index.js">
      
    </script>
  </body>
</html>
