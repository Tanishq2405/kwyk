<?php
include('common.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWYK | Store Details</title>
    <link rel="stylesheet" href="storedetails.css">

    <style>
        
    </style>
</head>
<body>

    
        <div class="row">
            <div class="index bg-dark col-md-3">
                <?php
                    include('common2.php');
                ?>
            </div>

            <div class="space1 col-md-9">
                <div class="upl1 col-md-9">
                    <?php 
                        include('conn.php');
                        $mail = $_SESSION['email'];
                        $sql = "SELECT *FROM `shopinfo` WHERE `Email`='$mail'";

                        $run = mysqli_query($conn, $sql);

                        $count = mysqli_num_rows($run);
                        if($count == 1){
                    ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <h3 style="font-family: 'Ubuntu', sans-serif; text-align:center;">Store Details</h3>
                            
                            <?php
                                include('connection.php');
                                $Email = $_SESSION['email'];
                                
                                $sql = "SELECT * FROM `shopinfo` WHERE `Email` = '$Email'";
                                $result = mysqli_query($conn, $sql);

                                while($row = mysqli_fetch_array($result)){

                            ?>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Enter your brand Shop name</label>
                                <input name="shopname" type="text" class="form-control" id="shopname" aria-describedby="" value=<?php echo $row['shopname']?>>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Shop no.</label>
                                <input name="shopno" type="text" class="form-control" id="shopno" aria-describedby="" value=<?php echo $row['shopno']; ?>>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Landmark</label>
                                <input name="shoplandm" type="text" class="form-control" id="shoplandm" aria-describedby="" value=<?php echo $row['shoplandm']; ?>>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Street, Area/City</label>
                                <input name="shoparea" type="text" class="form-control" id="shoparea" aria-describedby="" value=<?php echo $row['shoparea']; ?>>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pincode</label>
                                <input name="shoppincode" type="text" class="form-control" id="shoppincode" aria-describedby="" value=<?php echo $row['shoppincode']; ?>>
                            </div>
                            
                            <!-- <div class="mb-3 map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30267.436504912894!2d73.80948017806395!3d18.509480516488086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1650006739481!5m2!1sen!2sin" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div> -->

                            <label for="" class="form-label">Store Link</label><br>
                            <div class="input-group mb-3">
                                <input type="text" value=<?php echo $row['link']; ?> id="myText" name="url" class="form-control box" aria-describedby="basic-addon2">
                                <button style="color: black;" id="trybtn" style="border: none;" type="button" class="btn btn-dark but" onclick="myFunction()" id="tryy"><a href="#" class="link1">Try Link</a></button>
                                <div id="demo" class="form-text"></div>
                            </div>

                            <div class="anim" style="margin-top: 30px;">
                                <input class="btn btn-primary" onclick="ani()" type="submit" name="update" value="Update data"><br>
                                <!-- <div>
                                    <img id="bike" src="submit.png" alt="" height="100px" width="100px">
                                </div> -->
                            </div>

                            <?php
                                }
                            ?>
                            
                        </form>

                    <?php
                        }
                        else{
                    ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <h3 style="font-family: 'Ubuntu', sans-serif; text-align:center;">Store Details</h3>
                       
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Shop name</label>
                                <input name="shopname" type="text" class="form-control" id="shopname" aria-describedby="" placeholder="Shop name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Shop no.</label>
                                <input name="shopno" type="text" class="form-control" id="shopno" aria-describedby="" placeholder="Shop No">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Landmark</label>
                                <input name="shoplandm" type="text" class="form-control" id="shoplandm" aria-describedby="" placeholder="Shop Landmark" ?>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Street, Area/City</label>
                                <input name="shoparea" type="text" class="form-control" id="shoparea" aria-describedby="" placeholder="Shop Area">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pincode</label>
                                <input name="shoppincode" type="text" class="form-control" id="shoppincode" aria-describedby="" placeholder="Shop PINCODE">
                            </div>
                            
                            <!-- <div class="mb-3 map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30267.436504912894!2d73.80948017806395!3d18.509480516488086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1650006739481!5m2!1sen!2sin" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div> -->

                            <label for="" class="form-label">Store Link</label><br>
                            <div class="input-group mb-3">
                                <input type="text" placeholder="Enter Shop name and try link" id="myText" name="url" class="form-control box" aria-describedby="basic-addon2">
                                <button style="color: black;" id="trybtn" style="border: none;" type="button" class="btn btn-dark but" onclick="myFunction()" id="tryy"><a href="#" class="link1">Try Link</a></button>
                                <div id="demo" class="form-text"></div>
                            </div>

                            <div class="anim" style="margin-top: 30px;">
                                <input class="btn btn-primary" onclick="ani()" type="submit" name="update" value="Update data"><br>
                                <!-- <div>
                                    <img id="bike" src="submit.png" alt="" height="100px" width="100px">
                                </div> -->
                            </div>

                        <?php
                            }
                        ?>
                        
                        </form>
                </div>
            </div>
        </div>

        <!-- <script>
            function ani() {
                document.getElementById('bike').className = 'classname';
            }
        </script> -->
        <script>
            // Here the value is stored in new variable x 
            function myFunction() {
            var x = document.getElementById("myText").value;
            document.getElementById("demo").innerHTML = x + ".kwyk.com";
            }
        </script>
        
<?php 

    include('conn.php');

    if(isset($_POST['update'])){

        $shopname = $_POST['shopname'];
        $shopno = $_POST['shopno'];
        $shoplandm = $_POST['shoplandm'];
        $shoparea = $_POST['shoparea'];
        $shoppincode = $_POST['shoppincode'];
        $Email = $_SESSION['email'];
        $url = $_POST['url'];

        $query = "UPDATE `shopinfo` SET shopno='$shopno', shopname='$shopname', shoplandm='$shoplandm', shoparea='$shoparea', shoppincode='$shoppincode', link='$url' WHERE Email='$Email'";
        // $query = "INSERT INTO `shopinfo` (`Email`, `shopno`,`shopname`, `shoplandm`,`shoparea`, `shoppincode`, `link`) VALUES('$Email', '$shopno', '$shopname', '$shoplandm', '$shoparea', '$shoppincode') WHERE Email='$Email'";

        $run = mysqli_query($conn, $query);

    }


?>      
  
</body>
</html>