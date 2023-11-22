<?php
$conn = new mysqli('localhost', 'root', '', 'customer');

//If the 'RollNo' vAriable is set, We know we have to edit the Record.
if (isset($_GET['mid']))
{
    $customer_id=$_GET['mid'];

    //Delete Query
    $sql="DELETE FROM `emailverif` WHERE `mid`='$customer_id'"; 
    //Execution
    $result = $conn->query($sql);

    if($result)
    {
        echo "Record Deleted Successfully.";
        ?>
        <script>
            location.replace("customer.php");
        </script>

        <?php
    }
    else{
        echo "ERROR" .$sql."<br>".$conn->error;
    }
}
?>