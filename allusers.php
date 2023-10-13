<?php
include'db_conn.php';
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
$sql="select * from registration where user_role!='admin'";
$result=mysqli_query($conn,$sql);



?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<style>

			body {
  margin: 0;
  font-family: "Lato", sans-serif;
/*  background-image: url("images/pro5.jfif");*/
background-color: ;
}
.tbl{
	margin-top: 0px;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 100%;
  background-color: #f1f1f1;
  position: fixed;
 
  overflow: auto;
}


.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #951a7a;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #951a7a;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
/*  height: 1000px;*/
}
h1
{
	text-align: center;
}
		</style>
	</head>
	<body>
		
	<div class="sidebar">
<!--   <a class="active" href="index.php">Dashboard</a>
  <a class="" href="allusers.php">All Users</a>
  <a  class="" href="logout.php">Logout</a> -->
 <table>
 	<tr>
 		<td>  <a class="active" href="index.php">Dashboard</a></td>
 		<td>  <a class="active" href="allusers.php">All Users</a></td>
 		<td>  <a class="active" href="logout.php">Logout</a></td>

 	</tr>
 </table>
</div>

	

<div class="para">
		<a href="index.php"><button class="btn btn-success">Go To Dashboard</button></a>
	<h1 style="color:green; text-align: center;">List of All Users</h1>
</div>

<div class="tbl">
<table class="table ">
	
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Operations</th>
	</tr>
<?php
 $number=1;
while($row = mysqli_fetch_assoc($result)) 
{
	// print_r($row);
   ?>
<tr>
	<td><?php echo "$number." ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['address']; ?></td>
<td style="display: flex"><a href="edit_user.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success">Edit user</button></a>
<form action="delete_user.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['id']?>">	
<!-- <input type="submit" name="submit" value="Delete" class="btn btn-danger"> -->
<button type="submit" name="submit" value="Delete" class="btn btn-danger">Delete</button>	
</form>
<a href="show_user.php?id=<?php echo $row['id']; ?>"><button class="btn btn-info">Show user</button></a>
</td>

</tr>

   <?php
 $number++;                       
} 
?>
</table>
	</div>
</body>
	</html>
<?php
}
else
{
	header('location:login.php');
}


?>


