<?php
include('navadmin.php');

$conn = new mysqli('localhost', 'root', '', 'customer');

//Query from getting data from table
$sql = "SELECT * FROM `emailverif` ORDER BY `mid` DESC";

//Execute Query
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KWYK | Customer</title>
	<link rel="stylesheet" href="admindash.css">
</head>

<body>
	<div class="row">
		<div class="index bg-dark col-md-3">
			<?php
                    include('admin.php');

					$sql1 = "SELECT *FROM `emailverif`";
					$run1 = mysqli_query($conn, $sql1);

					$count1 = mysqli_num_rows($run1);
               ?>
		</div>
		<div class="space1 col-md-9">
			<div class="upl1 col-md-12">
				<div class="card-list">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
							<div class="card blue">
								<div class="title">Total Customers</div>
								<div class="value"><?php echo $count1; ?></div>
							</div>
						</div>
					</div>
					<div class="projects mb-4">
						<div class="projects-inner">
							<header class="projects-header">
								<div class="title"><b>Customer Details</b></div>
								<!-- <div class="count">| 32 Projects</div> -->
								<!-- <i class="zmdi zmdi-download"></i> -->
							</header>
							<hr>
							<table class="projects-table">
								<thead>
									<tr>
										<th> ID </th>
										<th> Name </th>
										<th> Phone no </th>
										<th> Email </th>
										<th> Password </th>
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
											<td><?php echo $row['mid'];?></td>
											<td><?php echo $row['Name'];?></td>
											<td><?php echo $row['Phone'];?></td>
											<td><?php echo $row['Email'];?></td>
											<td><?php echo $row['Password'];?></td>
											<td><a class="btn btn-info" href="editcustomer.php?mid=<?php echo $row['mid']; ?>">EDIT</a>
											<a class="btn btn-danger" href="deletecustomer.php?mid=<?php echo $row['mid']; ?>">DELETE</a>
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