<?php
include('conn.php');

//If the 'RollNo' vAriable is set, We know we have to edit the Record.
if (isset($_GET['Email']))
{
    $merchant_mail=$_GET['Email'];

    //Delete Query
    $sql="DELETE FROM `shopinfo` WHERE `Email`='$merchant_mail'"; 
    //Execution
    $result = $conn->query($sql);

    if($result)
    {
        echo "Record Deleted Successfully.";
        ?>
        <script>
            location.replace("merchantmanagement.php");
        </script>

        <?php
    }
    else{
        echo "ERROR" .$sql."<br>".$conn->error;
    }
}
?>