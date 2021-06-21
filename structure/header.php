<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php">
                    <img src="images\logo.png" width="150px" height="150px">
                </a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Shop.php">Shop</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <?php
                    if (isset($_SESSION["userUid"])) {
                        echo "<li><a href='profile.php'>Profile</a></li>";
                        echo "<li><a href='includes/logout.inc.php' onclick='clearLogout()'>Logout</a></li>";
                    } else {
                        echo "<li><a href='account.php'>Account</a></li>";
                    }
                    ?>
                </ul>
            </nav>
            <a href="cart.php">
                <img src="images\shopping-cart.png" width="30px" height="30px">
                <span>0</span>
            </a>
            <img src="images\menu-icon.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
</div>