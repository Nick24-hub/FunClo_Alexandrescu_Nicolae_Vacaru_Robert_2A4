<html>
<?php include_once 'includes/dbh.inc.php'; ?>
<?php include 'structure/head.php'; ?>

<body>
    <?php include 'structure/header.php'; ?>
    <!-- single product details -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col2">
                <img src="images\product1.jpg" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images\product1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images\product1_small1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images\product1_small2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images\product1_small3.jpg" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col2">
                <p>Head Protection Equipment</p>
                <h1> <?php
                        $sql = "SELECT title FROM product where id=1;";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo $row['title'];
                        ?></h1>
                <h4>$26.99</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add To Cart</a>
                <h3>Product Details</h3>
                <br>
                <p> Work-At-Height and Rescue Slotted Ventilated Helmet with 6-Point Ratchet Suspension ANSI
                    Z89.1-14 Certified For Work, Home, and General Headwear Protection HHAT-04 <br>
                    Ventilation holes open or close with adjustable sliding shutters for increased air circulation
                    when needed <br>
                    Low profile, sleek, modern design that allows for uninterrupted upward vision. Side inserts
                    compatible with eye protection gear. Recommended with the JORESTECH Retractable Eye Shield. <br>
                    Four positioning hooks for easily mounting a headlamp with an elastic headband and keeping it
                    securely in place <br>
                    Chin strap designed to reduce risk of losing helmet during a fall – great for working at heights
                    or during emergency rescue <br>
                    Six-point webbing suspension system conforms to the shape of head for improved comfort and
                    greater impact protection</p>
            </div>
        </div>
    </div>

    <!----  title  ---->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <a href="Shop.php">
                <p>View More</p>
            </a>
        </div>
    </div>


    <!---- products ---->

    <div class="small-container">
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

    <!-- js for product gallery -->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");
        SmallImg[0].onclick = function() {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function() {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function() {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function() {
            ProductImg.src = SmallImg[3].src;
        }
    </script>

    <script src="main.js"></script>
</body>

</html>