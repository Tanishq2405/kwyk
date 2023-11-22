<?php
include('common.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .main{
        background-image: url("backgroundpizza.jpg");
        opacity: 0.80;
    }

    .card-body p{
        color: black;
    }

    .card{
        margin: 11px;
    }
</style>
<body>
    <?php 
    $conn1 = mysqli_connect('localhost', 'root', '', 'customer');
    $conn2 = mysqli_connect('localhost', 'root', '', 'tempo');
    // include('signinphp.php');
    $Email = $_SESSION['email'];

    $sql1 = "SELECT `shoplogo` FROM `shopinfo` WHERE `Email`='$Email'";
    $run1 = mysqli_query($conn2, $sql1);

    ?>
    <div class="main">
        <div class="" style="margin: auto;">
            <div class="logo" style="text-align: center;">
                <?php  while ($row = mysqli_fetch_assoc($run1)){
                    echo '<img class="cardimg" src="data:image;base64,'.base64_encode($row['shoplogo']).' " alt="image" style="width: 200px; height: 250px;">';
                } ?>
            </div>
            <div class="desc" style="color: white; font-size: 18px; text-align:center; font-weight:bolder;">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit quos ut necessitatibus labore aliquid, nobis animi totam corporis dicta assumenda enim atque beatae, perspiciatis quasi quo, esse quis possimus iusto!
                Provident commodi impedit accusamus magni vel adipisci quos, ipsam totam. Incidunt, ipsa ullam et soluta illum deleniti quidem a, magnam placeat iure, velit minus quasi aut recusandae sit. Quae, nisi!
                Aspernatur iure labore doloremque vero? Delectus soluta quam cum eligendi nulla fuga hic et vero. Similique excepturi dignissimos voluptas itaque, hic incidunt obcaecati sequi blanditiis, quos aliquid tempore ab odit?
            </div>                
        </div>
    </div>

    <div class="container" style="margin: auto; text-align:center;">
        <div class="row" style="margin: auto;">
        
              <?php
                  include('connection.php');
                  $Email = $_SESSION['email'];
                  $sql = "SELECT * FROM `products` WHERE `Email`='$Email'";
                  $result = mysqli_query($conn, $sql);

                  $num = mysqli_num_rows($result);
      
                  if ($num > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {

              ?>
                <div class="card col-md-2" style="width: 18rem;">
                    <div class="imgs"><?php echo '<img class="cardimg" src="data:image;base64,'.base64_encode($row['productimage1']).' " alt="image" style="width: 250px; height: 250px;">'; ?></div>
                    <div class="card-body">
                        <h5 class="card-title">Product name:<?php echo $row['productname']; ?></h5>
                        <p style="margin: 0px;" class="card-text"><?php echo $row['productdesc']; ?></p>
                        <p style="margin: 0px;" class="card-text">Price:<?php echo $row['productprice']; ?> | Offer price:<?php echo $row['productoffer']; ?></p>
                        <form action="" method="POST">
                            <label for="">Quantity</label>
                            <input id="quantity" name="quantity" style="width: 70px; margin: 10px;" type="number" value="1">
                            <button style="height: 30px;" class="btn-secondary" name="set">Set</button>
                        </form>  
                        
                            <button name="upload" class="btn btn-primary"><?php
                                echo "
                                <td><a href='addtocart.php?productid=$row[productid]&productname=$row[productname]&productdesc=$row[productdesc]&productprice=$row[productprice]&productoffer=$row[productoffer]&mermail=$row[Email]'>Add To Cart</a></td>
                                ";?>
                            </button>

                            <button class="btn btn-warning">
                                <?php
                                echo "
                                <td><a href='buy.php?productid=$row[productid]&productname=$row[productname]&productprice=$row[productprice]&productoffer=$row[productoffer]&mermail=$row[Email]'>Buy Now</a></td>  
                                ";
                                ?>
                            </button>
                        </form>
                    </div>
                </div>

              <?php                      
                    }
                }
              ?>
          
        </div>
    </div>

</body>
</html>

<?php
include('footer.php')
?>