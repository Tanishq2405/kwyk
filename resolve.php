<?php
include('conn.php');
$complaintno = $_GET['complaintno'];

$sql1 = "UPDATE `complaints` SET `status`='resolved' WHERE `complaintno`='$complaintno'";
$run1 = mysqli_query($conn, $sql1);
?>

<script>
    location.replace('http://localhost/kwykpr/suggestions.php');
</script>