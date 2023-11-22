
<?php
include "conn.php";
error_reporting(0);

//On clicking Submit Button, Process the form.
if(isset($_POST['submit']))
{
    //Get variables from the form.
    $e = $_POST['eid'];
    
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    

    $emailquery = " select * from emailverif where email='$e' ";
    $query = mysqli_query($conn,$emailquery);


    $emailcount = mysqli_num_rows($query);

    if($emailcount){

        $userdata = mysqli_fetch_array($query);

        $username = $userdata['Email'];
        $id = $userdata['mid'];
        // $token = $userdata['token'];

           $subject = "Password Reset";
           $body = "Hii, $username. Click here to reset your Password....Your ID is $id.
           http://localhost/kwykpr/reset_password.php?id=$id ";
           $sender_email = "From: vishwajeet.pawarrr@gmail.com";

           if(mail($e, $subject, $body, $sender_email)){
               ?>
            <script>
                alert("Check your mail to reset your password!!!!");
            </script>
        <?php
               header('location:signin.php');
           }else{
               echo "Email sending failed...";
           }
    }else{
        ?>
        <script>
        alert("This Email does not exist...Please enter valid email!!");
    </script>
    <?php
    }
   
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWYK | Reset Password</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="shortcut icon" href="White_on_Blue.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/716d860306.js" crossorigin="anonymous"></script>
</head>
<style>
    .container{
    height: 250px;
    width: 400px;
    background-color: #A5D8EF;
    transition: all ls linear;
    border-radius: 20px;
    box-shadow: rgba(0,0,0,0.24) 0px 3px 8px;
    position: absolute;
    top: 320px;
    left: 50%;
    transform: translate(-50%, -50%);
    overflow: hidden;
    }

    input{
        width: 300px;
    }

    .signup_text{
        position:absolute;
        width: 400px; 
        top: 45px;
        color: black; 
        transform:translate(-50%, -50%); 
        font-size: 35px; 
        margin-left: 90px;
    }
    .ip{
        margin-top:35px; 
    }
    #emailicon {margin-top:30px;}
    .signup_btn{margin-top:38px;}
</style>

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
                <h3  class="signup_text"><b>Enter Email</b></h3>

                <input type="email" class="ip" name="eid" placeholder="Email" required >
                <i class="fa fa-envelope" arto-hidden="true" id="emailicon"></i>

                <button class="signup_btn" name="submit"><b>Send mail</b> </button>
                 

            
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- <script type=text/javascript>
            $(document).ready(function(){
                $('.signup_btn').click(function(){
                    Swal.fire({
                        title: 'Check Your Mail',
                        text: '',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    })
                });
            });
        </script> -->
    </form>
</body>
</html>