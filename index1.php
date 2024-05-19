<?php

$connection = mysqli_connect('localhost','root','','travel1');

if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = $_POST['phone'];
    $msg = mysqli_real_escape_string($connection, $_POST['message']);

    
    $select_message = mysqli_query($connection, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND phone = '$phone' AND message = '$msg'") or die('query failed');

    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'message sent already!';

    }else{
        mysqli_query($connection, "INSERT INTO `contact_form`(name, email, phone, message) VALUES('$name', '$email', '$phone', '$msg')") or die('query failed');
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
    var a = document.getElementById("mobilephone").value;

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


<!--header section start-->

<header class="header">

    <section class="flex">

    <a href="#home" class="logo">Travel<span>.Sri Lanka</span></a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#package">package</a>
        <a href="book.php">book</a>
        <a href="#contact">contact</a>
        <a href="login.php">logout</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

    </section>

</header>


<!--header section ends-->


<!--home section start-->


<div class="home-bg">

    <section class="home" id="home">

        <div class="content">
            <h3>explore, discover, travel</h3>
            <p>.Travel arround the Sri Lanka.</p>
            <a href="#about" class="btn">Discover More</a>
        </div>

    </section>

</div>


<!--home section ends-->



<!--about section start-->

<section>

<div class="about" id="about">

    <div class="image">
        <img src="img1/about1.webp">
    </div>

    <div class="content">
        <h3>why are you choose?</h3>
        <p>Sri Lanka is one of the leading romantic destinations in the whole world. Known for its enchanting ancient ruins, endless soft-sanded beaches, 
        imposing mountains, colourful festivals, tempting water sports, dense wild-life, diverse ethnical groups and off 
        the top hospitality from the local residents, Sri Lanka is bound to make you come back again. Sri Lanka Travel and 
        Tourism brings all of this for you right under your fingertips so that you can discover the serene island for yourself.</p>

        <a href="#package" class="btn">View Package</a>

    </div>

    </div>


    <!--service section start-->

    <div class="services">

    <h3>Our services</h3>

        <div class="box">

        <div class="box-container">
            <img src="img1/1.png" alt="">
            <h3>adventure</h3>
        </div>

        <div class="box-container">
            <img src="img1/2.png" alt="">
            <h3>tour guide</h3>
        </div>

        <div class="box-container">
            <img src="img1/3.png" alt="">
            <h3>trekking</h3>
        </div>

        <div class="box-container">
            <img src="img1/4.png" alt="">
            <h3>camp fire</h3>
        </div>

        <div class="box-container">
            <img src="img1/5.png" alt="">
            <h3>off road</h3>
        </div>

        <div class="box-container">
            <img src="img1/6.png" alt="">
            <h3>camping</h3>
        </div>

        </div>

    </div>

<!--service section ends-->
    
</section>


<!--about section ends-->


<!--packages section start-->

    <section class="packages" id="package">

        <h1 class="heading-title">Our Packages</h1>

        <div class="box-container">
            <div class="box">

                <div class="image">
                    <img src="img1/package1.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Authentic Ceylon</h3>
                    <p>Authentic Ceylon is the tour that takes you back in time through 
                        the natural as well as man-made wonders of an island nation.</p>
                        <h4>RS.7000.00</h4>
                    <a href="book.php" class="btn">Book Now</a>
                </div>

            </div>


            <div class="box">

                <div class="image">
                    <img src="img1/package2.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventurous Spirit</h3>
                    <p>Bitten by the travel bug and in search of new and unique experiences? 
                        Sri Lanka was once called Serendipity</p>
                        <h4>RS.10000.00</h4>
                    <a href="book.php" class="btn">Book Now</a>
                </div>

            </div>


            <div class="box">

                <div class="image">
                    <img src="img1/package3.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Barefoot Luxury</h3>
                    <p>Tour sri lanka at ease in an air taxi 
                        which will give you a bird’s eye view of the ‘pearl of the indian ocean’.</p>
                        <h4>RS.15000.00</h4>
                    <a href="book.php" class="btn">Book Now</a>
                </div>

            </div>

            
        </div>


        <div class="box-container">
            <div class="box">

                <div class="image">
                    <img src="img1/package4.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Following The Wild</h3>
                    <p>Not for the faint hearted, this set of tours is designed to 
                        keep you captivated with the wild outdoors.)</p>
                        <h4>RS.13000.00</h4>
                    <a href="book.php" class="btn">Book Now</a>
                </div>

            </div>


            <div class="box">

                <div class="image">
                    <img src="img1/package5.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Romantic Serendipity</h3>
                    <p>Imagine a tour designed simply to help you rekindle the 
                        love or ensure that and your other half can enjoy a honeymoon</p>
                        <h4>RS.9500.00</h4>
                    <a href="book.php" class="btn">Book Now</a>
                </div>

            </div>


            <div class="box">

                <div class="image">
                    <img src="img1/package6.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Island Of Wellness</h3>
                    <p>Refresh and rejuvenate yourself with tours 
                        which are set to cater to you mind, body and soul.</p>
                        <h4>RS.12000.00</h4>
                    <a href="book.php" class="btn">Book Now</a>
                </div>

            </div>

            
        </div>

        
    </section>


<!--packages section ends-->



<!--contact section start-->



<section class="contact" id="contact">

    <h1 class="heading-title">contact us</h1>

    <div class="row">

    
    <div class="image">
        <img src="img1/contact.png" alt="">
    </div>

        <form action="" method="post" class="contact-form" onsubmit="return  myfuntion() ">

            <div class="inputBox">
                <input type="text" placeholder="Name" name="name" required>
                
            </div>

            <div class="inputBox">
                <input type="email" placeholder="Email" name="email" required>
                
            </div>

            <div class="inputBox">
                <input type="tel" id="mobilephone" placeholder="Tel-Phone" name="phone" required>
                
            </div>

            <div class="inputBox">
                <textarea placeholder="Message" name="message" required></textarea>
                
            </div>

            <input type="submit" value="submit" class="btn" name="send">
            <input type="reset" class="btn-reset" value="Reset">

        </form>

        </div>


</section>

<!--contact section ends-->


















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


















<!--js link-->
<script defer src="script.js"></script>

</body>
</html>