<?php

$connection = mysqli_connect('localhost','root','','travel1');

if(isset($_POST["send"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $duplicate = mysqli_query($connection, "SELECT * FROM  register_form WHERE name = '$name' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){

        $message[] = 'Username or Email has Already Taken!';
    
    }
    else{
        if($password == $cpassword){
            $query = "INSERT INTO register_form VALUES('', '$name', '$email', '$password')";
            mysqli_query($connection,$query);

            $message[] = 'Registration Successfull!';

        }else{
            $message[] = 'Password does not matched!'; 
        }
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




<section class="register">

    <h1 class="heading-title">register now</h1>


<?php

    if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message1">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
    }

?>



    <form action="" method="post" class="register-form">

        <div class="flex">
           
            <div class="inputBox">
                    <p><span>name :</span></p>
                    <input type="text" placeholder="enter your name" name="name" required>
                    
            </div>
    


            <div class="inputBox">
                <p><span>email :</span></p>
                <input type="email" placeholder="enter your email" name="email" required>
                
            </div>
        


        
            <div class="inputBox">
                <p><span>password :</span></p>
                <input type="password" placeholder="enter your password" name="password" id="show" required>
                
                
            </div>

 


            <div class="inputBox">
                <p><span>confirm password :</span></p>
                <input type="password" placeholder="re-enter your password" name="cpassword" id="show1" required>
                <br/><br/>
            </div>


            <div class="check">
                <span>show password :</span>
                <input type="checkbox" name="" onclick="myFunction()">
                
            </div>


</div>

      <input type="submit" value="submit" class="btn" name="send">
      <input type="reset" class="btn-reset" value="Reset">

      <p>already have an account? <a href="login.php"><b>Login now</b></a></p>

    </form>


</section>



<script type="text/javascript">
    function myFunction() {
        var show = document.getElementById('show');
        var show1 = document.getElementById('show1');
        if(show.type=='password' && show1.type=='password') {
            show.type='text';
            show1.type='text';
        }
        else{
            show.type='password';
            show1.type='password';
        }
    }
</script>






</body>


</html>