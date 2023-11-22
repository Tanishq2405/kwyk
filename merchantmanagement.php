<?php
include('navadmin.php');

include('conn.php');

//Query from getting data from table
$sql = "SELECT * FROM `shopinfo`";

//Execute Query
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KWYK | Merchant Management</title>
	<link rel="stylesheet" href="admindash.css">

	<style>

	</style>
</head>

<style>
	td a{
		margin: 2px;
	}
</style>

<body>
	<div class="row">
		<div class="index bg-dark col-md-3">
			<?php
                    include('admin.php');

					$sql1 = "SELECT * FROM `shopinfo`";
					$run1 = mysqli_query($conn, $sql1);
					$count1 = mysqli_num_rows($run1);
               ?>
		</div>

		<div class="space1 col-md-9">
			<div class="upl1 col-md-12">
				<div class="card-list">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
							<div class="card blue">
								<div class="title">Total Merchants</div>
								<div class="value"><?php echo $count1 ?></div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
							<div class="card green">
								<div class="title">Current Merchants</div>
								<div class="value">51</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
							<div class="card orange">
								<div class="title">Pending Merchants</div>
								<div class="value">564</div>
							</div>
						</div>
					</div>
				</div>
				<div class="projects mb-4">
					<div class="projects-inner">
						<header class="projects-header">
							<div class="title"><b>Shop Information</b></div>
						</header>
						<hr>
						<table class="projects-table">
							<thead>
								<tr>
									<th> Name of Shop </th>
									<th> Shop No. </th>
									<th> Email </th>
									<th> License Number </th>
									<th> Store Link </th>
									<th> Address </th>
									<th> Pincode </th>
								</tr>
							</thead>
							<tbody>
								<?php
								if ($result->num_rows>0)
								{
									//Output Data of each row
								while ($row =$result->fetch_assoc())
								{
									?>
									<tr>
										<td><?php echo $row['shopname'];?></td>
										<td><?php echo $row['shopno'];?></td>
										<td><?php echo $row['Email'];?></td>
										<td><?php echo $row['shoplicenseno'];?></td>
										<td><?php echo $row['link'];?></td>
										<td><?php echo $row['shoplandm'];?></td>
										<td><?php echo $row['shoppincode'];?></td>
										<td><a class="btn btn-info" href="editshop.php?Email=<?php echo $row['Email']; ?>">EDIT SHOP</a></td>
										<td><a class="btn btn-info" href="editmerchant.php?Email=<?php echo $row['Email']; ?>">EDIT MERCHANT</a></td>
										<td><a class="btn btn-danger" href="deletemerchant.php?Email=<?php echo $row['Email']; ?>">DELETE</a></td>
										</td>
										
									</tr>
									<?php }
									} ?> 
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>