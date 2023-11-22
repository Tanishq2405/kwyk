<?php
 include('common.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWYK | Add Product</title>
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
                    <form method="post" enctype="multipart/form-data">

                        <div style="margin: 20px;" class="box productname">
                            <input style="width: 500px;" type="text" class="form-control" id="exampleInputFName" aria-describedby="Productnamehelp" placeholder="Product name" name="productname" required="required">
                        </div>

                        <div style="margin: 20px;" class="box productname">
                            <input style="width: 500px;" type="text" class="form-control" id="exampleInputFName" aria-describedby="Productnamehelp" placeholder="Product description" name="productdesc">
                        </div>

                        <div style="margin: 20px;" class="box productimage">
                            <label for="">Upload image*</label>
                            <input style="width: 500px;" type="file" class="form-control" id="exampleInputFName" aria-describedby="Productnamehelp" placeholder="Product name" name="productimage1" required="required">
                            <label for="">Upload image*</label>
                            <input style="width: 500px;" type="file" class="form-control" id="exampleInputFName" aria-describedby="Productnamehelp" placeholder="Product name" name="productimage2">
                        </div>

                        <div style="margin: 20px;" class=" box productprice">
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="priceHelp" placeholder="Enter price" name="productprice" required>
                        </div>

                        <div style="margin: 20px;" class=" box productoffer">
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="priceHelp" placeholder="Enter Offer price" name="productoffer" required>
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

                        <section style="margin: 20px;" style="text-align: center;"><button class="btn btn-primary me-auto" name="upload">Upload</button></section>
                    </form>
                </div>
            </div>
        </div>

        <?php
            
            include('connection.php');

            if(isset($_POST['upload'])){
                $productname = $_POST['productname'];
                $file1 = addslashes(file_get_contents($_FILES["productimage1"]["tmp_name"]));
                $file2 = addslashes(file_get_contents($_FILES["productimage2"]["tmp_name"]));
                $productprice = $_POST['productprice'];
                $productoffer = $_POST['productoffer'];
                $productdesc = $_POST['productdesc'];
                $category = $_POST['category'];
                $Email = $_SESSION['email'];

                $query = "INSERT into `products` (`Email`, `productname`, `productdesc`, `productimage1`, `productimage2`, `productprice`, `productoffer`, `category`) values ('$Email', '$productname', '$productdesc', '$file1', '$file2' , '$productprice', '$productoffer', '$category')";

                $run = mysqli_query($conn, $query);

                if($run){
                    ?>
                    <script>alert("Product added SUCCESSFULLY..!!");</script>
                    <?php
                }

                header("Location: productmanage.php");
            }

        ?>
</body>
</html>