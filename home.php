<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>

   <!-- boostrap css link  -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
   <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
     <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />

  </head>

  <body>
    
<!-- navigation starts  -->

<nav class="navbar navbar-expand-lg navbar-white bg-none" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">
      <img src="img/logo.png" alt="" width="100" height="70">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="portfolio.php">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="info.php">Info</a>
        </li>
      </ul>
      <a href="contact.php" class="btn">Get a quote</a>
    </div>
  </div>
</div>
</nav>
</div>

<!-- home section starts  -->

<section class="home">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/home-slide-1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" id="item">
            <img src="img/home-slide-2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" id="item">
            <img src="img/home-slide-3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" id="item">
            <img src="img/home-slide-4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item"id="item">
          <img src="img/home-slide-5.jpg" class="d-block w-100" alt="...">
        </div>
    </div>

<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>
</section>

<section class="intro">
    <div class="slogan"> "we capture your emotional moments in time"</div>
    <div class="slogan1">-Studio creative minds-</div>    
</section>

<section class="home-about">
    <div class="image">
      <img src="img/home-2.jpg">
    </div>

   <div class="content">
      <p><strong>creativity is the most essential technical element of photography.</strong></p>
      <br>
      <p>  <i>we have many creative ideas,creative solutions
          and many creative ways to save greatest memories in your life in time
          with modern equipments by keeping you compeletely comfortable.
          our duty is to present you something new in creative way that would be 
          memorable in your life time.<br>
          we are true to our aim and provide the best for our clients..</i>
          <div class="see-more">
             <a href="about.php" class="see-btn">Get to know us</a>
           </div>
   </div>
</section>

<!-- services section starts  -->
 <section class="services">
      <h1 class="heading-title"> our services </h1>
      <div class="box-container">
        <div class="box">
          <img src="img/icon-1.png" />
          <h3>Pre-wedding sessions</h3>
        </div>

      <div class="box">
          <img src="img/icon-2.png" />
          <h3>weddings</h3>
        </div>

        <div class="box">
          <img src="img/icon-3.png" />
          <h3>home comings</h3>
        </div>

        <div class="box">
          <img src="img/icon-5.png" />
          <h3>birthdays</h3>
        </div>

        <div class="box">
          <img src="img/icon-6.png" />
          <h3>other kind of events</h3>
        </div>
    </div>
        <div class="see-more">
          <a href="portfolio.php" class="see-btn1">See our captures</a>  
      </div>    
</section>
<!-- services section ends -->

<!-- home reviews section starts  -->
<section class="home-reviews"> 
<h1 class="heading-title" style="margin-top:30px;"> why choose us? </h1> 
  <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="img/img-1.jpg" alt="" />
        </div>
      <div class="content">
          <h3>Reasonable prices</h3>
          <p>
           We have different packages to choose from<br> as your affordability.   
          </p>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="img/img-2.JPG" alt="" />
        </div>
          <div class="content">
            <h3>Customizable service</h3>
            <p>
              Need to get the packages customized?
              No problem,we can customize them according to your unique wants.
            </p>
          </div>
        </div>

      <div class="box">
        <div class="image">
          <img src="img/img-3.jpg" alt="" />
        </div>
        <div class="content">
          <h3>Customer satisfaction</h3>
          <br>
          <p>
            We have been in this field for 13 years. Our customers always return to us..
          </p>
         </div>
        </div>     
  </div>  
  <div class="see-more">
        <a href="about.php#review" class="see-btn">Read what our customers have to say</a>
    </div>   
</section>
<!-- home packages section ends -->


 
<!-- footer section starts -->
<section class="footer">
  	 <div class="container">
  	 	<div class="row">

  	 	<div class="footer-col">
  	 		<h4>quick links</h4>
  	 			<ul>
               <li><a href="home.php"><i class="fas fa-angle-right"></i>home</a></li>
               <li><a href="about.php"><i class="fas fa-angle-right"></i>about</a></li>
               <li><a href="portfolio.php"><i class="fas fa-angle-right"></i>portfolio</a></li>
               <li><a href="info.php"><i class="fas fa-angle-right"></i>pricing & info</a></li>
  	 			</ul>
  	 		</div>

  	 	<div class="footer-col">
         <h4>extra links</h4>
  	 			<ul>
  	 				<li><a href="https://wa.me/message/52FRAHF7SA45M1"><i class="fas fa-angle-right"></i> ask questions</a></li>
  	 				<li><a href="about.php#review"> <i class="fas fa-angle-right"></i> client reviews </a></li>
  	 			</ul>
  	 		</div>

  	 	<div class="footer-col">
         <h4>contact info</h4>
  	 			<ul>
  	 				<li><a href="https://wa.me/message/52FRAHF7SA45M1"> <i class="fa-brands fa-whatsapp"></i> +94-77-172-9103 </a></li>
  	 				<li><a href="mailto:creativemindswedding@gmail.com"><i class="fas fa-envelope"></i>creativemindswedding@gmail.com </a></li>
  	 				<li><a href="https://www.google.com/maps/dir/?api=1&destination=6.9745435045671%2C79.937574863434"><address> <i class="fas fa-map"></i> studio creative minds,kiribathgoda  11600, makola, sri lanka </a></address></li>
  	 			</ul>
  	 		</div>

  	 	<div class="footer-col">
  	 		<h4>follow us</h4>
  	 			<div class="social-links">
           <a href="https://www.facebook.com/kapilamalavigephotography"> <i class="fab fa-facebook-f"></i></a>
           <a href="https://instagram.com/kapila_malavige"> <i class="fab fa-instagram"></i></a>
           <a href="https://www.youtube.com/channel/UCxESyJ6tzWcP1nOugfarQpQ"> <i class="fab fa-youtube"></i></a>
          </div> 
  	 	</div>
    
   <div class="row">
            <div class="credit"> copyright &copy; <?php echo date( 'Y' ); ?> | created by <span> ms.kaveesha abeysinghe - MGT/2019/010</span> | all rights reserved! |</div>
      </div>
  	</div>
</section>

<!-- boostrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<!-- custom js file link -->
    <script src="js/script.js"></script>
    
   </body>
</html>