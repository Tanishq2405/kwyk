<?php
include('navadmin.php');

$conn1 = mysqli_connect('localhost', 'root', '', 'tempo');
$conn2 = mysqli_connect('localhost', 'root', '', 'customer');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KWYK | Upload Document</title>
	<link rel="stylesheet" href="admindash.css">

	<style>
		a{
			margin: 5px;
		}
	</style>
</head>

<body>


	<div class="row">
		<div class="index bg-dark col-md-3">
			<?php
			include('admin.php');

			$sql1 = "SELECT *FROM `orders`";
			$run1 = mysqli_query($conn1, $sql1);
			$count1 = mysqli_num_rows($run1);

			$sql2 = "SELECT *FROM `orders` WHERE `status`='accept' OR `status`='preparing' OR `status`='dispatched'";
			$run2 = mysqli_query($conn1, $sql2);
			$count2 = mysqli_num_rows($run2);

			$sql3 = "SELECT *FROM `orders` WHERE `status`='reject'";
			$run3 = mysqli_query($conn1, $sql3);
			$count3 = mysqli_num_rows($run3);

			?>
		</div>

		<div class="space1 col-md-9">
			<div class="upl1 col-md-12">
				<div class="card-list">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
							<div class="card blue">
								<div class="title">Total Orders</div>
								<div class="value"><?php echo $count1 ?></div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
							<div class="card green">
								<div class="title">Current Orders</div>
								<div class="value"><?php echo $count2 ?></div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
							<div class="card red">
								<div class="title">Cancelled Orders</div>
								<!-- <i class="zmdi zmdi-download"></i> -->
								<div class="value"><?php echo $count3 ?></div>
								<!-- <div class="stat"><b>13</b>% decrease</div> -->
							</div>
						</div>


					</div>
				</div>

				<!-- <a href="edit.php" style="float: right; margin-bottom: 15px; " class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Edit</a> <br> -->
				<div class="projects mb-4">
					<div class="projects-inner">
						<header class="projects-header">
							<div class="title"><b>Current Orders</b></div>
							<!-- <div class="count">| 32 Projects</div> -->
							<!-- <i class="zmdi zmdi-download"></i> -->
						</header>
						
						<div class="projects mb-4">
							<div class="projects-inner">
								<header class="projects-header">
									<div class="title"><b>Shop Information</b></div>
								</header>
								<hr>
								<table class="projects-table">
									<thead>
										<tr>
											<th> Order ID </th>
											<th> Product ID </th>
											<th> Product Name </th>
											<th> Quantity </th>
											<th> Product Price </th>
											<th> Product Offer </th>
											<th> Merchant Mail </th>
											<th> Customer Mail </th>
											<th> Order Status </th>
											<th>Manage</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$sql1 = "SELECT *FROM `orders` ORDER BY `orderid` DESC";
										$run1 = mysqli_query($conn1, $sql1);
											
										while ($row =$run1->fetch_assoc())
										{
											?>
											<tr>
												<td><?php echo $row['orderid'];?></td>
												<td><?php echo $row['productid'];?></td>
												<td><?php echo $row['productname'];?></td>
												<td><?php echo $row['quantity'];?></td>
												<td><?php echo $row['productprice'];?></td>
												<td><?php echo $row['productoffer'];?></td>
												<td><?php echo $row['mermail'];?></td>
												<td><?php echo $row['usermail'];?></td>
												<td><?php echo $row['status'];?></td>
												<td><a class="btn btn-info" href="editorder.php?orderid=<?php echo $row['orderid']; ?>">EDIT</a>
												<a class="btn btn-danger" href="deleteorder.php?orderid=<?php echo $row['orderid']; ?>">DELETE</a>
												</td>
												
											</tr>
											<?php }
											 ?> 
									</tbody>
								</table>
								
							</div>
						</div>

					</div>
				</div>
			</div>


</body>

</html>