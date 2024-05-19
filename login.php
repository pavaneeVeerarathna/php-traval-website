<?php

$connection = mysqli_connect('localhost','root','','travel1');

if(isset($_POST["send"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($connection, "SELECT * FROM register_form WHERE email = '$email'");

    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index1.php");
        }
        else{
            $message[] = 'Wrong password!';
        }
    }
    else{
        $message[] = 'User not registered!';
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

    <h1 class="heading-title">login now</h1>


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
                <p><span>email :</span></p>
                <input type="email" placeholder="enter your email" name="email" required>
                <div class="error"></div>
            </div>
        


        
            <div class="inputBox">
                <p><span>password :</span></p>
                <input type="password" placeholder="enter your password" name="password" id="show" required>
                <div class="error"></div>
                
            </div>


            <div class="check">
                <span>show password :</span>
                <input type="checkbox" name="" onclick="myFunction()">
                
            </div>


</div>

      <input type="submit" value="submit" class="btn" name="send">
      <input type="reset" class="btn-reset" value="Reset">

      <p>Don't have an account? <a href="register.php"><b>Register now</b></a></p>
      

    </form>


</section>


<script type="text/javascript">
    function myFunction() {
        var show = document.getElementById('show');

        if(show.type=='password') {
            show.type='text';

        }
        else{
            show.type='password';
        
        }
    }
</script>






</body>
</html>