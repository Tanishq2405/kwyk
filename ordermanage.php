<?php
include('common.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWYK | Order Management</title>
    <link rel="stylesheet" href="ordermanage.css">
</head>
<style>
    td a{
        color: white;
    }

    td a:hover{
        color: white;
    }
</style>
<body>

    
        <div class="row">
            <div class="index bg-dark col-md-3">
                <?php
                    include('common2.php');
                ?>
            </div>

            <div class="space1 col-md-9">
                <div style="margin: auto;" class="upl1 col-md-11">
                    <table>
                        <thead>
                            <th>Order id</th>
                            <th>User Mail</th>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Product Price</th>
                            <th>Product Offer Price</th>
                            <th>Status</th>
                        </thead>
                        <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'tempo');
                        $Email = $_SESSION['email'];
                        $conn2 = new mysqli('localhost', 'root', '', 'customer');

                        $sql = "SELECT * FROM `buy` WHERE `mermail`= '$Email' ORDER BY `orderid` DESC";
                        $result = mysqli_query($conn2, $sql);
                        
                        while($row = mysqli_fetch_array($result)){
                            $orderid = $row['orderid'];
                            $sql4 = "SELECT *FROM `orders` WHERE `orderid`=$orderid";
                            $run4 = mysqli_query($conn, $sql4);
                            while($row2 = mysqli_fetch_array($run4)){

                        ?>
                        <tr>
                            <td>Order no.: <?php echo $row['orderid'] ?></td>
                            <td>User Mail: <?php echo $row['usermail'] ?></td>
                            <td>Product ID: <?php echo $row['productid'] ?></td>
                            <td><?php echo $row['productname'] ?></td>
                            <td><?php echo $row['quantity'] ?></td>
                            <td><?php echo $row['productprice'] ?></td>
                            <td><?php echo $row['productoffer'] ?></td>
                            <td><?php echo $row2['status'];?></td>
                            <td>
                                <table class="statustable">
                                    <tr class="statusrow">
                                        <td class="statusbtn"><button class="btn btn-success"><?php
                                            echo "
                                            <a href='acceptorder.php?orderid=$row[orderid]&productid=$row[productid]&productname=$row[productname]&productprice=$row[productprice]&productoffer=$row[productoffer]&usermail=$row[usermail]&mermail=$row[mermail]&quantity=$row[quantity]'>Accept</a>
                                            ";
                                        ?></button></td>
                                        <td class="statusbtn"><button class="btn btn-primary"><?php
                                            echo "
                                            <a href='preparingorder.php?orderid=$row[orderid]&productid=$row[productid]&productname=$row[productname]&productprice=$row[productprice]&productoffer=$row[productoffer]&usermail=$row[usermail]&mermail=$row[mermail]&quantity=$row[quantity]'>Preparing</a>
                                            ";
                                        ?></button></td>
                                    </tr>
                                    <tr class="statusrow">
                                        <td class="statusbtn"><button class="btn btn-warning"><?php
                                            echo "
                                            <a href='outfordelievery.php?orderid=$row[orderid]&productid=$row[productid]&productname=$row[productname]&productprice=$row[productprice]&productoffer=$row[productoffer]&usermail=$row[usermail]&mermail=$row[mermail]&quantity=$row[quantity]'>Dispatch</a>
                                            ";
                                        ?></button></td>
                                        <td class="statusbtn"><button class="btn btn-danger"><?php
                                            echo "
                                            <a href='rejectorder.php?orderid=$row[orderid]&productid=$row[productid]&productname=$row[productname]&productprice=$row[productprice]&productoffer=$row[productoffer]&usermail=$row[usermail]&mermail=$row[mermail]&quantity=$row[quantity]'>Reject</a>
                                            ";
                                        ?></button></td>
                                    </tr>
                                    <tr style="border: none; margin:0px; height:58px;">
                                        <td class="statusbtn" colspan="2" style="margin: 0px;"><button class="btn btn-info"><?php
                                            echo "
                                            <a href='delieveredorder.php?orderid=$row[orderid]&productid=$row[productid]&productname=$row[productname]&productprice=$row[productprice]&productoffer=$row[productoffer]&usermail=$row[usermail]&mermail=$row[mermail]&quantity=$row[quantity]'>Delievered</a>
                                            ";
                                        ?></button></td> 
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <?php
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
  
        
</body>
</html>