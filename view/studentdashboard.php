<!-----------Home page of student--------->

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
	  
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="student_result_preview.php">
          <i class="fas fa-chalkboard-teacher px-3"></i>
          <span>Result Preview</span>
        </a>

      </li>

      <!-- Attendance Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="std_subjects.php" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-school px-3"></i>
         <span>Subjects</span>
        </a>
		
		
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="stud_timetable.php">
          <i class="fas fa-bell px-3"></i>
          <span>Timetable</span>
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
              <a class="nav-link " href="stud_password.php">
                <i class="fas fa-user "><p> Change password</p></i>
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








