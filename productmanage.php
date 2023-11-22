<?php
include('common.php');
// include('signinphp.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWYK | Product Management</title>
    <link rel="stylesheet" href="productmanage.css">
</head>

<style>
    td a{
        text-decoration: none;
        color: #FFFFFF;
    }

    td a:hover{
      color: #FFFFFF;
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

            <div style="margin: 20px;" class="box panel row">
                <h3>Products</h3>
            </div>

            <div class="container">
                <div class="row">

                    <div class="productrow col-md-11" style="border: 1px black dotted; border-radius: 5px;">
                        <table>
                            <tr style="background-color: rgb(188, 187, 187);">
                                <td class="col-md-2"><p style="display: inline;" class="card-title">Product ID</p></td>
                                <td class="col-md-2"><h6 style="display: inline;" class="card-title">Product Name</h6></td>
                                <td class="col-md-3">Description</td>
                                <td class="col-md-2"><p style="display: inline;" class="card-text">Price <br> Offer Price </p></td>
                                <td  class="col-md-2"><a style="display: inline;" href="addproduct.php" class="btn btn-primary">+ Add New Product</a></td>
                            </tr>
                        </table>
                    </div>

                    <?php
                        include('connection.php');
                        
                        // error_reporting(0);
                        // $conn = mysqli_connect('localhost', 'root', '', 'tempo');
                        $Email = $_SESSION['email'];

                        $sql = "SELECT * FROM `products` WHERE `Email` = '$Email'";
                        $result = mysqli_query($conn, $sql);

                        while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="productrow col-md-11">

                        <table>
                            <tr>
                                <td class="col-md-2"><p class="card-title">Product ID:<?php echo $row['productid']; ?></p></td>
                                <td class="col-md-2"><h6 class="card-title"><?php echo $row['productname']; ?></h6></td>
                                <td class="col-md-3"><?php echo $row['productdesc'] ?></td>
                                <td class="col-md-2"><p class="card-text">Price :<?php echo $row['productprice']; ?><br> Offer :<?php echo $row['productoffer']; ?></p></td>
                                <!-- <td class="col-md-2">
                                    <button class="udbtn btn btn-primary"><a style="margin-right: 12px;" href="updateproduct.php" class="btn btn-primary">Update</a></button>
                                    <button class="udbtn btn btn-danger"><a href="deleteproduct.php" class="btn btn-danger">Delete</a></button>
                                </td> -->
                                <td class="col-md-2">
                                    <button class="btn btn-primary"><?php
                                    echo "
                                    <a href='updateproduct.php?productid=$row[productid]&productname=$row[productname]&productdesc=$row[productdesc]&productprice=$row[productprice]&productoffer=$row[productoffer]'>Update</a>
                                    ";?></button>

                                    <button class="btn btn-danger">
                                    <?php
                                    echo "
                                    <a href='deleteproduct.php?productid=$row[productid]'>Delete</a>  

                                    ";
                                    ?></button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <?php
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>

    

</body>
</html>