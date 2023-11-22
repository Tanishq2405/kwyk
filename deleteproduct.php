<?php
    include('connection.php');

    if(isset($_POST['delete'])){
        $id = $_GET['productid'];
        $query = "DELETE from `products` WHERE productid = '$id'";
        $data = mysqli_query($conn, $query);

        if($data){
            ?>
                <script>
                    alert('Product Deleted Successfully');
                    window.open('productmanage.php', '_self');
                </script>
            <?php
        }
        else{
            echo "Error in deleting record";
        }

    }
?>
