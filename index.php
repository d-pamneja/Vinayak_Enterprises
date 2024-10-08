<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title><?php include('./shared/title.php')?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
    <!-- Header -->
    <?php include('./shared/header.php'); ?>
    <!-- /Header -->
    <!-- Main Slider -->
    <?php include('./home/main_slider.php'); ?>
    <!-- /Main Slider -->
    <!-- Grid1 -->
    <?php include('./home/grid1.php'); ?>
    <!-- /Grid1 -->
    <!-- Grid7 -->
    <?php include('./home/grid6.php'); ?>
    <!-- /Grid7 -->
    <!-- Grid3 -->
    <?php include('./home/grid3.php'); ?>
    <!-- /Grid3 -->
    <!-- Grid6 -->
    <?php include('./home/grid7.php'); ?>
    <!-- /Grid6 -->
    <!-- Footer -->
    <?php include('./shared/footer.php'); ?>
    <!-- /Footer -->

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/active.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(".owl-carousel").owlCarousel({
        loop: false,          
        rewind: true,                
        autoplay: true,              
        autoplayTimeout: 3000,       
        autoplayHoverPause: true,    
        items: 1,                        
        dots: true,                  
        nav: true,                   
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
    });

    </script>


</body>
</html>