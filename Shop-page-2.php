<html>

<?php include 'structure/head.php'; ?>

<body>
    <?php include 'structure/header.php'; ?>

    <div class="small-container all-products">
        <div class="row row-2">
            <h2>All Products</h2>
            <div class="filter-box">
                <a href="Shop.php" class="btn-filter" data-filter="all">All</a>
                <a href="Ski.php" class="btn-filter" data-filter="Ski Equipment">Ski Equipment</a>
                <a href="Diving.php" class="btn-filter" data-filter="Diving Equipment">Diving Equipment</a>
                <a href="Worker.php" class="btn-filter" data-filter="Worker Safety Equipment">Worker Safety Equipment</a>
                <a href="Firefighter.php" class="btn-filter" data-filter="Firefighter Safety Equipment">Firefighter Safety Equipment</a>
            </div>
             <!-- <select>
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
            </select> -->
        </div> 
        <div class="row">
            <div class="col4">
                <a href="product-details-5.php">
                    <img src="images\product5.jpg"></a>
                <h4>Ergodyne Arsenal 5005P Large Polyester Firefighter Rescue Turnout Fire Gear Bag with Shoulder Strap
                    and Helmet Pocket
                </h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$38.37</p>
            </div>
            <div class="col4">
                <a href="product-details-6.php">
                    <img src="images\product6.jpg"></a>
                <h4>LINE2design Firefighter Glove Strap - Emergency Rescue Turnout Gear Heavy Duty Reflective Gloves
                    Safety Leash - First Responders EMTs Construction and Mechanics Adjustable Work Glove Holder - Green
                </h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$8.49</p>
            </div>
            <div class="col4">
                <a href="product-details-7.php">
                    <img src="images\product7.jpg"></a>
                <h4>Ur Shield FR Shirt - Fire Resistant Shirt - Work Shirt - Welding Shirt XL, Navy Blue Fire Retardant
                    Shirt - FR Clothing for Welders & Electricians
                </h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$39.99</p>
            </div>
            <div class="col4">
                <a href="product-details-8.php">
                    <img src="images\product8.jpg"></a>
                <h4>McGuire-Nicholas 526-CC Brown Professional Electrician'S Pouch, oil tanned leather
                </h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$27.65</p>
            </div>

            <div class="page-btn">
                <a href="Shop.php"><span>1</span></a>
                <a href="Shop-page-2.php"><span>2</span></a>
                <a href="Shop-page-3.php"><span>3</span></a>
                <a href="Shop-page-3.php"><span>&#8594;</span></a>
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