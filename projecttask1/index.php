<?php
include 'db_conn.php';
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['id'])) 
{
  ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
		body {
  margin: 0;
  font-family: "Lato", sans-serif;
/*  background-image: url("images/pro5.jfif");*/
background-color: ;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 100%;
  background-color: #f1f1f1;
  position: fixed;
  height: 200px;
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
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
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
  <a class="active" href="allusers.php">All Users</a>
  <a  class="active" href="logout.php">Logout</a> -->
 <table>
  <tr>
    <td>  <a class="active" href="index.php">Dashboard</a></td>
    <td>  <a class="active" href="allusers.php">All Users</a></td>
    <td>  <a class="active" href="logout.php">Logout</a></td>

  </tr>
 </table>

<div class="content2">
<h1>Dashboard  Section</h1>
<h2 align="center">Welcome&nbsp;&nbsp;<?php echo $_SESSION['email']; ?></h2>
<p align="center">Your Email Id Is&nbsp;&nbsp;:&nbsp;&nbsp;<?php  echo $_SESSION['email']; ?></p>
</div>
</div>
</body>
</html>
<?php
}
else
{
  header('location:login.php');
}



