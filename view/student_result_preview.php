<!------------Result preview of Student------------> 

<!DOCTYPE html>
<html lang="en">
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
        <a class="nav-link collapsed" href="student-attendance.php">
          <i class="fas fa-user-graduate px-3"></i>
          <span>Department</span>
        </a>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="fas fa-chalkboard-teacher px-3"></i>
          <span>Result Preview</span>
        </a>

      </li>

      <!-- Attendance Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="login.php" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-school px-3"></i>
         <span>Subjects</span>
        </a>
		
		
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href=".php">
          <i class="fas fa-bell px-3"></i>
          <span>Notifications</span>
        </a>
      </li>

     
	  
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
              <a class="nav-link " href="studentdashboard.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
              
            </li>
			<li class="nav-item">
              <a class="nav-link " href="std_profile.php">
                <i class="fas fa-user "><p> Myprofile</p></i>
              </a>
              
            </li>
			
			
			<li class="nav-item">
              <a class="nav-link " href="login.php" >
                <i class="fas fa-sign-out-alt  text-gray"><p>LogOut</p></i>
              </a>
            </li>

          </ul>

        </nav>
		
<!----------------------dashboard ends ------------------------------>

<?php

	session_start();
	include '../controller/Mycontroller.php';
	$obj=new Mycontroller();
	$result=$obj->ResultPre($_SESSION['reg_no']);
	while($row=mysqli_fetch_assoc($result))
	{
 
?>

<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-10 p-5">
                    <div class="card">
                        <div class="card-header text-center bg-info "><h3 class="text-white">Result Preview</h3></div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Register Number</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="full_name" class="form-control box-bg " name="rgno" value=" <?php echo $row['registerno']?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Index Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control box-bg" name="indexno" value=" <?php echo $row['indexno']?>">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Course Code</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="cc" value=" <?php echo $row['coursecode']?>">
                                    </div>
                                </div>
							
							<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Name</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="name" value=" <?php echo $row['name']?>">
                                    </div>
                                </div>
							
						
							 <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Subject Name</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="subname" value=" <?php echo $row['subjectname']?>">
                                    </div>
                                </div>
								
							 <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Result</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="result" value=" <?php echo $row['result']?>">
                                    </div>
                                </div>
								
								 <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Credits</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="credits" value=" <?php echo $row['credits']?>">
                                    </div>
                                </div>
								
								 <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Total GPA</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="totalgpa" value=" <?php echo $row['totalgpa']?>">
                                    </div>
                                </div>
	
	
	         </div>
								</div>
								
 
                            </form>
                        </div>
                    </div>
            </div>
			
        </div>

				</div>
			</section>
			<?php
	}
	?>
		

			
 


<!-- Footer -->
      <footer class="">
          <div class="copyright text-center bg-gradient-primary py-2 text-light">
            <span>Copyright &copy; Orisys Academy 2019-2020</span>
        </div>
      </footer>
      <!-- End of Footer -->
</div>
    </div>
    <!-- End of Content Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="css/proper.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>
</body>

</html>






