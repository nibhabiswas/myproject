<?php
include 'db_conn.php';
session_start();
if(isset( $_POST['email']) && isset($_POST['password']))
{
	$email=$_POST['email'];
	$password = $_POST['password'];
	// $userrole = $_POST['user_role'];
	// if($userrole='admin')
	// {
	// 	header('location:userpanel.php');
	// }
	// else{
	// 	header('location:allusers.php');
	// }

	if (empty($email) || empty($password))
	{
		header('location:login.php?error=please fill all required fields');
	}
	else
	{
	$sql = "select * from registration where email='$email'";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0)
	 {

				$row = mysqli_fetch_assoc($result);
				$user_role=$row['user_role'];
				// print_r($user_role);
				// die();
				if($email==$row['email'] && $password==$row['password'] && $user_role=$row['user_role'] )
				{
				$_SESSION['id']=$row['id'];
				$_SESSION['name']=$row['name'];
				$_SESSION['email']=$row['email'];
				$_SESSION['phone']=$row['phone'];
				// $_SESSION['user_role']=$row['user_role'];
				if($user_role!='admin')
				{
					header('location:userpanel.php');
				}
				elseif($user_role=='admin'){
					header('location:index.php');
				}
				
				}
				else
				{
					header('location:login.php?error=wrong credential');
				}
	}
	else
	{
		header('location:login.php?error=user does not exist');
	}

	}
	
}
	else
	{
	header('location:login.php');
	}
	

?>