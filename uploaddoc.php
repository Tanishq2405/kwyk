 <?php
include('common.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWYK | Upload Document</title>
    <link rel="stylesheet" href="uploaddoc.css">

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
                    <form action="" method="post" enctype="multipart/form-data">
                        <h3 style="font-family: 'Ubuntu', sans-serif; text-align:center;">Upload Documents</h3>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Enter your Shop license number</label>
                            <input name="shoplicenseno" type="text" class="form-control" id="shopname" aria-describedby="" placeholder="Shop license number">
                        </div>
                        
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload shop logo</label>
                            <input name="shoplogo" class="form-control" type="file" id="shoplogo">
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload shop license</label>
                            <input name="shoplicense" class="form-control" type="file" id="shoplicense">
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload GST proof</label>
                            <input name="shopgst" class="form-control" type="file" id="gstproof">
                        </div>
                        
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload your PAN</label>
                            <input name="shoppan" class="form-control" type="file" id="shoppan">
                        </div>
                        
                        <!-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                            <label class="form-check-label" for="exampleCheck1">Agree to all terms and condition*</label>
                        </div> -->
                        
                        <div class="anim">
                            <input class="btn btn-primary" onclick="" type="submit" name="upload" value="Upload data"><br>
                            <!-- <div>
                                <img id="bike" src="submit.png" alt="" height="100px" width="100px">
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
  
        <script>
            function ani() {
                document.getElementById('bike').className = 'classname';
            }
        </script>

<?php

   include('conn.php');

    if(isset($_POST['upload'])){

        
        // $shopname = $_POST['shopname'];
        $shoplicenseno = $_POST['shoplicenseno'];
        $file1 = addslashes(file_get_contents($_FILES["shoplicense"]["tmp_name"]));
        $file2 = addslashes(file_get_contents($_FILES["shopgst"]["tmp_name"]));
        $file3 = addslashes(file_get_contents($_FILES["shoppan"]["tmp_name"]));
        $file4 = addslashes(file_get_contents($_FILES["shoplogo"]["tmp_name"]));
        $Email = $_SESSION['email'];

        // $query = "INSERT into `shopinfo`(`Email`, `shopname`, `shoplicenseno`, `shoplogo`, `shoplicense`, `shopgst`, `shoppan`) values ('$Email', '$shopname', '$shoplicenseno', '$file4', '$file1', '$file2', '$file3')";
        $query = "UPDATE `shopinfo` SET `shoplicenseno`='$shoplicenseno', `shoplogo`='$file4', `shoplicense`='$file1', `shopgst`='$file2', `shoppan`='$file3' WHERE `Email`='$Email'";

        $run = mysqli_query($conn, $query);

    }

?>
</body>
</html>