<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>packages</title>

            <!-- boostrap css link  -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

            <!-- font awesome cdn link  -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            
            <!-- custom css file link  -->
            <link rel="stylesheet" href="css/style.css" />
   <style>
      body{
         rgba(143, 139, 125, 0.659)
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
</section>
 <!-- header section ends -->


<!-- contact section starts-->
<section class="contact">

   <div class="container">

      <h1 class="heading-title"> Send these information to get in touch! </h1>

         <form action="contact_form.php" method="post" class="contact-form">

            <div class="flex">
               <div class="inputBox">
                  <h4>name :</h4>
                  <input type="text" placeholder="enter your name" name="name" Required>
               </div>
               <div class="inputBox">
                  <h4>email :</h4>
                  <input type="email" placeholder="enter your email" name="email" required >
               </div>
               <div class="inputBox">
                  <h4>phone :</h4>
                  <input type="number" placeholder="enter your contact number" name="phone" required>
               </div>
               <div class="inputBox">
                  <h4>event :</h4>
                  <input type="text" placeholder="what is your event?(ex:wedding/birthday..etc)" name="event" required>
               </div>
               <div class="inputBox">
                  <h4>venue :</h4>
                  <input type="text" placeholder="event place" name="location" required>
               </div>
               <div class="inputBox">
                  <h4>event date :</h4>
                  <input type="date" name="event_date" required>
               </div>

               <div class="message-box">
                  <h4>other information :</h4>
                  <textarea class="other-info" input type="text" cols="30" rows="10" placeholder="If there is any other information,please specify" name="other information" Optional. Multi-line input field (textarea)></textarea>
               </div>
               </div>

               <input type="submit" value="submit" class="submit-btn" name="send">
      </form>

   </div>
                                                                                                                                                                         
</section>
<!-- contact section ends -->

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