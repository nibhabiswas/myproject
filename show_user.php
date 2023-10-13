<?php
include'db_conn.php';
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['id'])) 
{
	  // $id = $_POST['id'];
	$query="select * from registration where id=".$_GET['id'];
	$result = mysqli_query($conn,$query);
	$row=mysqli_fetch_array($result);




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.show_user
		{
			width: 100%;
			height: 400px;
			background-color: red;
		}
	</style>
</head>
<body>
<div class="show_user">
	<h1>Show User Data:</h1>
	<p><?php echo $row['name']  ;?></p>
	<p><?php echo $row['email']  ;?></p>
	<p><?php echo $row['phone']  ;?></p>
	<p><?php echo $row['address']  ;?></p>
	<p><a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a></p>

</div>
</body>
</html>
<?php
}
else
{
	header('location:login.php');
}
