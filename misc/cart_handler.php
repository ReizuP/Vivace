<?php
include "database.php";


$sql6 = "SELECT COUNT(*) as total from cart";
$result2 = mysqli_query($conn, $sql6);
$row2 =  mysqli_fetch_assoc($result2);
$total_cart_num = $row2['total'];

if (isset($_GET['action']) && $_GET['action'] === 'add' && isset($_GET['id'])) {
    $id = intval($_GET['id']); // sanitize input

    // fetch product
    $query = "SELECT * FROM products WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $prod_name = $row['prod_name'];
        $price = $row['price'];

        // check if already in cart
        $checkQuery = "SELECT * FROM cart WHERE prod_name = '$prod_name' LIMIT 1";
        $checkResult = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            // product already in cart → update quantity
            $updateQuery = "UPDATE cart 
                            SET quantity = quantity + 1 
                            WHERE prod_name = '$prod_name'";
            mysqli_query($conn, $updateQuery);
        } else {
            // add new item
            $insertQuery = "INSERT INTO cart (prod_name, quantity, price) 
                            VALUES ('$prod_name', 1, '$price')";
            mysqli_query($conn, $insertQuery);
        }

        echo "<script>alert('{$prod_name} added to cart!'); event.preventDefault();</script>";
    } else {
        echo "<script>alert('Product not found.'); window.location='product.php';</script>";
    }
}


# Remove from cart
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['cart_item'])) {
    $cart_item = filter_input(INPUT_POST, 'cart_item', FILTER_SANITIZE_SPECIAL_CHARS);

    $delete_query = "DELETE FROM cart WHERE prod_name = '$cart_item' LIMIT 1";
    if (mysqli_query($conn, $delete_query)) {
        echo "<script>alert('{$cart_item} removed from cart!');</script>";
        // Optional: refresh the page to update the cart
        echo "<script>window.location.href = 'cart.php';</script>";
    } else {
        echo "<script>alert('Failed to remove item.');</script>";
    }
}

#Proceed to Checkout
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['checkout'])) {
    #$checkout = filter_input(INPUT_POST, 'checkout', FILTER_SANITIZE_SPECIAL_CHARS);
    $checkout = true;
    $query = "TRUNCATE TABLE cart";
    if (mysqli_query($conn, $query) && $checkout) {
        echo "<script>alert(\"Thank you for shopping with us!\")</script>";
    } else {
        echo "<script>Something went wrong!</script>";
    }
}

function showCartTotal ()
{
    $carttotal = <<<HTML
            <!-- Cart Summary -->
            <div class="text-end mt-4 cart-total">
                <h4 id="cart-total">Total: $0.00</h4>
                <form action="cart.php" method="post">
                    <input type="hidden" name="checkout" value="checkout">
                    <button type="submit" class="btn btn-success"> Proceed to Checkout</button>
                </form>
            </div>
    HTML;

    echo $carttotal;
}

function getCartCount()
{
    global $conn;
    $query = "SELECT COUNT(*) AS counted FROM cart";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return (int)$row['counted'];
}



function showCart()
{
    global $conn;

    $count = "SELECT COUNT(*) as counted FROM cart;";
    $countres = mysqli_query($conn, $count);
    $countrow = mysqli_fetch_assoc($countres);
    $counted = getCartCount();

    if ($counted == 0)
    {
        $html = <<<HTML
            <div id="empty-cart" class="text-center py-5">
                <i class="fas fa-shopping-cart fa-5x text-muted mb-4"></i>
                <h3>Cart is empty.</h3>
                <p class="text-muted">Add some products to get started!</p>
                <a href="products.php" class="btn btn-primary">
                    <i class="fas fa-shopping-bag">Continue Shopping</i>
                </a>
            </div>
            <script>
                $(".cart").hide();
            </script>
        HTML;
        echo $html;
    }
    else
    {
        $query = "SELECT cart.id AS cart_id, cart.quantity, products.id AS prod_id, products.prod_name, products.price, products.img
                FROM cart
                JOIN products ON cart.prod_name = products.prod_name
                ";

        $result = mysqli_query($conn, $query);
        
            while ($row = mysqli_fetch_assoc($result)) {
            $prod_name = $row['prod_name'];
            $price = $row['price'];
            $amount = $row['quantity'];
            $img = $row['img'];

            

            //TODO: FIX THIS
            //done
            $html = <<<HTML
                    <div class="card mb-3" data-id="{$row['prod_id']}">
                    <div class="row g-0">
                        <div class="col-md-2">
                        <img src="img/products/{$img}" class="img-fluid rounded-start" alt="{$prod_name}">
                        </div>
                        <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">{$prod_name}</h5>
                            <p class="card-text text-muted">Quantity: {$amount}</p>
                            <p class="card-text"><strong>₱{$price}</strong></p>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="input-group" style="width: 120px;">
                            <button class="btn btn-outline-secondary" type="button">-</button>
                            <input type="number" class="form-control text-center" value="{$amount}" min="1">
                            <button class="btn btn-outline-secondary" type="button">+</button>
                            </div>
                            <form method="post" action="cart.php">
                            <input type="hidden" name="cart_item" value="{$prod_name}">
                            <button class="btn btn-outline-danger" type="submit">
                                <i class="fas fa-trash"></i>
                            </button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                    HTML;
            
                echo $html;
       }
    }
}

# --- Update cart quantity (AJAX) ---
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['update_cart'])) {
    $prod_name = mysqli_real_escape_string($conn, $_POST['prod_name']);
    $quantity = intval($_POST['quantity']);

    if ($quantity <= 0) {
        // If quantity becomes 0 or less, delete the item
        $delete_query = "DELETE FROM cart WHERE prod_name = '$prod_name' LIMIT 1";
        mysqli_query($conn, $delete_query);
    } else {
        // Otherwise, update quantity
        $update_query = "UPDATE cart SET quantity = $quantity WHERE prod_name = '$prod_name'";
        mysqli_query($conn, $update_query);
    }

    // Return the updated subtotal
    $subtotal_query = "SELECT SUM(price * quantity) AS subtotal FROM cart";
    $res = mysqli_query($conn, $subtotal_query);
    $subtotal = mysqli_fetch_assoc($res)['subtotal'] ?? 0;

    echo json_encode(["success" => true, "subtotal" => number_format($subtotal, 2)]);
    exit;
}


?>