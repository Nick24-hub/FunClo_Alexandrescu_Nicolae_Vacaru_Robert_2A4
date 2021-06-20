<html>

<?php include 'structure/head.php'; ?>

<body>
    <?php include 'structure/header.php'; ?>

    <!-- single product details -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col2">
                <img src="images\product4.jpg" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images\product4.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images\product4_small1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images\product4_small2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images\product4_small3.jpg" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col2">
                <p>Neopreme Wetsuit</p>
                <h1>COPOZZ Wetsuit for Men</h1>
                <h4>$67.99</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <input id="amount" type="number" value="1">
                <a class="btn" onclick="multipleAddToCart(3)">Add To Cart</a>
                <h3>Product Details</h3>
                <br>
                <p>Highly Quality Neoprene Wetsuit--- Made of premium 3mm neoprene and nylon fabric, stretchable and
                    heat insulation, soft and comfortable.
                    <br>
                    Full Body Protection Wetsuit--- The neoprene thermal wetsuit can keep you warm, buoyancy provided
                    will make you float more easily, and help you master swimming and diving skill faster. What’s more,
                    the men women wetsuits sheild you from UV rays and protect you against coral reef abrasion,
                    jellyfish stings and sea lice, jellies and other marine biological irritants.
                    <br>
                    Features for Full Wetsuit--- One-piece contemporary style and flattering fit. This long sleeve
                    wetsuit design with back zipper along with long pull cord for easy on and off, and inner panel layer
                    under the zipper ensures it won't catch or irritate your delicate skin; the reinforced knees prevent
                    from friction and hurt.
                    <br>
                    Multi Water Sports Wetsuit--- COPOZZ full body diving suit is designed for all water sports, such as
                    scuba diving, surfing, snorkeling, swimming, kayaking, canoeing, wakeboarding, stand-up paddle
                    boarding and so on, perfect for adult men women diving beginners and amateurs.
                </p>
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
                <a href="product-details-1.php">
                    <img src="images\product1.jpg"></a>
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