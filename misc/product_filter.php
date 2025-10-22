<?php
include "database.php";
include "search_handler.php"; // we’ll reuse the same display logic

function filterProducts() {
    global $conn;

    $search = isset($_GET['search_query']) ? mysqli_real_escape_string($conn, $_GET['search_query']) : '';
    $category = isset($_GET['category']) ? mysqli_real_escape_string($conn, $_GET['category']) : '';

    $query = "SELECT * FROM products WHERE 1";

    // add filters only when applicable
    if (!empty($search)) {
        $query .= " AND prod_name LIKE '%$search%'";
    }

    if (!empty($category)) {
        $query .= " AND category = '$category'";
    }

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<div class="row g-4">';
        while ($row = mysqli_fetch_assoc($result)) {
            $prod_name = $row['prod_name'];
            $price = number_format($row['price'], 2);
            $id = $row['id'];
            $info = $row['info'];
            $stock = $row['stock'];
            $img = htmlspecialchars($row['img']);

            echo <<<HTML
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="img/{$img}" class="img-zoom-limit" alt="{$prod_name}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold fs-3" id="prod-name">{$prod_name}</h5>
                        <p class="fs-5 text-truncate" id="prod-info">{$info}</p>
                        <p class="fw-bold fs-5" id="prod-price">\${$price}</p>
                        <p class="text-muted fs-6" id="stock-name">Stock: {$stock}</p>
                        <a href="product.php?id={$id}" class="btn btn-primary w-75 mt-2">View Details</a>
                    </div>
                </div>
            </div>
            HTML;
        }
        echo '</div>';
    } else {
        echo "<h2 class='alert alert-warning text-center'>No results found.</h2>";
    }
}

filterProducts();
?>
