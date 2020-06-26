<?php
include 'header.php';
Session::checkSession();
?>
<?php

require '../class/functions.php';

$model = new NaowasQuery;
$insert = $model->insert();
?>
<body class="animsition">
    <div class="page-wrapper">
    <?php

include 'navbar.php';
?>

<style>
     /* body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	} */
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
		color: #566787;
		background: #f5f5f5;
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
		
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	

</style>

		<!-- PAGE CONTAINER-->
		<div class="page-container">

			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="table-wrapper">
							<div class="table-title">
								<div class="row">
									<div class="col-sm-6">
										<h2>Manage <b>Portfolio</b></h2>
									</div>
									<div class="col-sm-6">
										<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Record</span></a>
										<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
									</div>
								</div>
							</div>
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>
											<span class="custom-checkbox">
												<input type="checkbox" id="selectAll">
												<label for="selectAll"></label>
											</span>
										</th>
										<th>Name</th>
										<th>Description</th>
										<th>Link</th>
										<th>Photo</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>

							

								<?php 

								$model = new NaowasQuery();
								$rows = $model->fetch();        
                                if (!empty($rows)) {
                                    foreach ($rows as $row) {
                            	  ?>
							
								 
									<tr>
										<td>
											<span class="custom-checkbox">
												<input type="checkbox" id="checkbox4" name="options[]" value="1">
												<label for="checkbox4"></label>
											</span>
										</td>
										<td><?php echo $row['name']; ?></td>
										<td><?php echo $row['description']; ?></td>
										<td><?php echo $row['link']; ?></td>
										<td><img style="height:50px; width: 50px;" src="<?php echo $row['image_path']; ?>" alt="">
										</td>
										<td>
											<a href="#editEmployeeModal<?php echo $row['id']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
											<a href="#deleteEmployeeModal<?php echo $row['id']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
										</td>
									</tr>
								
								
									 
								</tbody>
								<?php
                                    }
                                }
								?>
							</table>

							
							<!-- <div class="clearfix">
								<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
								<ul class="pagination">
									<li class="page-item disabled"><a href="#">Previous</a></li>
									<li class="page-item"><a href="#" class="page-link">1</a></li>
									<li class="page-item"><a href="#" class="page-link">2</a></li>
									<li class="page-item active"><a href="#" class="page-link">3</a></li>
									<li class="page-item"><a href="#" class="page-link">4</a></li>
									<li class="page-item"><a href="#" class="page-link">5</a></li>
									<li class="page-item"><a href="#" class="page-link">Next</a></li>
								</ul>
							</div> -->
						</div>
					
				</div>
			</div>




						<?php 

			$model = new NaowasQuery();
			$rows = $model->fetch();        
			if (!empty($rows)) {
				foreach ($rows as $row) {

					if (isset($_POST['port_edit'])) {
					 
						$id = $_POST['edit_id'];
						$name = $_POST['name'];
						$bio = $_POST['bio'];
						$link = $_POST['link'];
						$object = new NaowasQuery();
					 
						$object->Update($name, $bio, $link, $id);
					}


            
        
					?>			
				
			<!-- modal large -->
			<div class="modal fade" id="editEmployeeModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true"> 

				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						
						<div class="modal-body">
						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal>
								<div class="modal-header">						
									<h4 class="modal-title">Edit Portfolio</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								</div>
								<div class="modal-body">	
								<input type="hidden" id="id" name="edit_id" value="<?php echo $row['id']; ?>">				
									<div class="form-group">
										<label>Name</label>
										<input type="text" id="name" name="name" class="form-control" value="<?php echo $row['name']; ?>" > 
									</div>
									<div class="form-group">
										<label>Description</label>
										<input type="text" id="bio" name="bio" class="form-control" value="<?php echo $row['description']; ?>">
									</div>
									<div class="form-group">
										<label>Findout link</label>
										<input type="text" id="link" name="link" class="form-control" value="<?php echo $row['link']; ?>">
									</div>
									
									<div class="form-group">
										<label>Photo</label>
										<input type="file" name="fileToUpload" id="fileToUpload" class="form-control" >
									</div>	
									<div class="form-group">
										
										<img style="height:200px; width: 170px;" src="<?php echo $row['image_path']; ?>" alt="">
									</div>				
								</div>
								<div class="modal-footer">
									<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
									<input type="submit" id="edit_port" name="port_edit" class="btn btn-info" value="Save">
								</div>
							</form>
						</div>
						
					</div>
				</div>
			</div>
				<?php
					}}
					?>
			<!-- end modal large -->


				<!-- modal medium -->
				<div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<!-- <div class="modal-header">
								<h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div> -->
							<div class="modal-body">
								<form action="" method="post" enctype="multipart/form-data" class="form-horizontal>
									<div class="modal-header">						
										<h4 class="modal-title">Add Employee</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">					
										<div class="form-group">
											<label>Name</label>
                                            <input type="text" id="name" name="name" placeholder="Your Name Here" class="form-control">
										</div>
										<div class="form-group">
											<label>Description</label>
                                            <input type="text" id="bio" name="bio" placeholder="Your Shrot Description Here" class="form-control">
										</div>
										<div class="form-group">
											<label>Findout link</label>
                                            <input type="text" id="find_link" name="find_link" placeholder="http://link.com" class="form-control">
										</div>
										
										<div class="form-group">
											<label>Photo</label>
                                            <input type="file" name="fileToUpload" id="fileToUpload" multiple="" class="form-control-file">
										</div>					
									</div>
									<div class="modal-footer">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
										<input type="submit" name="submit" class="btn btn-success" value="Add">
									</div>
								</form>
							</div>
							
						</div>
					</div>
				</div>
				<!-- end modal medium -->

				<?php 

$model = new NaowasQuery();
$rows = $model->fetch();        
if (!empty($rows)) {
    foreach ($rows as $row) {

		if(isset($_POST['delete'])){
			
			$filepath=  $_POST['image_path'];
			$id = $_POST['delete_id'];
			$del = $model->delete($id,$filepath);
            


            
        }
        ?>		
	<!-- modal small -->
	<div class="modal fade" id="deleteEmployeeModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				
				<div class="modal-body">
					<form action="" method="post">
						<div class="modal-header">						
							<h4 class="modal-title">Delete Employee</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
						<input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
							<p>Are you sure you want to delete these Records?</p>
							<p class="text-warning"><small>This action cannot be undone.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" name="delete" class="btn btn-danger" value="Delete">
						</div>
					</form>
				</div>
				
			
			</div>
		</div>
	</div>
	<?php
	}}
	?>
	<!-- end modal small -->


	
	<!-- Delete Modal HTML -->
<!-- 
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST">
					<div class="modal-header">						
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" name="del_all" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div> -->

		</div>
		<!-- END PAGE CONTAINER-->
	

	</div>

	
<?php
include 'footer.php'
?>

</body>

</html>
<!-- end document-->
