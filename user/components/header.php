<header class="header">
    <div class="flex">
        <a href="home.php"><img src="img/logo.png" alt="Logo"></a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="view_products.php">Products</a>
            <a href="order.php">Orders</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact Us</a>
        </nav>
        <div class="icons">
            <i class="bx bxs-user" id="user-btn"></i>

            <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_items = $count_wishlist_items->rowCount();
            ?>
            <a href="wishlist.php" class="cart-btn"><i class="bx bx-heart"><sup><?= $total_wishlist_items ?></sup></i></a>

            <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_items = $count_cart_items->rowCount();
            ?>
            <a href="cart.php" class="cart-btn"><i class="bx bx-cart-download"><sup><?= $total_cart_items ?></sup></i></a>

            <i class="bx bx-list-plus" id="menu-btn" style="font-size: 2rem"></i>
        </div>

        <div class="user-box">
            <p>Username: <span><?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Guest'; ?></span></p>
            <p>Email: <span><?php echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : 'Not logged in'; ?></span></p>
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn">Register</a>
            <form action="" method="post">
                <button type="submit" name="logout" class="logout-btn">Log out</button>
            </form>
        </div>
    </div>
</header>