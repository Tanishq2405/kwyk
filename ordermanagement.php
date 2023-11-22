<?php
include('navadmin.php')
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
        
    </style>
</head>
<body>

    
        <div class="row">
            <div class="index bg-dark col-md-3">
               <?php
                    include('admin.php');
               ?>
            </div>

            <div class="space1 col-md-9">
                <div class="upl1 col-md-12">
                <div class="card-list">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card blue">
							<div class="title">Total Orders</div>
							<!-- <i class="zmdi zmdi-upload"></i> -->
							<div class="value">8</div>
							<!-- <div class="stat"><b>13</b>% increase</div> -->
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card green">
							<div class="title">Current Orders</div>
							<!-- <i class="zmdi zmdi-upload"></i> -->
							<div class="value">5</div>
							<!-- <div class="stat"><b>4</b>% increase</div> -->
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card orange">
							<div class="title">Pending Orders</div>
							<!-- <i class="zmdi zmdi-download"></i> -->
							<div class="value">8</div>
							<!-- <div class="stat"><b>13</b>% decrease</div> -->
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card red">
							<div class="title">Cancelled Orders</div>
							<!-- <i class="zmdi zmdi-download"></i> -->
							<div class="value">3</div>
							<!-- <div class="stat"><b>13</b>% decrease</div> -->
						</div>
					</div>
					
					
				</div>
                </div>

				<!-- <a href="edit.php" style="float: right; margin-bottom: 15px; " class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Edit</a> <br> -->
				<form class="d-flex" method="post">
                <button style="float: right;" class="btn btn-primary" type="submit" name="logout"><a href="edit.php">Edit</a></button>
            </form>
				<div class="projects mb-4">
				<div class="projects-inner">
					<header class="projects-header">
						<div class="title"><b>Current Orders</b></div>
						<!-- <div class="count">| 32 Projects</div> -->
						<!-- <i class="zmdi zmdi-download"></i> -->
					</header>
					<hr>
					<table class="projects-table">
						<thead>                                                                                                                                                                                                        
							<tr>
							<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
							    <th>Customer Name</th></div>
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
							    <th>Shop Name</th></div>
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
								<th>order id</th></div>
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
								<th>Order Name</th></div>
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
								<th>Quantity</th></div>
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
								<th>Order Status</th></div>
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
								<th>bill</th></div>
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
								<th> applied offer</th></div>
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
								<th> order status</th></div>
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
								</tr>
						</thead>
					
						<tr>
							<td>
								<p>New Dashboard</p>

							</td>
							<td>
								<p>17th Oct, 15</p>
								<!-- <p class="text-danger">Overdue</p> -->
							</td>
							
							<td class="member">
								<!-- <figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure> -->
								<div class="member-info">
									<p>Aryan Bagane</p>
							<td>
								<p>&#8377; 1234</p>
								<p>Paid</p>
							</td>
					
                        </div>
                    </form> 
                </div>
            </div>
        </div>
  
       
</body>
</html>