<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Vivace</title>
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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contact.php">Contact</a>
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
    <h1 class="display-4">Contact VIVACE</h1>
    <p class="lead">We'd love to hear from you. Send us a message!</p>
  </div>
</div>

  <!-- CONTACT CONTENT -->
  <div class="container py-5 contact-page">
    <div class="row">
      <div class="col-lg-8">
        <div class="contact-form-section">
          <h3 class="contact-section-title">Send us a Message</h3>
          <form id="contact-form" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
                <div class="invalid-feedback"></div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
                <div class="invalid-feedback"></div>
              </div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
              <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" required>
              <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
              <div class="invalid-feedback"></div>
            </div>
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-paper-plane"></i> Send Message
            </button>
          </form>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="contact-info-section">
          <h3 class="contact-section-title">Contact Information</h3>
          <div class="contact-info-item">
            <i class="fas fa-map-marker-alt contact-icon"></i>
            <div class="contact-details">
              <strong>Address:</strong><br>
              123 Business Street<br>
              City, State 12345
            </div>
          </div>
          <div class="contact-info-item">
            <i class="fas fa-phone contact-icon"></i>
            <div class="contact-details">
              <strong>Phone:</strong><br>
              (555) 123-4567
            </div>
          </div>
          <div class="contact-info-item">
            <i class="fas fa-envelope contact-icon"></i>
            <div class="contact-details">
              <strong>Email:</strong><br>
              info@eshop.com
            </div>
          </div>
          <div class="contact-info-item">
            <i class="fas fa-clock contact-icon"></i>
            <div class="contact-details">
              <strong>Business Hours:</strong><br>
              Mon-Fri: 9AM-6PM<br>
              Sat: 10AM-4PM<br>
              Sun: Closed
            </div>
          </div>
        </div>

        <div class="follow-us-section">
          <h3 class="contact-section-title">Follow Us</h3>
          <div class="social-buttons">
            <a href="#" class="btn btn-outline-primary me-2 mb-2">
              <i class="fab fa-facebook"></i> Facebook
            </a>
            <a href="#" class="btn btn-outline-info me-2 mb-2">
              <i class="fab fa-twitter"></i> Twitter
            </a>
            <a href="#" class="btn btn-outline-danger me-2 mb-2">
              <i class="fab fa-instagram"></i> Instagram
            </a>
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
