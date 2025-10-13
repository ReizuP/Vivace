<?php

function navbar()
{

$html = <<<HTML
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
  </nav>
HTML;
    echo $html;
}


function footer()
{

$html = <<<HTML
    <footer class="footer bg-dark text-white text-center py-3">
        <p class="mb-0">© 2025 E-Shop | Designed for demo purposes</p>
    </footer>
HTML;
    echo $html;
}


function modals()
{

$html = <<<HTML
    <!-- LOGIN MODAL -->
    <div id="loginModal" class="modal-overlay">
        <div class="modal-box">
            <h2>Login</h2>
            <form id="loginForm">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            </form>
            <p>No account yet? <a href="#" id="openSignup">Sign up here</a></p>
        </div>
    </div>

    <!-- SIGNUP MODAL -->
    <div id="signupModal" class="modal-overlay">
        <div class="modal-box">
            <h2>Sign Up</h2>
            <form id="signupForm">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="password" id="retypePassword" name="retypePassword" placeholder="Retype Password" required>
            <button type="submit">Create Account</button>
            </form>
            <p><a href="#" id="backToLogin">Back to Login</a></p>
        </div>
    </div>
HTML;
    echo $html;
}
?>