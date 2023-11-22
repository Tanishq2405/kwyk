<?php
include('common.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWYK | Store Front</title>
    <link rel="stylesheet" href="storefront.css">

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
                <div class="container">
                    <div class="row">
                    <?php
                            include('conn.php');
                            $Email = $_SESSION['email'];
                            $sql = "SELECT * FROM `products` where `Email` = '$Email'";
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_array($result)){
                        ?>
                        <div class="card col-md-3">
                            <?php echo '<img class="cardimg" src="data:image;base64,'.base64_encode($row['productimage1']).' " alt="image" style="width: 250px; height: 250px;">'; ?>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $row['productname']; ?></h4>
                                <p class="card-title">Product ID:<?php echo $row['productid']; ?></p>
                                <p class="card-text">Price :<?php echo $row['productprice']; ?><br> Offer :<?php echo $row['productoffer']; ?></p>
                                <p>Set quantity : <input type="number" name="quantity" value="1"></p>
                                <form action="" method="POST">
                                    <a href='cartandbuy.php?id=$row[productid]'><input style="margin: 2px;" type="submit" name="addtocart" class="col-md-12 btn btn-warning" value="Add to cart"></input></a>
                                    <input style="margin: 2px;" type="submit" class="col-md-12 btn btn-primary" name="buynow" value="Buy Now"></input>
                                </form>
                            </div>
                        </div>
                            <?php
                                } 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
  
</body>
</html>