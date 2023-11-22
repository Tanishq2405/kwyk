<?php
    include('conn.php');
    $conn2 = mysqli_connect('localhost', 'root', '', 'customer');
    
    $orderid = $_GET['orderid'];

    $sqlquery2 = "UPDATE `orders` SET `status`='reject' WHERE `orderid`=$orderid";
    $run2 = mysqli_query($conn, $sqlquery2);

    header("Location: ordermanage.php");

?>