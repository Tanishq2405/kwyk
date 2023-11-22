<?php
    include('conn.php');
    session_start();

    if(isset($_POST['submit'])){
        $email = $_POST['eid'];
        $password = $_POST['password'];

        // $email_search = "SELECT *FROM `emailverif` WHERE `Email` = '$email'";
        $email_search = "SELECT *FROM `admin` WHERE `adminmail` = '$email'";
        $query = mysqli_query($conn, $email_search);

        // if (!empty($email_search) && $query !== true) {
        //     return @mysqli_num_rows($query);
        // }

        $emailcount = mysqli_num_rows($query);

        if($emailcount){
            $email_pass = mysqli_fetch_assoc($query);
            $db_pass = $email_pass['password'];
            $pass_verify = password_verify($password, $db_pass);

            if($db_pass == $password){
                $_SESSION['email'] = $email;
                
                ?>
                <script>
                    location.replace("http://localhost/kwykpr/ordermanagementadmin.php");
                </script>

                <?php
            }
            else{
                echo "Password Incorrect";
            }

        
        }

    }
?>