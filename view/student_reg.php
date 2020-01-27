<!---------Admin Registering Students------------>
<!------------Admin Registering Students----------->
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
        <a class="nav-link collapsed" href="student_reg.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user-graduate"></i>
          <span>Add student</span>
        </a>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Add subject</span>
        </a>

      </li>

 <li class="nav-item">
        <a class="nav-link collapsed" href="department.php" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-bell"></i>
          <span>Add Department</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="course.php" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-bell"></i>
          <span>Add Course</span>
        </a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link collapsed" href="result.php" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-bell"></i>
          <span>Add Result</span>
        </a>
      </li>

      <!-- Attendance Menu -->
      
      

      <!-- Nav Item -ptrevious details-->
      
	  
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
				  <a class="nav-link " href="admin_dashboard.php">
					<i class="fas fa-home"><p> Home</p></i>
				  </a>
				  
				</li>
				<li class="nav-item">
				  <a class="nav-link " href="#"  >
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
			</div>
	</div> 


	<div class="cotainer">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header text-center bg-info "><h3 class="text-white">Student Registration</h3></div>
						<div class="card-body">
							<form name="myform" role="form" onsubmit="return validate_form()" method="post">
								<div class="form-group row">
									<label class="col-md-4 col-form-label text-md-right font-weight-bolder">Registration Number</label>
										<div class="col-md-6 ">
											<input type="text" id="full_name" class="form-control box-bg " name="reg_no" required>
										</div>
								 </div>

								 <div class="form-group row">
									<label class="col-md-4 col-form-label text-md-right font-weight-bolder">Index No</label>
									<div class="col-md-6">
										<input type="text" id="email_address" class="form-control box-bg" name="index_no" required>
									</div>
								 </div>
									
								 <div class="form-group row">
									<label class="col-md-4 col-form-label text-md-right font-weight-bolder">First Name</label>
									<div class="col-md-6">
										<input type="text"  class="form-control box-bg" name="fname" required>
									</div>
								 </div>
								 <div class="form-group row">
									<label class="col-md-4 col-form-label text-md-right font-weight-bolder">Last Name</label>
									<div class="col-md-6">
										<input type="text"  class="form-control box-bg" name="lname" required >
									</div>
								 </div>
								
								<div class="form-group row">
									<label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mobile</label>
										<div class="col-md-6">
											<input type="text"  class="form-control box-bg" name="mobile" id="mobile">
										</div>
								</div>
								
								<div class="form-group row">
									<label class="col-md-4 col-form-label text-md-right font-weight-bolder">Department Name</label>
									<div class="col-md-6">
										<input type="text"  class="form-control box-bg" name="dep_name">
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-md-4 col-form-label text-md-right font-weight-bolder">Course Name</label>
										<div class="col-md-6">
											<input type="text"  class="form-control box-bg" name="course_name" required>
										</div>
								</div>
									
								 <div class="form-group row">
										<label class="col-md-4 col-form-label text-md-right font-weight-bolder">Password</label>
										<div class="col-md-6">
											<input type="text"  class="form-control box-bg" name="password" id="password" required>
										</div>
								 </div>

								<div class="form-group row">
										<label class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
										<div class="col-md-6">
											<input type="text"   class="form-control box-bg" name="email" required>
										</div>
								</div>
									
									
								<div class="form-group row">
										<label class="col-md-4 col-form-label text-md-right font-weight-bolder">Username</label>
										<div class="col-md-6">
											<input type="text"   class="form-control box-bg" name="username" required>
										</div>
								</div>
									
								<div class="form-group row">
										<label class="col-md-4 col-form-label text-md-right font-weight-bolder">Sem No</label>
										<div class="col-md-6">
											<input type="text" class="form-control box-bg" name="sem_no" required>
										</div>
								</div>
									
									
								<div class="form-group row">
										<label class="col-md-4 col-form-label text-md-right font-weight-bolder">year</label>
										<div class="col-md-6">
											<input type="date" class="form-control box-bg" name="year" required>
										</div>
								</div>
									
									
								<div class="row"> 
										<div class="col-md-6 text-right">
											<input type="submit" class="btn btn-primary " name="submit" value="Save">
										
										  
										</div>
								</div>
										
						</form>
				
					  </div>
					</div>
				</div>           
			 </div>
		  </div>
   </div>
</div>
<?php
if(isset($_POST['submit']))
{
	include '../controller/Mycontroller.php';
	$obj=new Mycontroller();
	$obj->StudentReg($_POST['reg_no'],$_POST['index_no'],$_POST['fname'],$_POST['lname'],$_POST['mobile'],$_POST['dep_name'],$_POST['course_name'],$_POST['password'],$_POST['email'],$_POST['username'],$_POST['sem_no'],$_POST['year']);
}
 

?>


<script>
	function validate_form()
	{
		var str=document.forms["myform"]["password"].value;
		var ph=document.forms["myform"]["mobile"].value;
		if(str.length<6)
		{
			alert("password is too short");
			return false;
		}
		else if(ph.length!=10)
		{
			alert("Inavlid mobile number");
			return false;
		}
		else
		{
			return true;
		}
	}
</script>




<!---------------- Footer -------------->
	
	<footer class="">
        <div class="copyright text-center bg-gradient-primary py-2 text-light">
            <span>Copyright &copy; Orisys Academy 2019-2020</span>
        </div>
    </footer>
      <!-- End of Footer -->

   
  
</body>

</html>