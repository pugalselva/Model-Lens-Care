<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- boostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

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
    <nav class="navbar1">
        <h1 class="h1">Lens Care</h1>

        <div class="navbar-links">
            <p class="navbar-link"><a href="index.php">Home</a></p>
            <p class="navbar-link"><a href="collect.php">Collection</a></p>
            <p class="navbar-link"><a href="contact.php">Contact</a></p>
        </div>

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


        </div>

    </div>
        
    <section class="contact">
        <div class="container">
            <h2>Contact Page</h2>
            <div class="contact-wrapper">
                <div class="contact-form">
                    <h3>Send us a message</h3>
                    <form action="">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your name" >
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your email" >
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit">Send Message</button>
                    </form>

                </div>
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p><i class="fa fa-phone"></i>+91 8870704566</p>
                    <p><i class="fa fa-envelope"></i>info.@example.com</p>
                    <p><i class="fa fa-map-marker-alt"></i>Mariyamman street,villupuram,india</p>

                </div>

            </div>

        </div>

    </section>


    <!-- footer  -->

    <div class="footer">
        <div class="footer-container">
            <div class="footer-box-1">
                <h2 class="headingText">Buy The Best Eyewear From Lens Care</h2><br>
                <p>Lens Care Is The Leading E-Commerce Portal For Eyewear In India. It Has Revolutionised The Eyewear
                    Industry In The Country With Its Omni-Channel Approach. From An Ever-Growing Number Of Offline
                    Stores Across Major Cities In The Country To Innovative Integration Of Technology While Purchasing
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