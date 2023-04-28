<?php
//session_start();
if (isset($_SESSION['id'])) {
?>
  <div class="icons d-flex">
    <?php if(isset($_SESSION['email'])){print $_SESSION['email'].'<a href="logout.php" class="icon">
            <i class="bx bx-key"></i>
          </a>';}?><span class="d-flex"></span>
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

<?php }else {?>
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
<?php } ?>