<!----------------Controller Functions---------------------------->
<?php
class Mycontroller
{
	
	// SuperUser adding Admin
	function Addadmin($adid,$una,$em,$psdw)
	{
		include '../model/Mymodel.php';
		$mod=new Mymodel();
		$mod->Addad($adid,$una,$em,$psdw);
	}
	
	
	// Function to load firstpage
	function Firstpage()
	{
		header('location:view/firstpage.php');
	}
	
	// Function to Register Students by admin
	function StudentReg($regno,$indexno,$fname,$lname,$mob,$depname,$coursename,$pass,$email,$uname,$semno,$year)
	{
		include '../model/Mymodel.php';
		$mod=new Mymodel();
		$mod->Addstudent($regno,$indexno,$fname,$lname,$mob,$depname,$coursename,$pass,$email,$uname,$semno,$year);
		
	}
	
	//Function  to Add Subjects
	function AddSub($code,$seme,$yr,$cre,$subn,$adid)
	{
		include '../model/Mymodel.php';
		$mod=new Mymodel();
		$mod->AddSubject($code,$seme,$yr,$cre,$subn,$adid);
	}
	// Function to Add time
	function Addtime($day,$sname,$cname,$cd,$tm,$adid)
	{
		include '../model/Mymodel.php';
		$mod=new Mymodel();
		$mod->Addtim($day,$sname,$cname,$cd,$tm,$adid);
	}

	// function to Add department
	function Adddep($depn)
	{
		include '../model/Mymodel.php';
		$mod=new Mymodel();
		$mod->Adddeptmnt($depn);
	}
	// Function to Add course
	function Addcourse($coursen,$departn)
	{
		include '../model/Mymodel.php';
		$mod=new Mymodel();
		$mod->Addcurs($coursen,$departn);
	}
	// Function to Show Result Preview
	function ResultPreview($regstrno,$inno,$coursec,$nam,$subjnam,$rest,$credit,$tgpa)
	{
		include '../model/Mymodel.php';
		$mod=new Mymodel();
		$mod->Addresult($regstrno,$inno,$coursec,$nam,$subjnam,$rest,$credit,$tgpa);
	}
	
	// Function for Authentication
	function authentication($usn,$psw)
	{
		include '../model/Mymodel.php';
		$mod=new Mymodel();
		$mod->auth($usn,$psw);
	}
	
	
	// student profile view by each student
	function Studentpro($em)
	{
		include '../model/Mymodel.php';
		$mod=new Mymodel();
		$result=$mod->studentprofile($em);
		return $result;
	}
	
	// Function to Add Result preview
	function ResultPre($reg_no)
	{
		include '../model/Mymodel.php';
		$mod=new Mymodel();
		$result=$mod->studentresult($reg_no);
		return $result;
	}
	 // Show list of Admin
	function superviewadm()
	{
		include '../model/Mymodel.php';
		$mod=new Mymodel();
		$result=$mod->viewadm();
			return $result;
	}
	
	//Show student profile
	function SuperviewStudentpro()
	{
		include '../model/Mymodel.php';
		$mod=new Mymodel();
		$result=$mod->Superviewstud();
			return $result;
	}
	// to remove student
	function RemoveStud($regno)
	{
		
		$mod=new Mymodel();
		$result=$mod->RemoveSuperStud($regno);
			return $result;
	}
	
	// To show subject to student
	function Studentviewsub($semo)
	{
		include '../model/Mymodel.php';
		$mod=new Mymodel();
		$result=$mod->viewsubj($semo);
		return $result;
	}

	// Students view Timetable
	function Studviewtime($semno)
	{
		include '../model/Mymodel.php';
		$mod=new Mymodel();
		$result=$mod->studenttime($semno);
		return $result;
	}
	
	// Function to change password by student
	function ChangePass($currentpass,$confnewp)
	{
		include '../model/Mymodel.php';
		$mod=new Mymodel();
		$result=$mod->chngpass($currentpass,$confnewp);
		return $result;
	}
	
	// To Remove admin
	function Removeadmn($em)
	{
		$mod=new Mymodel();
		$result=$mod->Rmvadmn($em);
		return $result;
	}
}

?>
