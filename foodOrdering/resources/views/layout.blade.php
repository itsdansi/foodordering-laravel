<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Food Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts      -->

<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>foodiz</a>

    <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="#gallary">gallary</a>
        <a href="#reservation">reservation</a>
        <a href="#event">events</a>
        <a href="#about">about</a>
        <a href="#contact">contact</a>
        <a href="#account">account</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <!-- <a href="#" class="fas fa-heart"></a> -->
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

@yield('home')

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
        <a href="#" class="logo"><i class="fas fa-utensils"></i>foodiz</a>
            <p>Food Bazzar is Food and beverage order delivery platform established in 
                Chitwan to cater customer order through various medium... <span>Read More</span> </p>
        </div>
        

        <div class="box">
            <h3 class="widget-title" itemprop="headline" >Payment Methods</h3>
            <ul>
                <li>Cash on Delivery</li>
                <li>
                    <div class = "social2">
                        <img src="https://www.merokinmel.com/assets/images/esewa.jpg" alt="eSewa" width ="36" height="36">
                        <!-- <span class="footer-payment-seperator">|</span> -->
                        <img src="https://www.merokinmel.com/assets/images/khalti.png" width="40px">
                        <!-- <span class="footer-payment-seperator">|</span> -->
                        <img src="https://www.merokinmel.com/assets/images/master-card.png" width="50px">
                        <!-- <span class="footer-payment-seperator">|</span> -->
                        <img src="https://www.merokinmel.com/assets/images/union.png" width="51px">
                        </div>
                </li>
            </ul>


        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+01 23-456-789</a>
            <a href="#">+977-9821521724</a>
            <a href="#">shaikhanas@gmail.com</a>
            <a href="#">anasbhai@gmail.com</a>
            <a href="#">Bharatpur, Chitwan - 2400110</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">tiktok</a>
        </div>

    </div>

    <div class="credit"> copyright @ 2021 by <span>Cryptic Technologies</span> </div>

</section>

<!-- footer section ends -->

<!-- loader part  -->
<div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>





















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>