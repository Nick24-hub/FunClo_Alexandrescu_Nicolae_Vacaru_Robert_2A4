<html>

<?php include 'structure/head.php'; ?>

<body>
    <?php include 'structure/header.php'; ?>

    <!-- single product details -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col2">
                <img src="images\product11.jpg" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images\product11.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images\product11_small1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images\product11_small2.jpg" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col2">
                <p>Scuba Mask</p>
                <h1>COPOZZ</h1>
                <h4>$20.99</h4>
                <select>
                    <option>Select Size</option>
                    <option>One Size</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add To Cart</a>
                <h3>Product Details</h3>
                <br>
                <p>Fashion Integrated frame snorkel mask with double lens offers a 180 degree superior view for
                    underwater exploration. Wide and high-grade soft silicone 3d sealing face gasket which molds
                    perfectly to fit any face shape. Diving in style.
                    <br>
                    Scuba mask with shatter-resistant glass lenses to withstand deep water pressure. Scratching resist
                    lens instead of polycarbonate enables you a clearer view under water and hardly to leave any
                    scratches to your lens.
                    <br>
                    Diving mask seals great with wide field of view. The silicone would be comfortably soft and seals on
                    your face very well, which is the most important thing for preventing leaks.The frame looks cool.
                    <br>
                    The goggles strap attaches to the skirt instead of the frame as this allows for a variety of face
                    shapes and the mask should seal very well with many of them. Wider nicely shaped skirt help to seal
                    and prevent leaking. Perfect for both diving pros and beginners.
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