<?php
include('navadmin.php');

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
					$conn = mysqli_connect('localhost','root', '', 'tempo');

					$sql1 = "SELECT * FROM `complaints`";
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
										<th> Complaint No </th>
										<th> Mail ID </th>
										<th> Mobile No </th>
										<th> Suggestion </th>
										<th> Status </th>
									</tr>
								</thead>
								<tbody>
									<?php
										$conn = mysqli_connect('localhost', 'root', '', 'tempo');
										$sql1 = "SELECT *FROM `complaints` ORDER BY `complaintno` DESC";
										$run1 = mysqli_query($conn, $sql1);

										while($row = mysqli_fetch_assoc($run1)){
										?>
										<tr>
											<td><?php echo $row['complaintno'];?></td>
											<td><?php echo $row['mailid'];?></td>
											<td><?php echo $row['mobileno'];?></td>
											<td><?php echo $row['comp'];?></td>
											<td><?php echo $row['status'];?></td>
											<td>
                                            
											<a class="btn btn-danger" href="resolve.php?complaintno=<?php echo $row['complaintno']; ?>">Resolve</a>
											</td>
											
										</tr>
										<?php 
										}
										 ?> 
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