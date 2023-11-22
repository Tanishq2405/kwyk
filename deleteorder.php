<?php
    include('conn.php');
    $orderid = $_GET['orderid'];

    $sql = "DELETE FROM `orders` WHERE `orderid`='$orderid'";
    $run = mysqli_query($conn, $sql);

    if($run){
        ?>
        <script>alert("Order deleted successfully");</script>
        <?php
    }else{
        ?>
        <script>alert("Failed to delete order")</script>
        <?php
    }
?>

<script>
    location.replace("http://localhost/kwykpr/ordermanagementadmin.php");
</script>