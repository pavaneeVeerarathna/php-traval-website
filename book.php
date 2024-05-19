<?php

$connection = mysqli_connect('localhost', 'root', '', 'travel1');


if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = $_POST['phone'];
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $package = mysqli_real_escape_string($connection, $_POST['package']);
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $select_message = mysqli_query($connection, "SELECT * FROM `book_form` WHERE name = '$name' 
    AND email = '$email' AND phone = '$phone' AND address = '$address' AND package = '$package' AND guests = '$guests' AND arrivals ='$arrivals' AND leaving = '$leaving'") or die('query failed');

    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'message sent already!';

    }else{
        mysqli_query($connection, "INSERT INTO `book_form`(name, email, phone, address, package, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$package', '$guests', '$arrivals', '$leaving')") or die('query failed');
        $message[] = 'message sent successfully!';
    }


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>travel website</title>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!--css link-->
    <link rel="stylesheet" href="stylee.css">





</head>
<body>


<script>

function myfuntion(){
    var a = document.getElementById("mphone").value;

    if(isNaN(a)){
        alert("please enter only numbers");
        return false;
    }
    if(a.length<10){
        alert("Mobile number must be 10 digit");
        return false;
    }
    if(a.length>10){
        alert("Mobile number must be 10 digit");
        return false;
    }
    
}



</script>


<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>





<div class="heading">
    <h3>Booking</h3>
    <p> <a href="index1.php">home</a> / book </p>
</div>


<section class="booking">

    <h1 class="heading-title">book your trip</h1>

    <form action="" method="post" class="book-form" onsubmit="return myfuntion() ">

        <div class="flex">
           
            <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name" id="Name" required>
                    
            </div>
    


            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email" required>
                
            </div>


        
            <div class="inputBox">
                <span>phone :</span>
                <input type="tel" id="mphone" placeholder="enter Tel-phone" name="phone" value="" required>
                
            </div>
        


        
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address" required>
                
                
            </div>
    


          <div class="inputBox">
          <span>our package :</span>
            <select name="package" required> 
              <option value="">Select</option>
              <option value="Authentic Ceylon">Authentic Ceylon</option>
              <option value="Adventurous Spirit">Adventurous Spirit</option>
              <option value="Barefoot Luxury">Barefoot Luxury</option>
              <option value="Following The Wild">Following The Wild</option>
              <option value="Romantic Serendipity">Romantic Serendipity</option>
              <option value="Island Of Wellness">Island Of Wellness</option>
            </select>
            
          </div>
 


        <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests" required>
            
        </div>



         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals" required>
            
         </div>



         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" required>
            
         </div>

</div>

      <input type="submit" value="submit" class="btn" name="send">
      <input type="reset" class="btn-reset" value="Reset">

    </form>

</section>
















<!--footer section start-->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-angle-right"></i> home</a>
            <a href="#about"> <i class="fas fa-angle-right"></i> about</a>
            <a href="#package"> <i class="fas fa-angle-right"></i> package</a>
            <a href="#book"> <i class="fas fa-angle-right"></i> book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 011-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> 011-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> travel123@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Kaduwela Road, Malabe </a>
      </div>

      <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>
      
    </div>

</section>

<!--footer section ends-->















</body>
</html>