<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Shop - Home</title>
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
            <button class="nav-link btn btn-link text-white" id="loginBtn">
              <i class="fas fa-sign-in-alt">Login</i>
            </button>
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
      <h1 class="display-4">Welcome to E-Shop</h1>
      <p class="lead">Discover premium products for your business and lifestyle</p>
      <a href="products.php" class="btn btn-primary btn-lg mt-3">
        <i class="fas fa-shopping-bag"></i> Shop Now
      </a>
    </div>
  </header>

  <!-- FEATURED PRODUCTS -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4" id="featured-products">
        <!-- Products will be loaded here -->
        <?php 
          include "misc/cards_handler.php";
          featuredProducts();
        ?>
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4 text-center">
          <div class="card h-100 border-0">
            <div class="card-body">
              <i class="fas fa-shipping-fast fa-3x text-primary mb-3"></i>
              <h5 class="card-title">Free Shipping</h5>
              <p class="card-text">Free shipping on orders over $50</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="card h-100 border-0">
            <div class="card-body">
              <i class="fas fa-undo fa-3x text-primary mb-3"></i>
              <h5 class="card-title">Easy Returns</h5>
              <p class="card-text">30-day return policy</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="card h-100 border-0">
            <div class="card-body">
              <i class="fas fa-headset fa-3x text-primary mb-3"></i>
              <h5 class="card-title">24/7 Support</h5>
              <p class="card-text">Customer support anytime</p>
            </div>
          </div>
        </div>
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

  <!-- Login Modal -->
  <!-- <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="loginForm" novalidate>
            <div class="mb-3">
              <label for="loginEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="loginEmail" name="loginEmail" required>
              <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
              <label for="loginPassword" class="form-label">Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="loginPassword" name="loginPassword" required>
                <button class="btn btn-outline-secondary" type="button" id="toggleLoginPassword">
                  <i class="fas fa-eye" id="loginPasswordIcon"></i>
                </button>
              </div>
              <div class="invalid-feedback"></div>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-sign-in-alt"></i> Login
              </button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <p class="mb-0">No account yet? <a href="signup.php" class="text-primary" data-bs-dismiss="modal">Sign up here</a></p>
        </div>
      </div>
    </div>
  </div> -->
  <!-- jQuery & Validation (local) -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>

  <!-- Your custom modal script -->
  <script src="modals.js"></script>

</body>
</html>