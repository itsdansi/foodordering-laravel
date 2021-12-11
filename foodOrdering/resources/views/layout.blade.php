<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Food Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

     <!-- bootstrap cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-
    zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->

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
        <a class="active" href="/">home</a>
        <a class="menu" href="/menu">menu</a>
        <a href="/gallary">gallary</a>
        <a href="/reservation">reservation</a>
        <a href="/events">events</a>
        <a href="/about">about</a>
        <a href="/contact">contact</a>
        <!-- <a href="/account">account</a> -->
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <button>  <a href="/account">account</a></button>
       

        <!-- <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a> -->
        <!-- <a href="#" class="fas fa-shopping-cart"></a> -->
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

@yield('content')

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
<!-- <div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>
 -->




















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>