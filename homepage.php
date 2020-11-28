<html>
<head>
<?php require ('link.php'); ?>
</head>
<body>
<?php require ('header.php'); ?>
    
<!-- Content -->
<div class="video">
    <div class="row">
        <span class="slogan" data-aos="zoom-in">Coffee, the essence of a productive morning.</span>
        <video autoplay muted loop id="myVideo">
            <source src="img/Coffee.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>    
    </div>
</div>

<img class="coffeeBG" src="img/background/bgCoffee1.jpg">
<div class="container main-content firstrow">
    <div class="row">
        <div class="box homepage1">
            <div class="col-4" data-aos="fade-right">
            <h1>Penang Coffee Town</h1>
            </div>

            <div class="col-4" data-aos="zoom-in">
            <img class="coffeeimg" src="img/coffee.png">
            </div>

            <div class="col-4" data-aos="fade-left">
                <span>
                 An emerging world-class artisanal coffee city of Asia
                </span>
            </div>
        </div>
     </div>
</div>    

<div class="container main-content secondrow">
    <div class="row">
        <div class="box homepage2" data-aos="flip-left">
            <div class="circle">
                <h1>About Roastery</h1>
                <p>In recent years, fascinating cafés are mushrooming in Malaysia. Major cities such as Kuala Lumpur and Penang have developed into very familiar scenes as in Melbourne. Coffee standard is picking up well in Malaysia. It is the aspiration of us in Roastery Sdn. Bhd. Roastry that it will reach a world coffee stage in near future</p>
                <a href="aboutus.php">Read More</a>
            </div>
        </div>
    </div>
</div>

<div class="container main-content thirdrow">
    <div class="row">
        <div class="box" data-aos="zoom-in">
            <span class="justify-content-center learncoffee">
                Learn More About Coffee!
                <a  href="aboutcoffee.php">Read More</a>
            </span>
            
        </div>
    </div>
</div>


    
<!-- End of Content-->
    
<!-- Footer -->
<?php require('footer.php'); ?>
<!-- Javascript -->
<?php require('javascript.php'); ?>
</body>
</html>