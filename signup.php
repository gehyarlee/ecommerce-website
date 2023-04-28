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
    <title>Sign Up</title>
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
    <!-- Login -->
    <div class="container">
      <div class="login-form">

        <?php
          if (isset($_GET['error'])) {
            print '<p style="color:red;background:#eee;text-align:center;">'.$_GET['error'].'</p>';
              }else if (isset($_GET['success'])) {
                print '<p style="color:blue;background:#eee;text-align:center;">'.$_GET['success'].'</p>';
                  }
         ?>
        <form action="user_signup.php" method="post">
          <h1>Sign Up</h1>
          <p>
            Please fill in this form to create an account. or
            <a href="login.php">Login</a>
          </p>

          <label for="email">Email</label>
          <input type="text" placeholder="Enter Email" name="email" required />

          <label for="psw">Password</label>
          <input
            type="password"
            placeholder="Enter Password"
            name="psw"
            required
          />

          <label for="repeat_passwoed">Repeat Password</label>
          <input
            type="password"
            placeholder="Repeat Password"
            name="repeat_passwoed"
            required
          />

          <label>
            <input
              type="checkbox"
              checked="checked"
              name="remember"
              style="margin-bottom: 15px"
            />
            Remember me
          </label>

          <p>
            By creating an account you agree to our
            <a href="./terms.php">Terms & Privacy</a>.
          </p>

          <div class="buttons">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </form>
      </div>
    </div>

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

    <!-- Custom Script -->
    <script src="./js/index.js"></script>
  </body>
</html>
