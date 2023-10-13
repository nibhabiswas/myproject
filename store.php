<?php
include('db_conn.php');

 // $conn=mysqli_connect('localhost','root','','project');
if(isset( $_POST['submit'])) 
{

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$password = $_POST['password'];


if ($name==''|| $email==''||$password=='')
 {
	echo "please fill required fields";
}
else
{

	$query = "select * from registration where email='$email'";
	$result = mysqli_query($conn,$query);
	// print_r($result);

	if (mysqli_num_rows($result)>0) 
	{
		header('location:registration.php?error=User Already Exists!!');
	}
	else
	{
		$query = "insert into registration(name,email,phone,address,password)values('$name','$email','$phone','$address','$password')";
		$insert = mysqli_query($conn,$query);
		if ($insert) 
		{
		 header('location:registration.php');
		}
		else
		{
			echo "something went wrong";
		}
	}
 
}
}
?>
