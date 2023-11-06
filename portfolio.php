<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>portfolio</title>

    <!-- boostrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />

<style>
    body{
      background: rgba(143, 139, 125, 0.659);
      align-items:center;
      justify-content:center;
      overflow:hidden;
    }
    
    .portfolio{
      margin-bottom:200px;
      height:75vh;
      width:100%;
      }
   

  .i-slider{
      position: relative;
      margin-top:7rem;
      width: 250px;
      height: 250px;
      transform-style: preserve-3d;
      animation: rotate 20s linear infinite;
      
    }

    @keyframes rotate {
      0%{
        transform:perspective(1000px) rotateY(0deg);
      }
      100%{
        transform:perspective(1000px) rotateY(360deg);
      }
    }
    
    .i-slider span{
      position: absolute;
      top:0;
      right:0;
      height:100%;
      width:100%;
      transform-origin:center;
      transform-style:preserve-3d;
      transform:rotateY(calc(var(--i)*70deg)) translateZ(260PX);
     

      
    }
    .i-slider span img{
      position: absolute;
      top:0;
      left:0;
      width:100%;
      height:100%;
      border-radius:10px;
      object-fit:cover;
      transition:2s; 
      
    }

    .i-slider span:hover img{
      transform:translateY(-50PX) scale(1.1);
      
    }

  </style>
</head>

  <body>
    <!-- boostrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

<!-- header section starts  -->
<section>
    <nav class="navbar navbar-expand-lg navbar-white bg-none">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php">
          <img src="img/logo.png" alt="logo" width="100" height="70">
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
</section>

<!-- header section ends -->
<section class="portfolio">
<h1 class="heading-portfolio">OUR PORTFOLIO</h1>
    <h4 class="sub-head">click on images to see albums</h4>
         <div class="container">
            <div class="i-slider">
              
                    <span style="--i:1;">
                      <div class="content_img"><a href="weddings.php">
                        <img alt="weddings"src="img/i-slider-1.jpg"></a>
                        </div>
                    </span>

                    <span style="--i:2;">
                      <div class="content_img"><a href="homecomings.php">
                          <img alt="homecomings" src="img/i-slider-2.jpg"></a>
                      </div>
                    </span>

                    <span style="--i:3;">
                      <div class="content_img"><a href="birthdays.php">
                          <img alt="birthdays" src="img/i-slider-3.jpg" ></a>
                        </div>
                    </span>

                    <span style="--i:4;">
                      <div class="content_img"><a href="prewed.php">
                        <img alt="prewedding-sessions" src="img/i-slider-4.jpg"></a>
                        </div>
                      </span>

                    <span style="--i:5;">
                    <div class="content_img"><a href="other.php">
                    <img alt="other" src="img/i-slider-5.jpg" ></a>
                </div>
              </span>
         </div>
         
      </div> 
      </section>

        <section> 
          <CENTER>  
            <div class="see-more">
                <a href="https://www.facebook.com/kapilamalavigephotography" class="see-btn">see more on <i class="fab fa-facebook-f"> </i></a>
                </div>
          </CENTER>
        </section>



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
  	 				<li>
              <a href="https://wa.me/message/52FRAHF7SA45M1"> 
              <i class="fa-brands fa-whatsapp"></i> +94-77-172-9103 </a>
            </li>

  	 				<li>
              <a href="mailto:creativemindswedding@gmail.com">
              <i class="fas fa-envelope"></i>creativemindswedding@gmail.com </a>
            </li>

  	 				<li>
              <a href="https://www.google.com/maps/dir/?api=1&destination=6.9745435045671%2C79.937574863434">
                <address> 
                  <i class="fas fa-map"></i>
                  studio creative minds,
                  kiribathgoda-11600, 
                  makola, sri lanka 
                </a>
                </address>
              </li>
  	 			</ul>
  	 	</div>

  	 	<div class="footer-col">
  	 		<h4>follow us</h4>
  	 			<div class="social-links">
           <a href="https://www.facebook.com/kapilamalavigephotography"> 
            <i class="fab fa-facebook-f"></i></a>

           <a href="https://instagram.com/kapila_malavige"> 
            <i class="fab fa-instagram"></i></a>

           <a href="https://www.youtube.com/channel/UCxESyJ6tzWcP1nOugfarQpQ">
             <i class="fab fa-youtube"></i></a>
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




































