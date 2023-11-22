<?php
include('navadmin.php');

$conn1 = new mysqli('localhost', 'root', '', 'customer');
$conn2 = new mysqli('localhost', 'root', '', 'tempo');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWYK | Edit Order</title>
    <link rel="stylesheet" href="uploaddoc.css">
    <link rel="stylesheet" href="https://www.w3schools.com/html/styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<style>
    .ipes{
        padding: 5px;
    }
</style>
<body style="background-color: white;">
    <div class="row">
		<div class="index bg-dark col-md-3">
			<?php
                include('admin.php');
            ?>
		</div>

        <div class="space1 col-md-9">
            <div class="upl1 col-md-9">
                <?php
                    $mid = $_GET['mid'];
                    $sql1 = "SELECT *FROM `emailverif` WHERE `mid`=$mid";
                    $run1 = mysqli_query($conn1, $sql1);

                    while($row = mysqli_fetch_array($run1)){
                ?>

                <form class="row" action="" method="post">
                    <fieldset style="border:none">
                        <legend style="text-align:center">
                            <h2><b> Customer Update INFORMATION </b></h2>
                        </legend>
                        ID: <br>
                        <input class="col-md-12 ipes" type="number" size="30" name="mid" placeholder=<?php echo $mid ?> disabled/>
                        <br><br>
                        Name: <br>
                        <input class="col-md-12 ipes" type="text" size="30" name="Name" value=<?php echo $row['Name'] ?> required/>
                        <br><br>
                        Phone Number: <br>
                        <input class="col-md-12 ipes" type="number" name="Phone" value=<?php echo $row['Phone'] ?> required />
                        <br><br>
                        Email Address: <br>
                        <input class="col-md-12 ipes" type="text" name="Email" value=<?php echo $row['Email'] ?> required/>
                        <br><br>
                        Password: <br>
                        <input class="col-md-12 ipes" type="text" name="Password" value=<?php echo $row['Password'] ?> required/>
                        <br><br>
                        <input class="btn btn-primary" type="submit" value="Update" name="update" />
                    </fieldset>
                </form>

                <?php 
                    }
                    if(isset($_POST['update'])){
                        $customerid = $_GET['mid'];
                        $Name = $_POST['Name'];
                        $Phone = $_POST['Phone'];
                        $Email = $_POST['Email'];
                        $Password = $_POST['Password'];

                        $sql1 = "UPDATE `emailverif` SET `Name`='$Name', `Phone`='$Phone', `Email`='$Email', `Password`='$Password' WHERE `mid`='$customerid'";
                        $run1 = mysqli_query($conn1, $sql1);

                        if($run1){
                            ?>
                                <script>
                                    alert("Customer Details UPDATED SUCCESSFULLY");
                                </script>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
                    
    </div>   
</body>
</html> 