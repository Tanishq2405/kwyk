<?php
//Including Navbar File
include('navadmin.php');

// Creating connection
$conn = new mysqli('localhost', 'root', '', 'kwyk');

//Query from getting data from table
$sql = "SELECT * FROM contact";

//Execute Query
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KWYK | Contact Us</title>
	<link rel="stylesheet" href="admindash.css">
</head>

<body>
	<div class="row">
		<div class="index bg-dark col-md-3">
			<?php
                    include('admin.php');

					// Counting the total number of rows..
					$sql1 = "SELECT * FROM `contact`";
					$run1 = mysqli_query($conn, $sql1);
					$count1 = mysqli_num_rows($run1);
               ?>
		</div>
        
		<div class="space1 col-md-9">
			<div class="upl1 col-md-12">
				<div class="card-list">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
							<div class="card orange">
								<div class="title">Total Queries</div>
								<div class="value"><?php echo $count1 ?></div>
								<!-- Print using count variable -->
							</div>
						</div>
					</div>
					<div class="projects mb-4">
						<div class="projects-inner">
							<header class="projects-header">
								<div class="title"><b>Contact Us</b></div>
								<!-- <div class="count">| 32 Projects</div> -->
								<!-- <i class="zmdi zmdi-download"></i> -->
							</header>
							<hr>
							<table class="projects-table">
								<thead>
									<tr>
										<!-- Table Heads -->
										<th> ID </th>
										<th> Name </th>
										<th> Email </th>
										<th> Subject </th>
										<th> Message </th>
										<th> Status </th>
									</tr>
								</thead>
								<tbody>
									<?php
									// Printing Data
									if ($result->num_rows>0)
									{
										//Output Data of each row
									while ($row =$result->fetch_assoc())
									{
										?>
										<tr>
											<td><?php echo $row['ID'];?></td>
											<td><?php echo $row['Name'];?></td>
											<td><?php echo $row['Email'];?></td>
											<td><?php echo $row['Subject'];?></td>
											<td><?php echo $row['Message'];?></td>
											<td><?php echo $row['Status'];?></td>
											<td>
												<!-- Resolve Button for resolving complaints/suggestions -->
                                            <!-- <a class="btn btn-info" href="update.php?ID=<?php echo $row['ID']; ?>">EDIT</a> -->
											<a class="btn btn-danger" href="resolve.php?ID=<?php echo $row['ID']; ?>">Resolve</a>
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