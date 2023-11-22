<?php
 include('common.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWYK | Update Product</title>
    <link rel="stylesheet" href="addproduct.css">
</head>
<body>
<div class="row">
            <div class="index bg-dark col-md-3">
                <?php
                    include('common2.php');
                ?>
            </div>

            <div class="space1 col-md-9">
                <div class="addprod">
                    <?php
                        include('conn.php');
                        $productname = $_GET['productname'];
                        $productdesc = $_GET['productdesc'];
                        $productprice = $_GET['productprice'];
                        $productoffer = $_GET['productoffer'];
                        
                    ?>
                    <form method="post" enctype="multipart/form-data">

                        <div style="margin: 20px;" class="box productname">
                            <input style="width: 500px;" type="text" class="form-control" id="exampleInputFName" aria-describedby="Productnamehelp" value="<?php echo $productname;?>" name="productname" required>
                        </div>

                        <div style="margin: 20px;" class="box productname">
                            <input style="width: 500px;" type="text" class="form-control" id="exampleInputFName" aria-describedby="Productnamehelp" value="<?php echo $productdesc;?>" name="productdesc" required>
                        </div>

                        <div style="margin: 20px;" class="box productimage">
                            <?php
                            $productid = $_GET['productid'];
                            $sql2 = "SELECT *FROM `products` WHERE `productid`='$productid'";
                            $run2 = mysqli_query($conn, $sql2);

                            while($row=mysqli_fetch_array($run2)){
                            ?>
                            <label for="">Upload image</label>
                            <input style="width: 500px;" type="file" class="form-control" id="exampleInputFName" aria-describedby="Productnamehelp" name="productimage1" value="<?php $row['productimage1'] ?>">
                            <label for="">Upload image</label>
                            <input style="width: 500px;" type="file" class="form-control" id="exampleInputFName" aria-describedby="Productnamehelp" name="productimage2" value="<?php $row['productimage2'] ?>">
                            <?php
                            }
                            ?>
                        </div>

                        <div style="margin: 20px;" class=" box productprice">
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="priceHelp" value="<?php echo $productprice ?>" name="productprice" required>
                        </div>

                        <div style="margin: 20px;" class=" box productoffer">
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="priceHelp" value="<?php echo $productoffer ?>" name="productoffer" required>
                        </div>



                        <div style="margin: 20px;" class="box panel">
                            <select class="form-select" aria-label="Default select example" name="category">
                                <option selected>Category</option>
                                <option value="1">Soup</option>
                                <option value="2">Starters</option>
                                <option value="3">Hot drinks</option>
                                <option value="4">Breakfast</option>
                                <option value="5">Main Course</option>
                                <option value="6">Roti</option>
                                <option value="7">Rice</option>
                                <option value="8">Desert</option>
                                <option value="9">Cold Drinks</option>
                            </select>
                        </div>

                        <!-- <div style="margin: 20px;" class="box form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                            <label class="form-check-label" for="flexCheckDefault">
                                Agree Terms & Conditions
                            </label>
                        </div> -->

                        <section style="margin: 20px;" style="text-align: center;"><button class="btn btn-primary me-auto" name="update">Update</button></section>
                    </form>
                    <?php
                        
                    ?>
                </div>
            </div>
        </div>

        <?php
            include('connection.php');

            if(isset($_POST['update'])){
                $productname = $_POST['productname'];
                // $productid = $_POST['productid'];
                $file1 = addslashes(file_get_contents($_FILES["productimage1"]["tmp_name"]));
                $file2 = addslashes(file_get_contents($_FILES["productimage2"]["tmp_name"]));
                $productprice = $_POST['productprice'];
                $productoffer = $_POST['productoffer'];
                $category = $_POST['category'];
                $productid = $_GET['productid'];

                $query = "UPDATE `products` SET `productname` = '$productname', `productprice`='$productprice', `productoffer`='$productoffer', `category`='$category', `productimage1`='$file1', `productimage2`='$file2' WHERE `productid` = '$productid'";

                $run = mysqli_query($conn, $query);

                if($run){
                    ?>
                    <script>alert("Product updated SUCCESSFULLY")</script>
                    <?php
                }else{
                    ?>
                    <script>alert("Product updatedion failed")</script>
                    <?php
                }

            }

        ?>
</body>
</html>