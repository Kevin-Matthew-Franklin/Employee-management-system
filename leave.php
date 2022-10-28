<?php include('include/header.php') ?>
<section class="main">
	<div class="main-top">
		<h1>Leave</h1>
		<i class="fas fa-user-cog"></i>
	</div>
	<!--This is section-->
	<section id="sections">
		<div class="container">
			<div class="row">
				<div class="">
					<a href="#" class="button" style="background-color: #ff8c00;" data-toggle="modal" data-target="#addPostModal"><i class="fa fa-spinner"></i> Pending Leaves</a>
					<a href="#" class="button" style="background-color: #008000;"><i class="fa fa-check"></i> Approved</a>
					<a href="#" class="button" style="background-color: red;"><i class="fa fa-th"></i> Rejected</a>
					<a href="#" class="button" style="background-color: #6a5acd;"><i class="fa fa-users"></i> Total Leave</a>
					<!--<a href="#" class="button"><i class="fa fa-eye"></i> View Employees</a>-->
				</div>
				<div class="col-md"></div>
			</div>
		</div>

	</section>
	<!-- Designed and developed by Habibur Rahman Mahid -->
	<!----Section2 for showing Post Model ---->
	<section id="post">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<th>#</th>
						<th>Name</th>
						<th>Department</th>
						<th>Date</th>
						<th>Reason</th>
						<th>Status</th>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Kevin</td>
							<td>FSD</td>
							<td>12-Aug-2022</td>
							<td>Fever</td>
							<td style="color: #ff8c00 ;">Pending</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Luxy</td>
							<td>FSD</td>
							<td>12-Aug-2022</td>
							<td>Fever</td>
							<td style="color: green;">Approved</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Viwin</td>
							<td>FSD</td>
							<td>12-Aug-2022</td>
							<td>Fever</td>
							<td style="color: red ;">Rejected</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<!----Section3 footer ---->
	<!-- Designed and developed by Habibur Rahman Mahid -->

	<!-- Creating Modal -->
	<!-- Header Post -->
	<div class="modal fade" id="addPostModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-warning text-white">
					<div class="modal-title">
						<h5>Pending</h5>
					</div>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<th>#</th>
							<th>Name</th>
							<th>Department</th>
							<th>Date</th>
							<th>Reason</th>
							<th>Status</th>
							<th>Action</th>
						</thead>


				</div>