<html>
<?php include 'structure/head.php'; ?>

<body>
    <?php include 'structure/header.php'; ?>
    <canvas id="myChart" width="400" height="200"></canvas>
    <?php include 'structure/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js" integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="statistics.js"></script>
    <script src="main.js"></script>
    <script type='text/javascript'>
        // JavaScript anonymous function
        (() => {
            if (window.localStorage) { // If there is no item as 'reload'
                // in localstorage then create one &
                // reload the page
                if (!localStorage.getItem('reload')) {
                    localStorage['reload'] = true;
                    window.location.reload();
                } else { // If there exists a 'reload' item
                    // then clear the 'reload' item in
                    // local storage
                    localStorage.removeItem('reload');
                }
            }
        })(); // Calling anonymous function here only
    </script>
</body>

</html>