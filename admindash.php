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
					include('conn.php');

					$sql1 = "SELECT *FROM `orders`";
					$run1 = mysqli_query($conn, $sql1);
					$count1 = mysqli_num_rows($run1);

					$sql2 = "SELECT *FROM `orders` WHERE `status`='preparing' OR `status`='accept' OR `status`='dispatched'";
					$run2 = mysqli_query($conn, $sql2);
					$count2 = mysqli_num_rows($run2);
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
							<div class="value"><?php echo $count1; ?></div>
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
								<th>Name</th></div>
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
								<th>Date</th></div>
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
								<th>Customer Name</th></div>
								<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
								<th>Price</th></div>
								<!-- <th>Status</th> -->
								<!-- <th class="text-right">Actions</th> -->
							</tr>
						</thead>
					
						<tr>
							<td>
								<p>New Dashboard</p>
								<!-- <p>Google</p> -->
							</td>
							<td>
								<p>17th Oct, 15</p>
								<!-- <p class="text-danger">Overdue</p> -->
							</td>
							
							<td class="member">
								<!-- <figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure> -->
								<div class="member-info">
									<p>Aryan Bagane</p>
									<!-- <p>UK Design Team</p> -->
								</div>
							</td>
							<td>
								<p>&#8377; 1234</p>
								<p>Paid</p>
							</td>
							<!-- <td class="status">
								<span class="status-text status-orange">In progress</span>
							</td>
							<td>
								<form class="form" action="#" method="POST">
								<select class="action-box">
									<option>Actions</option>
									<option>Start project</option>
									<option>Send for QA</option>
									<option>Send invoice</option>
								</select>
								</form>
							</td> -->
						</tr>
						<tr class="danger-item">
							<td>
								<p>New Dashboard</p>
								<!-- <p>Google</p> -->
							</td>
							<td>
								<p>17th Oct, 15</p>
								<!-- <p class="text-danger">Overdue</p> -->
							</td>
							<td class="member">
								<!-- <figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure> -->
								<div class="member-info">
									<p>Bhakti Awari</p>
									<!-- <p>UK Design Team</p> -->
								</div>
							</td>
							<td>
								<p>&#8377; 1234</p>
								<p>Paid</p>
							</td>
							<!-- <td class="status">
								<span class="status-text status-red">Blocked</span>
							</td>
							<td>
								<form class="form" action="#" method="POST">
									<select class="action-box">
										<option>Actions</option>
										<option>Start project</option>
										<option>Send for QA</option>
										<option>Send invoice</option>
									</select>
								</form>
							</td> -->
						</tr>
						<tr>
							<td>
								<p>New Dashboard</p>
								<!-- <p>Google</p> -->
							</td>
							<td>
								<p>17th Oct, 15</p>
								<!-- <p class="text-danger">Overdue</p> -->
							</td>
							<td class="member">
								<!-- <figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure> -->
								<div class="member-info">
									<p>Vishwajeet Pawar</p>
									<!-- <p>UK Design Team</p> -->
								</div>
							</td>
							<td>
								<p>&#8377; 1234</p>
								<p>Paid</p>
							<!-- </td>
							<td class="status">
								<span class="status-text status-orange">In progress</span>
							</td>
							<td>
								<form class="form" action="#" method="POST">
									<select class="action-box">
						  <option>Actions</option>
						  <option>Start project</option>
						  <option>Send for QA</option>
						  <option>Send invoice</option>
						</select>
								</form>
							</td> -->
						</tr>
						<tr>
							<td>
								<p>New Dashboard</p>
								<!-- <p>Google</p> -->
							</td>
							<td>
								<p>17th Oct, 15</p>
								<!-- <p class="text-danger">Overdue</p> -->
							</td>
							<td class="member">
								<!-- <figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure> -->
								<div class="member-info">
									<p>Tanishq Dhokariya</p>
									<!-- <p>UK Design Team</p> -->
								</div>
							</td>
							<td>
								<p>&#8377; 1234</p>
								<p>Paid</p>
							</td>
                            
                    <!-- <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Enter your brand Shop name</label>
                            <input name="shopname" type="text" class="form-control" id="shopname" aria-describedby="" placeholder="Shop name">
                            <div id="emailHelp" class="form-text">Same name as mentioned in shop license</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Enter your Shop license number</label>
                            <input name="shoplicenseno" type="text" class="form-control" id="shopname" aria-describedby="" placeholder="Shop license number">
                        </div>
                        
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload shop license</label>
                            <input name="shoplicense" class="form-control" type="file" id="shoplicense">
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload GST proof</label>
                            <input name="shopgst" class="form-control" type="file" id="gstproof">
                        </div>
                        
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload your PAN</label>
                            <input name="shoppan" class="form-control" type="file" id="shoppan">
                        </div>

                        <div class="try">
                            <?php
                                echo $_SESSION['email'];
                            ?>
                        </div>
                        
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                            <label class="form-check-label" for="exampleCheck1">Agree to all terms and condition*</label>
                        </div>
                        
                        <div class="anim">
                            <input class="btn btn-primary" onclick="" type="submit" name="upload" value="Upload data"><br>
                             <div>
                                <img id="bike" src="submit.png" alt="" height="100px" width="100px">
                            </div> -->
                        </div>
                    </form> 
                </div>
            </div>
        </div>
  
       
</body>
</html>