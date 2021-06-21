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
            <!-- Search box -->
            <!-- <div class="search-box">
                <form1 action="" onsubmit="return false">
                    <input type="text" id="search" placeholder="Search Product">
                     <button id="btn-search">Search</button> 
                </form1>
            </div> -->
            <!--<select>
                <option>All Categories</option>
                <option>Ski Equipment</option>
                <option>Diving Equipment</option>
                <option>Worker Safety Equipment</option>
            </select>
            <select>
                <option>Default Sorting</option>
                <option>Sort by Price</option>
                <option>Sort by Popularity</option>
                <option>Sort by Rating</option>
                <option>Sort by Sale</option>
            </select>-->
        </div>

        <div class="row">
            <div class="col4">
                <a href="product-details-1.php">
                    <img src="images\product1.jpg">
                </a>
                <h4>JORESTECH Hard Hat White ABS Work-At-Height and Rescue Slotted Ventilated Helmet with 6-Point
                    Ratchet Suspension ANSI Z89.1-14 Certified For Work, Home, and General Headwear Protection
                    HHAT-04
                </h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$26.99</p>
            </div>
            <div class="col4">
                <a href="product-details-2.php">
                    <img src="images\product2.jpg"></a>
                <h4>Humble Bee 210 Polycotton Beekeeping Veil with Round Hat</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p>$39.95</p>
            </div>
            <div class="col4">
                <a href="product-details-3.php">
                    <img src="images\product3.jpg"></a>
                <h4>TSLA Men's Winter Ski Jacket, Waterproof Warm Insulated Snow Coats, Cold Weather Windproof
                    Snowboard
                    Jacket with Hood</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$79.98</p>
            </div>
            <div class="col4">
                <a href="product-details-4.php">
                    <img src="images\product4.jpg"></a>
                <h4>COPOZZ Wetsuit for Men and Women 3mm Neoprene Full Wetsuit, Back Zip Long Sleeve One Piece
                    Wetsuit
                    Jumpsuit for Scuba Diving Surfing Snorkeling</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$67.99</p>
            </div>
            <div class="page-btn">
                <a href="Shop.php"><span>1</span></a>
                <a href="Shop-page-2.php"><span>2</span></a>
                <a href="Shop-page-3.php"><span>3</span></a>
                <a href="Shop-page-2.php"><span>&#8594;</span></a>
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