<!DOCTYPE html>
<html>
<head>
    <title>Начало - SoftWars University</title>
    <link type="text/css" rel="stylesheet" href="styles/test.css">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo-icon.ico"/>
    <meta charset="utf-8" />
	<meta name="description" content="Разработка на Team Alexstraza за екипния проект на SoftUni: http://softuni.bg">

    <!-- Important Owl stylesheet -->
<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
 
<!-- Default Theme -->
<link rel="stylesheet" href="owl-carousel/owl.theme.css">

    <!--  jQuery 1.7+  -->
<script src="jquery-1.9.1.min.js"></script>

    <!-- Include js plugin -->
<script src="owl-carousel/owl.carousel.js"></script>

</head>
<body>

    <div id="wrapper">
        <?php
        
        include("header.php");

        ?>

        <div id="owl-demo" class="owl-carousel">
                <div class="item"><img src="assets/fullimage8.jpg" alt="The Last of us"></div>
                <div class="item"><img src="assets/fullimage9.jpg" alt="GTA V"></div>
                <div class="item"><img src="assets/fullimage10.jpg" alt="Mirror Edge"></div>

              </div>

        <script type="text/javascript">
            $(document).ready(function () {

                $("#owl-demo").owlCarousel({

                    navigation: true, // Show next and prev buttons
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true
                    // "singleItem:true" is a shortcut for:
                    // items : 1, 
                    // itemsDesktop : false,
                    // itemsDesktopSmall : false,
                    // itemsTablet: false,
                   // itemsMobile : true,

                });

            });
        </script>

        <?php
        
        include("footer.php")
            
        ?>
    </div>
</body>
</html>
