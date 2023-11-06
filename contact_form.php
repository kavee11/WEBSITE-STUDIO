<?php
   $connection = mysqli_connect('localhost','root','','contact_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $event = $_POST['event'];
      $location = $_POST['location'];
      $event_date = $_POST['event_date'];
      $other = $_POST['other'];

      $request = " insert into contact_form(name, email, phone, event, location, event_date, other) values('$name','$email','$phone','$event','$location','$event_date','$other')";
       mysqli_query($connection, $request);

       if ($request) {
         header("Location:confirmation.php?success=Your details has been sent successfully");
         exit();

     }else {
           header("Location:contact.php?error=unknown error occurred&$user_data");
         exit();
     }

   }else{
      echo 'something went wrong please try again!';  
   }
?>