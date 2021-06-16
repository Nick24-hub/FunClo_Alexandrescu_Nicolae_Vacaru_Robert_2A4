<html>

<?php include 'structure/head.php'; ?>

<body>
    <?php include 'structure/header.php'; ?>

    <div class="small-container all-products">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>All Categories</option>
                <option>Ski Equipment</option>
                <option>Diving Equipment</option>
                <option>Worker Safety Equipment</option>
            </select>
            <select>
                <option>Default Sorting</option>
                <option>Sort by Price</option>
                <option>Sort by Popularity</option>
                <option>Sort by rating</option>
                <option>Sort by sale</option>
            </select>
        </div>
        <div class="row">
            <div class="col4">
                <a href="product-details-9.php">
                    <img src="images\product9.jpg"></a>
                <h4>Firefighter Training Regulator | Breathing Resistance XRT Pro 2.0 Trainer for Scott AV-2000 &
                    AV-3000 SCBA Mask
                </h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$59.99</p>
            </div>
            <div class="col4">
                <a href="product-details-10.php">
                    <img src="images\product10.jpg"></a>
                <h4>Stethoscope Holder pro with Clip,Handmade in USA Genuine Leather .Perfect for Physicians, Nurses,
                    EMT, Medical Nursing Student. No More Neck Carrying, Work with Comfort
                </h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p>$12.99</p>
            </div>
            <div class="col4">
                <a href="product-details-11.php">
                    <img src="images\product11.jpg"></a>
                <h4>COPOZZ Scuba Mask, No Fogging Snorkeling Scuba Dive Glasses, Great Seal Free Diving Tempered Glass Mask Goggles
                </h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$20.99</p>
            </div>
            <div class="col4">
                <a href="product-details-12.php">
                    <img src="images\product12.jpg"></a>
                <h4>Humble Bee 410 Polycotton Beekeeping Suit with Round Veil
                </h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p>$139.95</p>
            </div>

            <div class="page-btn">
                <a href="Shop.php"><span>1</span></a>
                <a href="Shop-page-2.php"><span>2</span></a>
                <a href="Shop-page-3.php"><span>3</span></a>
                <a href="Shop.php"><span>&#10229;</span></a>
            </div>
        </div>
    </div>

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