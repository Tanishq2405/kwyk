<?php
    include('conn.php');
    $conn2 = mysqli_connect('localhost', 'root', '', 'customer');
    
    $orderid = $_GET['orderid'];
    $productid = $_GET['productid'];
    $productname = $_GET['productname'];
    $quantity = $_GET['quantity'];
    $productprice = $_GET['productprice'];
    $productoffer = $_GET['productoffer'];
    $mermail = $_GET['mermail'];
    $usermail = $_GET['usermail'];

    $sqlquery1 = "INSERT INTO `orders`(`orderid`, `productid`, `productname`, `quantity`, `productprice`, `productoffer`, `mermail`, `usermail`) VALUES ('$orderid', '$productid', '$productname', '$quantity', '$productprice', '$productoffer', '$mermail', '$usermail')";
    $run1 = mysqli_query($conn, $sqlquery1);

    $sqlquery2 = "UPDATE `orders` SET `status`='accept' WHERE `orderid`=$orderid";
    $run2 = mysqli_query($conn, $sqlquery2);

    header("Location: ordermanage.php");

?>