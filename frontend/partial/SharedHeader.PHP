<?php  session_start()?>
<div class="container-fluid">
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/demoshop/frontend/index.PHP" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32">
        <use xlink:href="/demoshop/frontend/index.PHP"></use>
      </svg>
      <span class="fs-4">Demo Shop</span>
    </a>

    <ul class="nav nav-pills">
      <?php if (isset($_SESSION['userid'])) 
      { ?>
      <li class="nav-item justify-content-center d-flex align-items-center">Hello <?php echo  $_SESSION['username'];?></li>
      <li class="nav-item"><a href="/demoshop/frontend/pages/Cart.PHP" class="nav-link"><i class="fa-solid fa-cart-shopping"></i></a></li>
      <li class="nav-item"><a href="/demoshop/frontend/pages/logoutProcess.PHP" class="nav-link">Log out</a></li>
      <?php
      } else{?>
      <li class="nav-item"><a href="/demoshop/frontend/pages/Login.PHP" class="nav-link active"
          aria-current="page">Login</a></li>
      <li class="nav-item"><a href="/demoshop/frontend/pages/Register.PHP" class="nav-link">Register</a></li>
      <?php
      } ?>
      <li class="nav-item"><a href="#" class="nav-link">IDK</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Register</a></li>
      <li class="nav-item"><a href="#" class="nav-link">About</a></li>
    </ul>
  </header>
</div>