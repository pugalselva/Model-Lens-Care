<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni&family=Roboto+Slab:wght@200&display=swap"
        rel="stylesheet">

    <!-- my css -->
    <link rel="stylesheet" href="styles1.css">

    <!-- font awesome icone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- navbar -->
    <nav class="navbar">
        <h1>Lens Care</h1>

        <div class="navbar-links">
            <p class="navbar-link"><a href="index.php">Home</a></p>
            <p class="navbar-link"><a href="collect.php">Collection</a></p>
            <p class="navbar-link"><a href="index1.php">Table</a></p>
            <p class="navbar-link"><a href="contact.php">Contact</a></p>


        </div>
        <!-- search -->
        <style>
            .right-inner-addon {
                position: relative;
                bottom: 3px;

            }

            div .right-inner-addon {
                padding-bottom: 3px;
            }

            .right-inner-addon input {
                padding-right: 35px;

            }

            .right-inner-addon i {
                position: absolute;
                right: 0px;
                padding: 12px 12px;
                pointer-events: none;

            }
        </style>
        <div class="right-inner-addon ">
            <i class="fa fa-search"></i>
            <input type="text" class="form-control" placeholder="Search" />
        </div>

        <p class="navbar-link"><a href="sign up.php">Sign In or Register</a></p>
        <div>
            <div class="navbar-menu-toggle" onclick="showNavbar()">
                <i class="fa-solid fa-bars"></i>

            </div>
    </nav>
    <!-- side navbar -->
    <div class="side-navbar">
        <p style="text-align: right;" onclick="closeNavbar()">
            <i class="fa-solid fa-xmark"></i>
        </p>
        <div class="side-navbar-links">
            <p class="side-navbar-link"><a href="index.php">Home</a></p>
            <p class="side-navbar-link"><a href="collect.php">Collection</a></p>
            <p class="side-navbar-link"><a href="contact.php">Contact</a></p>
            <p class="side-navbar-link"><a href="index1.php">user table</a></p>



        </div>

    </div>
   
    <!-- header -->
 
    <!-- footer  -->

    <div class="footer">
        <div class="footer-container">
            <div class="footer-box-1">
                <h2 class="headingText">Buy The Best Eyewear From Lens Care</h2><br>
                <p>Lens Care Is The Leading E-Commerce Portal For Eyewear In India. It Has Revolutionised The
                    Eyewear
                    Industry In The Country With Its Omni-Channel Approach. From An Ever-Growing Number Of Offline
                    Stores Across Major Cities In The Country To Innovative Integration Of Technology While
                    Purchasing
                    Online, Lens Care Caters To Every Customer With Several Deals And Offers.</p>
            </div>
            <div class="footer-box-2">
                <div class="footer-my">
                    <h2>Service</h2>
                    <P>store locator</P>
                    <p>buying guide</p>
                    <p>frame size</p>

                </div>
            </div>

        </div>
        <hr><br>
        <div class="footer-hr">
            <p>@2024 Lens Care</p>
            <p>Privacy</p>
            <p>Version || Follow</p>
            <div class="footer-icon">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook"></i>

            </div>

        </div>

    </div>

    <!-- script -->
    <script src="index.js"></script>

</body>

</html>