<html>

<?php include 'structure/head.php'; ?>

<body>
    <?php include 'structure/header.php'; ?>
    <!---- cart items details ---->
    <div class="small-container cart-page">

        <table class="x">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            
            <!-- <tr>
                <td>
                    <div class="cart-info">
                        <a href="product-details-1.php">
                            <img src="images\product1.jpg">
                        </a>
                        <div>
                            <p>JORESTECH Hard Hat White</p>
                            <small>Price: $26.99</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$26.99</td>
            </tr> -->

        </table>

        <div class="total-price">

        </div>
        <div class="buy">
            <!-- <a href="">Buy</a> -->
        </div>
    </div>

    <!-- footer -->

    <?php include 'structure/footer.php'; ?>

    <!-- js for toggle menu -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

    <script src="main.js"></script>

</body>

</html>