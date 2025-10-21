<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Vivace</title>
  <link href="./styles.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="./styles.css" rel="stylesheet">
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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about.php">About</a>
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

  <!-- PAGE HEADER -->
  <div class="bg-secondary text-white py-5">
    <div class="container">
      <h1 class="display-4">About VIVACE</h1>
      <p class="lead">Your trusted online shopping destination since 2020</p>
    </div>
  </div>

  <!-- ABOUT CONTENT -->
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-6" id="about">
        <h2>Our Story</h2>
        <p class="lead" id="about-subh">Vivace was founded with a simple mission: to provide high-quality products at affordable prices with exceptional customer service.</p>
        <p >Since our launch in 2020, we've grown from a small startup to one of the leading online retailers, serving thousands of satisfied customers worldwide.</p>
        <p>We believe in the power of technology to make shopping more convenient, accessible, and enjoyable for everyone.</p>
      </div>
      <div class="col-lg-6">
        <img src="https://picsum.photos/500/300?office" class="img-fluid rounded" id="aboutpic" alt="Our Office">
      </div>
    </div>

    <hr class="my-5">

    <div class="row">
      <div class="col-lg-4 text-center mb-4">
        <div class="card h-100">
          <div class="card-body">
            <i class="fas fa-users fa-3x text-primary mb-3" id="card-icon"></i>
            <h5 class="card-title">Our Team</h5>
            <p class="card-text">A dedicated team of professionals committed to delivering excellence in every aspect of our business.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 text-center mb-4">
        <div class="card h-100">
          <div class="card-body">
            <i class="fas fa-award fa-3x text-primary mb-3" id="card-icon"></i>
            <h5 class="card-title">Quality Promise</h5>
            <p class="card-text">We carefully curate every product to ensure it meets our high standards for quality and value.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 text-center mb-4">
        <div class="card h-100">
          <div class="card-body">
            <i class="fas fa-heart fa-3x text-primary mb-3" id="card-icon"></i>
            <h5 class="card-title">Customer First</h5>
            <p class="card-text">Your satisfaction is our priority. We're here to help you find exactly what you're looking for.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

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
  <script src="./js/loginsign.js"></script>
</body>
</html>
