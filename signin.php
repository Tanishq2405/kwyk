<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWYK | SIGNIN</title>
    <link rel="stylesheet" href="signin.css">
    <script src="https://kit.fontawesome.com/716d860306.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="White_on_Blue.jpg" type="image/x-icon">


</head>

<body>

    <?php
        include('signinphp.php');
    ?>

    <img src="bg.jpg" class="main" height="715vh" width="100%" alt="">

    <div class="containerlogo">
        <img src="logo.png" alt="KWYK Logo" class="logo">
                <!-- <h3 class="tagline1">Delivering City's Best<br>to your Doorstep</h3> -->
        <!-- <h1 class="tagline2">#just<b style="color: #4bb1DF;">kwyk</b>it</h1> -->

    </div>
    
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="container">

            <div class="login_div">
                <h3 class="Signin_text"><b>Sign In</b></h3> 
                
                <input type="email" class="signup_email_input" name="eid" placeholder="Email" required >
                <i class="fa fa-envelope" arto-hidden="true" id="emailicon"></i>

                <input type="password" name="password" class="password_input" placeholder="Password">
                <i class="fa fa-lock" aria-hidden="true"></i>

                <h5 class="forgot_text"><a href="recover_email.php" target="recover_email.php" ><b>Forgot Password?</b></a></h5>
                <button class="login_btn" name = "submit" id="login"><b>SignIn</b></button>
                
                <h5 class="dont_accounttext">Dont have account? <span class="signup_now" ><a href="signup.php" target = "signup.php" >Sign Up</a></span></h5>

                <h5 class="social_text"><b>Follow us on</b></h5> 
                
                <div class="facebook"><a href="http://www.facebook.com/Kwyk.One/" target="_blank" class="iconc"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                <div class="twitter"><a href="http://twitter.com/kwyk_one" target="_blank" class="iconc"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                <div class="instagram"><a href="http://www.instagram.com/kwyk.one/" target="_blank" class="iconc"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>

            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script>
            $(function(){
                Swal.fire({
                    title: 'Welcome to Kwyk',
                    text: 'Please Sign In or Sign Up as MERCHANT',
                    imageUrl: 'logo.png',
                    imageWidth: 300,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    animation: true,
                    customClass: {
                        popup: 'animated tada'
                    }
                })
            });

        </script>

    </form>
</body>

</html>