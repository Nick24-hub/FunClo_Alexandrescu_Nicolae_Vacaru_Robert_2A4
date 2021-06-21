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
        </div>

        <div class="row" id="x">
            
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
    <script src="worker.js"></script>
</body>

</html>