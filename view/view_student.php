<!-----------Super user Viewing Students------>
<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> dash board</title>
  <!-- Custom fonts for this template-->
  <link  rel="stylesheet" href="fontawesome/css/all.min.css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">


<!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
			<div>
		<img src="img/log.svg" class="img-fluid">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php" class="text-center">
          <i class="fas fa-user user-font px-4"></i></a></li>

      <!-- Divider -->
	   <li class="nav-item">
        <a class="nav-link collapsed" href="add_admin.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user-graduate"></i>
          <span>Add admin</span>
        </a>
		</li>
		
		<li class="nav-item">
        <a class="nav-link collapsed" href="remove_admin.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user-graduate"></i>
          <span>Remove admin</span>
        </a>
		</li>
		
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="view_admin.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>View Admin</span>
        </a>

      </li>

      <!-- Attendance Menu -->
      
     
	  
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
		<div class="container-fliud">
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-gradient-primary">
		<!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
            <i class="fa fa-bars"></i>
          </button>
		 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto pr-5 p-hide">

            <!-- Nav Item - Alerts -->
            <li class="nav-item ">
              <a class="nav-link " href="superuser_dashboard.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
              
            </li>
			
			
			<li class="nav-item">
              <a class="nav-link " href="login.php" >
                <i class="fas fa-sign-out-alt  text-gray"><p>LogOut</p></i>
              </a>
            </li>

          </ul>

        </nav>
	</div>
</div> 


<section class="margin_top"> 
	<div class="container margin_top">
		<div class="row">
			<div class="col-md-6 text-center bor py-4 t-center">
				<h2 class="fontcol">Students</h2>
			</div>
			
			<div class="col-md-12">
				<div style="overflow-x:auto;">
					<table class="table table-hover">
						<thead>
							<tr>
							  <th>Register Number</th>
							  <th>Index No</th>
							  <th>First Name</th>
							  <th>Last Name</th>
							  <th>Mobile</th>
							  <th>Dept. Name</th>
							  <th>Course Name</th>
							  <th>Email</th>
							  <th>UserName</th>
							  <th>Semester</th>
							  <th>Year</th>
							  
							</tr>
						</thead>
						<?php
							
							include '../controller/Mycontroller.php';
							$obj=new Mycontroller();
							$result=$obj->SuperviewStudentpro();
							while($row=mysqli_fetch_assoc($result))
							{ 
						?>
								<div class="col-md-12">
									<div style="overflow-x:auto;">
										<table class="table table-hover">
											<tbody id="myTable">
												<tr>
												  <form method="post">
												  <td><input type="text" value="<?php echo $row['reg_no']?>" name="reg_no" readonly> </td>
												  <td><?php echo $row['index_no']?></td>
												  <td><?php echo $row['fname']?></td>
												  <td><?php echo $row['lname']?></td>
												  <td><?php echo $row['mobile']?></td>
												  <td><?php echo $row['dep_name']?></td>
												  <td><?php echo $row['course_name']?></td>
												  <td><?php echo $row['email']?></td>
												  <td><?php echo $row['username']?></td>
												  <td><?php echo $row['sem_no']?></td>
												  <td><?php echo $row['year']?></td>
												  <td><input type="submit" value="remove" name="submit"></td>
												  
												</tr>
												
											</tbody>
										</table>
									</div>
								</div>
							<?php
							}
							?>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	</div>

<?php
if(isset($_POST['submit']))
{
	$obj=new Mycontroller();
	$result=$obj->RemoveStud($_POST['reg_no']);
}
?>
</div>
<!-- Footer -->
      <footer class="">
          <div class="copyright text-center bg-gradient-primary py-2 text-light">
            <span>Copyright &copy; student registration 2019-2020</span>
        </div>
      </footer>
      <!-- End of Footer -->

    <!-- End of Content Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="css/proper.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>
</body>
</html>