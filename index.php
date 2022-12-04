<?php 
session_start();

	include("connection.php");
	include("functions.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>WACC </title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="about.html" class="logo">WACC</a>

   <nav class="navbar">
      <a href="index.php">home</a>
      <a href="registration.html">events</a>
      <a href="about.html">about us</a>
      <a href="logout.php">log out</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/clg.jpg) no-repeat">
            <div class="content">
              <span>St. Joseph's college (Autonomous) bengaluru </span> 
               <h3>St. Joseph's college (Autonomous), bengaluru</h3>
               <!--<a href="" class="btn">discover more</a>-->
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/wacc_main1.JPG) no-repeat">
            <div class="content">
               <span>WACC</span>
               <h3>Wildlife awareness and conservation club</h3>
               <!--<a href="" class="btn">discover more</a>-->
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/runn1.JPG) no-repeat">
            <div class="content">
               <span>conserve, save, sustain</span>
               <h3>make your time worth</h3>
               <a href="" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our events</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Adventure and Camping</h3>
      </div>

      <div class="box">
         <img src="images/icon-21.png.png" alt="">
         <h3>Runs</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      

   </div>

</section>



<section class="home-about">

   <div class="image">
      <img src="images/neer21.JPG" alt="">
   </div>

   <div class="content">
      <h3>Neerathon</h3>
      <p>Every year, Wildlife Awareness and Conservation Club – a student association of St. Joseph’s College (Autonomous), Bengaluru organises a run to raise awareness about water conservation called “Neerathon”. They raise funds to provide better drinking water facilities in rural as well as urban areas of the state. Wildlife Awareness and Conservation Club through Neerathon 5.0 aims to promote and advocate water conservation which is a prevalent issue in Bangalore, and in different parts      of Karnataka. It brings a change by breaking the loop of ignorance towards saving the planet. After 4 years of successful Neerathons, Neerathon 5.0 and       their enthusiasts this year aim to focus on conservation as well as other issues such as climate change, global warming, and pollution which are major       concerns throughout the world. We aim to create awareness,and aim to create change.</p>
      <a href="https://neerathon.com/" class="btn">read more</a>
   </div>

</section>

<section class="home-about">

   <div class="image">
      <img src="images/waac_wild.jpg" alt="">
   </div>

   <div class="content">
      <h3>Wild</h3>
      <p>Wildlife Awareness and Conservation Club (WACC) was started in 2011 by an interested group of students; it steadily grew to become one of the largest student associations. WACC aims at creating awareness on endangered species and their conservation. It draws attention towards environmental issues such as sustainability, cleanliness, and climate change as well as ethical issues such as animal cruelty.</p>
      <a href="#" class="btn">read more</a>
   </div>

</section>

<section class="home-about">

   <div class="image">
      <img src="images/waac_excursions.jpg" alt="">
   </div>

   <div class="content">
      <h3>treks & plantation drive</h3>
      <p>Wildlife Awareness and Conservation Club (WACC) was started in 2011 by an interested group of students; it steadily grew to become one of the largest student associations. WACC aims at creating awareness on endangered species and their conservation. It draws attention towards environmental issues such as sustainability, cleanliness, and climate change as well as ethical issues such as animal cruelty.</p>
      <a href="#" class="btn">read more</a>
   </div>

</section>

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>credit courses</h3>
      <p>Wildlife Awareness and Conservation Club (WACC) was started in 2011 by an interested group of students; it steadily grew to become one of the largest student associations. WACC aims at creating awareness on endangered species and their conservation. It draws attention towards environmental issues such as sustainability, cleanliness, and climate change as well as ethical issues such as animal cruelty.</p>
      <a href="#" class="btn">read more</a>
   </div>

</section>


<section class="footer">
   
      <div class="box-container">
   
         <div class="box">
            <h3>quick links</h3>
            <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="index.php"> <i class="fas fa-angle-right"></i> Events</a>
            <a href="about.html"> <i class="fas fa-angle-right"></i> About us</a>
            
         </div>
   
         <div class="box">
            <h3>contact info</h3>
            <a href="contact.php"> <i class="fas fa-angle-right"></i> contact us</a>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-envelope"></i> sjcwacc@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> bengaluru, India - 56027 </a>
         </div>
   
         <div class="box">
            <h3>follow us</h3>
            <a href="https://www.instagram.com/sjc_wacc/"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://www.facebook.com/wildlifeawarenessandconservationculb/"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://twitter.com/sjc_wacc"> <i class="fab fa-twitter"></i> twitter </a>
         </div>
      
      </div>
      <footer>
	     <p style="color:white;text-align:center;">SJC WACC. © 2011</p>
      </footer>
   </section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>