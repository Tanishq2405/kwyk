
<?php
include "conn.php";
// error_reporting(0);

//On clicking Submit Button, Process the form.
if(isset($_POST['submit']))
{
    //Get variables from the form.
    $p = $_POST['pno'];
    $e = $_POST['eid'];
    $pass = $_POST['password'];

    $emailquery = "SELECT *FROM emailverif WHERE email='$e' ";
    $query = mysqli_query($conn,$emailquery);


    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
        ?>
       <script>
                alert("Email already exists please enter another email id!!!!");
            </script>
            <?php
        exit();
    }
    else{
        $insertquery = "INSERT INTO `emailverif`(`Phone`, `Email`, `Password`) VALUES('$p','$e','$pass') ";
        $sql1 = "INSERT INTO `shopinfo`(`Email`) VALUES('$e')";
        $run1 = mysqli_query($conn, $sql1);
        $iquery = mysqli_query($conn, $insertquery);
        $conn->close();
        if($iquery)
        {
            
            ?>
            <script>
                alert("Account created SUCCESSFULLY..!");
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert("Account creation FAILED..!");
            </script>
            <?php
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
    <title>KWYK | SIGNUP</title>
    <link rel="stylesheet" href="signup.css">
    <script src="https://kit.fontawesome.com/716d860306.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="White_on_Blue.jpg" type="image/x-icon">
</head>

<body>
    
    <img src="bg.jpg" class="main" height="715vh" width="100%" alt="">
    <div class="containerlogo">
        <img src="logo.png" alt="KWYK Logo" class="logo">
        <!-- <h3 class="tagline1">Delivering City's Best<br>to your Doorstep</h3> -->
        <!-- <h1 class="tagline2">#just<b style="color: #4bb1DF;">kwyk</b>it</h1> -->
    </div>
    
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="container">

            <div class="registration_div">
                <h3 class="signup_text"><b>Sign Up</b></h3>

                <input id="mbno" class="ip" minlength="10" maxlength="13" type="tel" class="signup_username_input" name="pno" placeholder="Mobile No." required>
                <i class="fa fa-user" aria-hidden="true" id="usericon"></i>

                <input id="mail" class="ip" type="email" class="signup_email_input" name="eid" placeholder="Email" required >
                <i class="fa fa-envelope" arto-hidden="true" id="emailicon"></i>

                <input id="pass" class="ip" type="password" class="signup_password_input" name="password" placeholder="Password" required>
                <i class="fa fa-lock" aria-hidden="true" id="lockicon"></i>

                <div class="tandd" style="margin: 20px;" class="box form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                    <label class="form-check-label" for="flexCheckDefault">
                        <a class="tdl" href="https://www.kwyk.store/terms-and-conditions">Agree Terms and Conditions</a>
                    </label>
                </div>

                <button class="signup_btn" name="submit"><b>SignUp</b> </button>
                
                <h5 class="already_accounttext">Already have an account? <span class="signin_now" ><a href="signin.php" >Sign In</a></span></h5>

                <h5 class="social_text2"><b>Follow us</b> </h5>

                <div class="links">
                    <div class="facebook2"><a href="http://www.facebook.com/Kwyk.One/" target="_blank" class="iconc"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                    <div class="twitter2"><a href="http://twitter.com/kwyk_one" target="_blank" class="iconc"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                    <div class="instagram2"><a href="http://www.instagram.com/kwyk.one/" target="_blank" class="iconc"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                </div>
            
            </div>
        </div>
        
        
    </form>
</body>
</html>