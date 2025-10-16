<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VIVACE - Bootstrap</title>
  <link href="./styles.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <!-- Your custom styles -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <!-- NAVBAR -->
    <?php
      include "misc/readypage.php";

      navbar();
      ?>
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <i class="fas fa-store"></i> E-Shop
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">
              <i class="fas fa-shopping-cart">Cart</i>
              <span class="badge bg-primary" id="cart-count">0</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->

  <!-- HERO -->
  <header class="text-center text-white py-5 bg-dark" style="background:url('https://picsum.photos/1200/400?business') center/cover no-repeat;">
    <div class="container">
      <h1 class="display-4">Welcome to VIVACE</h1>
      <p class="lead">Discover premium instruments for your business and lifestyle</p>
      <a href="products.html" class="btn btn-primary btn-lg mt-3">
        <i class="fas fa-shopping-bag"></i> Shop Now
      </a>
    </div>
  </header>

  <!-- PRODUCTS -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Featured Instruments</h2>
      <div class="row g-4" id="featured-products">
        <!-- Products will be loaded here -->
      </div>
    </div>
  </section>

  <!-- FOOTER AND MODALS -->
   <?php

      footer();
      modals();
      ?>
  <!-- <footer class="bg-dark text-white text-center py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5>E-Shop</h5>
          <p>Your trusted online shopping destination</p>
        </div>
        <div class="col-md-6">
          <h5>Follow Us</h5>
          <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
          <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <hr>
      <p class="mb-0">&copy; 2025 E-Shop | Designed for demo purposes</p>
    </div>
  </footer> -->
  
  <!-- jQuery & Validation (local) -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>

  <!-- Your custom modal script -->
  <script src="./js/modals.js"></script>
</body>
</html>