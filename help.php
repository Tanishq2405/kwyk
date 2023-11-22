<?php
include('common.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWYK | Report & Summary</title>
    <link rel="stylesheet" href="help.css">
</head>
<body>

    
        <div class="row">
            <div class="index bg-dark col-md-3">
                <?php
                    include('common2.php');
                    $Email = $_SESSION['email'];
                ?>
            </div>

            <div class="space1 col-md-9">
                <!-- <div  id="helpbox" style="margin: 10px auto;" class="upl1 col-md-11  row">
                    <div class="col-md-5">
                        <button id="clkbtn1" class="btn btn-primary" onclick="myFunction1()">Approach us</button>
                    </div>
                    <div class="col-md-2">

                    </div>
                    <div  id="complaintbox" class="col-md-5">
                        <button id="clkbtn2" class="btn btn-primary" onclick="myFunction1()">Complaints from Customer</button>
                    </div>
                </div> -->

                <div class="headd">
                    <h4>Approach us</h4>
                </div>
                <form action="" method="post">
                    <div class="helpbox upl1 col-md-11">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Merachant Email</label>
                            <input class="form-control" type="text" value="<?php echo $Email ?>" aria-label="readonly input example" readonly>                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
                            <input maxlength="13" minlength="10" type="mbnum" name="mobileno" class="form-control" id="exampleFormControlInput1" placeholder="+91 9876543210">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Any Suggestions</label>
                            <textarea name="comp" class="form-control" id="exampleFormControlTextarea1" placeholder="Describe your views" rows="5"></textarea>
                            <input style="margin: 10px auto;" class="btn btn-primary submitbtn" name="submit" type="submit"></input>
                        </div>
                    </div>
                </form>

                <?php
                    include('connection.php');

                    if(isset($_POST['submit'])){

                        $mobileno = $_POST['mobileno'];
                        $comp = $_POST['comp'];
                        $query = "INSERT into `complaints` (`mailid`, `mobileno`, `comp`, `status`) values ('$Email', '$mobileno', '$comp', 'under review')";
                        $run = mysqli_query($conn, $query);

                        ?>
                        <script>
                            alert("Thank you for suggestions...🙏");
                        </script>
                        <?php

                    }

                ?>


                <!-- <div class="headd">
                    <h4>Complaints from customers</h4>
                </div>
                <div class="complaintbox upl1 col-md-11">

                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Mailid</th>
                            <th>Shop name</th>
                            <th>Complaint</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM `cfc`";
                            $result = mysqli_query($conn, $sql);
    
                            while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <form action="" method="post">
                                <?php $ids = $row['id']; ?>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['cmail'];?></td>
                                <td><?php echo $row['shopname'];?></td>
                                <td><?php echo $row['cfccom'];?></td>
                                <td><button class="btn btn-primary" name="delete">Accept</button>
                                <button class="btn btn-danger" name="delete">Delete</button></td>
                            </form>
                            
                        </tr>
                        <?php
                            }
                         ?>
                    </table>
                </div> -->
            </div>
        </div>
  
   
</body>
</html>