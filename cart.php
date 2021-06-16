<?php include 'structure/header-shop.php';?>
<link rel="stylesheet" href="shop.css">
<body>
    <!---- cart items details ---->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <a href="product-details-1.html">
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
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <a href="product-details-2.html">
                            <img src="images\product2.jpg">
                        </a>
                        <div>
                            <p>Humble Bee 210</p>
                            <small>Price: $39.95</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$39.95</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <a href="product-details-3.html">
                            <img src="images\product3.jpg">
                        </a>
                        <div>
                            <p>JTSLA Men's Winter Ski Jacket</p>
                            <small>Price: $79.98</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$79.98</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$200.00</td>
                </tr>
                <tr>
                    <td>Transport</td>
                    <td>$35.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$235.00</td>
                </tr>
            </table>
        </div>
        <div class="buy">
            <a href="">Buy</a>
        </div>
    </div>

    <!-- footer -->

    <?php include 'structure/footer.php';?>

    <!-- js for toggle menu -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

</body>

</html>