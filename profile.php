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
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #951a7a;;
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
.box
{
  width: 500px;
  height: 200px;
  background-color: aqua;
  margin-left: 200px;
}

	</style>

</head>
<body>
<div class="sidebar">
    <a class="active" href="profile.php">Profile</a>
  <a href="allusers.php">All Users</a>
  <a href="logout.php">Logout</a>
</div>
<h1>Admin Section</h1>

<div class="box" align="center">
  <ul>
    <li>Name</li>
    <li>Name</li>
    <li>Name</li>
    <li>Name</li>
    <li>Name</li>
  </ul>
</div>

</body>
</html>



