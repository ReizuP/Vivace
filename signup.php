<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - Vivace</title>
  <link href="./styles.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <!-- Your custom styles -->
  <link rel="stylesheet" href="styles.css">

  <!-- jQuery & Validation (local) -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>

  <!-- Your custom modal script -->
  <script src="modals.js"></script>
</head>
<body>

  <!-- NAVBAR -->
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
            <a class="nav-link" href="index.php">Home</a>
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
            <button class="nav-link btn btn-link text-white" data-bs-toggle="modal" data-bs-target="#loginModal">
              <i class="fas fa-sign-in-alt"></i> Login
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

  <!-- PAGE HEADER -->
  <div class="bg-primary text-white py-5">
    <div class="container">
      <h1 class="display-4">Create Account</h1>
      <p class="lead">Join Vivace and start shopping today!</p>
    </div>
  </div>

  <!-- SIGNUP FORM -->
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0" id="signupmodallabel">Sign Up</h5>
          </div>
          <div class="card-body">
            <form id="signupForm" novalidate>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="signupFirstName" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="signupFirstName" name="signupFirstName" required>
                  <div class="invalid-feedback"></div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="signupLastName" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="signupLastName" name="signupLastName" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="mb-3">
                <label for="signupEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="signupEmail" name="signupEmail" required>
                <div class="invalid-feedback"></div>
              </div>
              <div class="mb-3">
                <label for="signupPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="signupPassword" name="signupPassword" required>
                <div class="invalid-feedback"></div>
              </div>
              <div class="mb-3">
                <label for="signupConfirmPassword" class="form-label">Retype Password</label>
                <input type="password" class="form-control" id="signupConfirmPassword" name="signupConfirmPassword" required>
                <div class="invalid-feedback"></div>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                  <i class="fas fa-user-plus"></i> Create Account
                </button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center">
            <p class="mb-0">Already have an account? <a href="index.html" class="text-primary">Login here</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
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
              <input type="password" class="form-control" id="loginPassword" name="loginPassword" required>
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
          <p class="mb-0">No account yet? <a href="signup.html" class="text-primary" data-bs-dismiss="modal">Sign up here</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="bg-dark text-white text-center py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5>VIVACE</h5>
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
      <p class="mb-0">&copy; 2025 VIVACE | Designed for demo purposes</p>
    </div>
  </footer>

  <!-- jQuery and jQuery Validator -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
