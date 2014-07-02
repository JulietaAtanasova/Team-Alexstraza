<!DOCTYPE html>
<html>
<head>
    <title>SoftWars Test</title>
    <link type="text/css"
        rel="stylesheet"
        href="styles/test.css">
    <meta charset="utf-8" />

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
                <div class="item"><img src="assets/fullimage1.jpg" alt="The Last of us"></div>
                <div class="item"><img src="assets/fullimage2.jpg" alt="GTA V"></div>
                <div class="item"><img src="assets/fullimage3.jpg" alt="Mirror Edge"></div>

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
