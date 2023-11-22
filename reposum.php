<?php
include('common.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWYK | Report & Summary</title>
    <link rel="stylesheet" href="reposum.css">
</head>

<style>
    th{
        height: 50px;
        width: 180px;
        border: 1px solid black;
        text-align: center;
        margin: auto;
    }

</style>

<body>

    
        <div class="row">
            <div class="index bg-dark col-md-3">
                <?php
                    include('common2.php');
                    $mermail = $_SESSION['email'];
                ?>
            </div>

            <div class="space1 col-md-9">
                <div style="margin: auto;" class="upl1 col-md-11">
                    <table>

                        <tr>
                            <th>Order ID</th>
                            <th>Product ID</th>
                            <th>Productn Name</th>
                            <th>Quantity</th>
                            <th>Product Price</th>
                            <th>Product Offer</th>
                            <th>Ordered at</th>
                            <th>Delievered To</th>
                            <th>Status</th>
                        </tr>


                        <tr>
                            <?php

                                $sql = "SELECT * FROM `orders` WHERE `mermail`='$mermail' ORDER BY `orderid` DESC";
                                $result = mysqli_query($conn, $sql);

                                while($row = mysqli_fetch_array($result)){
                            ?>
                            <td><?php echo $row['orderid']; ?></td>
                            <td><?php echo $row['productid']; ?></td>
                            <td><?php echo $row['productname']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo $row['productprice']; ?></td>
                            <td><?php echo $row['productoffer']; ?></td>
                            <td><?php echo $row['mermail']; ?></td>
                            <td><?php echo $row['usermail']; ?></td>
                            <td><?php echo $row['status'];?></td>
                        </tr>

                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
  
        
</body>
</html>