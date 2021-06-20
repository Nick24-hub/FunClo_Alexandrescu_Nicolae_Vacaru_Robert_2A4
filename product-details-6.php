<html>

<?php include 'structure/head.php'; ?>

<body>
    <?php include 'structure/header.php'; ?>

    <!-- single product details -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col2">
                <img src="images\product6.jpg" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images\product6.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images\product6_small1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images\product6_small2.jpg" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col2">
                <p>Emergency Rescue Turnout Gear Heavy Duty Reflective Gloves Safety Leash</p>
                <h1>LINE2design Firefighter Glove Strap</h1>
                <h4>$8.49</h4>
                <select>
                    <option>Select Size</option>
                    <option>One Size</option>
                </select>
                <input id="amount" type="number" value="1">
                <a class="btn" onclick="multipleAddToCart(5)">Add To Cart</a>
                <h3>Product Details</h3>
                <br>
                <p>Heavy Duty Durable Webbing Strap Firefighter Turnout Gear Glove strap has extra-long length 12 ½”
                    on each side.
                    <br>
                    Bright and Reflective Strong, heavy-duty 1” Fluorescent Lime Trim Reflective nylon webbing. Built
                    to last, this will be the only glove holder you'll ever need.
                    <br>
                    Quick-Release Buckle The fully adjustable, quick-release buckle and highest quality Snap Swivel
                    Hook & loop available. Industrial strength all metal, black, swivel snap hook.
                    <br>
                    Ideal Design LINE2design work glove strap is ideal & designed for firefighters, EMTs, construction workers, and mechanics.
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