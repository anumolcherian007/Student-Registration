<?php


class Mymodel
{
	
	function Addad($adid,$una,$em,$psdw)
	{
		include '../config/connection.php';
		$sql="insert into admin(admin_id,username,email,password) values('".$adid."','".$una."','".$em."','".$psdw."')";
		
		if(mysqli_query($conn,$sql))
		{
			echo 'successfully added Admin';
		}
	}
	
	
	
	function Addstudent($rno,$ino,$firstname,$lastname,$mobi,$deptname,$cname,$passw,$emailid,$usname,$semsno,$yr)
	{
		include '../config/connection.php';
		$sql="select * from student where username='".$usname."' or email='".$emailid."'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			echo 'Username or email already existing';
		}
		else
		{
		$sql="insert into student(reg_no,index_no,fname,lname,mobile,dep_name,course_name,password,email,username,sem_no,year) values('".$rno."','".$ino."','".$firstname."','".$lastname."','".$mobi."','".$deptname."','".$cname."','".$passw."','".$emailid."','".$usname."','".$semsno."','".$yr."')";
		if(mysqli_query($conn,$sql))
		{
			echo 'registered successfully';	
		}
		}
		
	}
	
	
	function AddSubject($cod,$semes,$yer,$cred,$subn,$admid)
	{
		include '../config/connection.php';
		$sql="insert into subject(subcode,semester,subyear,credit,subjectname,adminid) values('".$cod."','".$semes."','".$yer."','".$cred."','".$subn."','".$admid."')";
		echo 'success';
		if(mysqli_query($conn,$sql))
		{
			echo 'successfully added subject';
		}
	}
	
	
	function Adddeptmnt($depname)
	{
		include '../config/connection.php';
		$sql="insert into department(departmentname) values('".$depname."')";
		
		if(mysqli_query($conn,$sql))
		{
			echo 'successfully added Department';
		}
	}
	
	function Addcurs($cname,$depname)
	{
		include '../config/connection.php';
		$sql="insert into course(coursename,departmentname) values('".$cname."','".$depname."')";
		
		if(mysqli_query($conn,$sql))
		{
			echo 'successfully added Course';
		}
	}
	
	function Addresult($regstrnum,$indno,$courecode,$nme,$sbname,$resul,$crdt,$totgpa)
	{
		
		include '../config/connection.php';
		
		$sql="insert into result(registerno,indexno,coursecode,name,subjectname,result,credits,totalgpa) values('".$regstrnum."','".$indno."','".$courecode."','".$nme."','".$sbname."','".$resul."','".$crdt."','".$totgpa."')";
		if(mysqli_query($conn,$sql))
			
		{
			echo 'successfully added result';
		}
	}


	function Addtim($dy,$suname,$dname,$cod,$tim,$adid,$semn)
	{
		include '../config/connection.php';
		$sql="insert into timetable(day,subject_name,dep_name,code,time,admin_id,sem_no) values('".$dy."','".$suname."','".$dname."','".$cod."','".$tim."','".$adid."','".$semn."')";	
		if(mysqli_query($conn,$sql))
		{
			echo 'successfully added timetable';
		}
	}
	
	function auth($un,$pw)
	{
		include '../config/connection.php';
		$sql="select * FROM student WHERE username='".$un."' and password='".$pw."'"; 
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			session_start();
			$row=mysqli_fetch_assoc($result);
			$_SESSION['email']=$row['email'];
			$_SESSION['reg_no']=$row['reg_no'];
			$_SESSION['sem_no']=$row['sem_no'];
			header ('location:studentdashboard.php');
		}
		else
		{
			$sql="SELECT * FROM admin WHERE username='".$un."' and password='".$pw."'"; 
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
			
			{
				
				$row=mysqli_fetch_assoc($result);
				$_SESSION['username']=$row['username'];
				header ('location:admin_dashboard.php');
			}
			else
			{
				$sql="select * FROM superuser WHERE username='".$un."' and password='".$pw."'";
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0)
				{
					
					$row=mysqli_fetch_assoc($result);
					$_SESSION['username']=$row['username'];
					header ('location:superuser_dashboard.php');
				}
			}
		}
	}
	
	function studentprofile($ema)
	{
		include '../config/connection.php';
		
		$sql="select * from student where email='".$ema."'";
		$result=mysqli_query($conn,$sql);
			return ($result);
	}
	
	
	function studentresult($regno)
	{
		include '../config/connection.php';
		
		$sql="select * from result where registerno='".$regno."'";
		$result=mysqli_query($conn,$sql);
			return ($result);
	}
	
	function viewadm()
	{
		include '../config/connection.php';
		
		$sql="select * from admin";
		$result=mysqli_query($conn,$sql);
			return ($result);
	}
	
	function Superviewstud()
	{
		include '../config/connection.php';
		
		$sql="select * from student";
		$result=mysqli_query($conn,$sql);
			return ($result);
	}
	
	function RemoveSuperStud($reg)
	{
		include '../config/connection.php';
		
		$sql="DELETE from  student where reg_no='".$reg."'";
		if(mysqli_query($conn,$sql));
		{
			echo 'Successfully Removed';
		}
	}
	
	function viewsubj($semno)
	{
		include '../config/connection.php';
		
		$sql="select * from subject where sem_no='".$semno."'";
		$result=mysqli_query($conn,$sql);
			return ($result);
	}

	function studenttime($semn)
	{
		include '../config/connection.php';
		
		$sql="select * from timetable where sem_no='".$semn."'";
		$result=mysqli_query($conn,$sql);
			return ($result);
	}
	
	
	
	function chngpass($currntpass,$confirmnewp)
	{
		include '../config/connection.php';
		
		$sql="update student set password='".$confirmnewp."' where password='".$currntpass."'";
		if(mysqli_query($conn,$sql));
		{
			echo 'Successfully updated changes';
		}
	}
	
	function Rmvadmn($ema)
	{
		include '../config/connection.php';
		
		$sql="DELETE from  admin where email='".$ema."'";
		if(mysqli_query($conn,$sql));
		{
			echo 'Successfully Removed';
		}
	}
	
}

?>