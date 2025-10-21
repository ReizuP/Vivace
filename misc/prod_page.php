<?php
function prodDetails() {
    global $conn;
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    $query = "SELECT * FROM products WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (!$result || mysqli_num_rows($result) === 0) {
        return "<div class='alert alert-danger'>Product not found.</div>";
    }

    $row = mysqli_fetch_assoc($result);
    $img = htmlspecialchars($row['img']);
    $prod_name = htmlspecialchars($row['prod_name']);
    $price = number_format($row['price'], 2);
    $stock = (int)$row['stock'];
    $info = htmlspecialchars($row['info']);

    $inStock = $stock > 0 ? "<span class='text-success'>In Stock</span>" : "<span class='text-danger'>Out of Stock</span>";

    return <<<HTML
    <div class="row">
        <div class="col-md-6">
            <img src="img/products/{$img}" class="product-img-main rounded shadow-sm mb-3" alt="{$prod_name}">
        </div>
        <div class="col-md-6">
            <h2>{$prod_name}</h2>
            <p class="fs-4 text-primary mb-1">₱{$price}</p>
            <p class="mb-3">{$inStock}</p>
            <p>{$info}</p>
            <div class="d-flex align-items-center gap-2 mt-3">
                <a href="misc/cart_handler.php?action=add&id={$row['id']}" class="btn btn-success">
                    <i class="fas fa-cart-plus">Add to Cart</i>
                </a>
                <a href="products.php" class="btn btn-outline-secondary">Back to Products</a>
            </div>
        </div>
    </div>
    HTML;
}
?>
