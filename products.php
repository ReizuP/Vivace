<?php
if (session_status() === PHP_SESSION_NONE) {
session_start();
}
  include "misc/cart_handler.php";
  include "misc/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products - Vivace</title>
  <link href="./styles.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
  <!-- Your custom styles -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <!-- NAVBAR -->
    <?php
      include "misc/readypage.php";

      navbar();
      ?>
  
  <!-- PAGE HEADER -->
   <br>
    <div class="container">
      <h1 class="display-5">Our Products</h1>
      <p class="lead">Discover our amazing collection of products</p>
    </div>

  <!-- FILTERS -->
  <div class="container py-4">
    <div class="row">
      <div class="col-md-6">
        <form id="search-form" class="input-group">
          <input type="text" class="form-control" id="search-input" name="search_query" placeholder="Search products...">
          <button class="btn btn-outline-secondary" type="submit" id="search-btn">
            <i class="fas fa-search"></i>
          </button>
        </form>
      </div>
      <div class="col-md-6">
        <select id="category-filter" class="form-select w-auto" style="min-width: 200px;">
          <option value="">All Categories</option>
          <option value="Strings">Strings</option>
          <option value="Woodwinds">Woodwinds</option>
          <option value="Guitars">Guitars</option>
          <option value="Drums">Drums</option>
          <option value="Keyboard">Keyboard</option>
          <option value="Audio Electronics">Audio Electronics</option>
        </select>
      </div>
    </div>
  </div>

  <!-- PRODUCTS GRID -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4" id="products-grid">
        <?php 
          include "misc/cards_handler.php";
          allProducts();
        ?>
      </div>
    </div>
  </section>

  <!-- FOOTER AND MODALS -->
   <?php

      footer();
      modals();
      ?>
  
  <!-- jQuery & Validation (local) -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>

  <!-- Your custom modal script -->
  <script src="./js/modals.js"></script>
  <script src="./js/cart.js"></script>
  <script src="./js/loginsign.js"></script>
  <script src="./js/search.js"></script>


  <script>
  $(document).ready(function() {
      function loadProducts() {
          const search = $('#search-input').val();
          const category = $('#category-filter').val();

          $.ajax({
              url: 'misc/product_filter.php',
              type: 'GET',
              data: {
                  search_query: search,
                  category: category
              },
              success: function(data) {
                  $('#products-grid').html(data);
              }
          });
      }

      // search as you type
      $('#search-input').on('input', function() {
          loadProducts();
      });

      // category filter change
      $('#category-filter').on('change', function() {
          loadProducts();
      });

      // load all initially
      loadProducts();
  });
  </script>

</body>
</html>
