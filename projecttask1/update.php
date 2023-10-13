		
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<style>
		h1
		{
			color: green;
		}
		body
		{
			background-image: url("images/pro4.jfif");
		}
		.form
		{
			background-color: rgba(0, 0, 0, 0.1);
			color: white;
		}
		.top
		{
			width: 100%;
			background-color:#951a7a;
			color: white;
			height: 60px;
			display: flex;
		}
		.top1
		{
			width: 50%;
		}
		.top2
		{
			width: 25%;
			margin-top:11px;
			float: left;
		}
		.top3
		{
			width: 25%;
			margin-top:11px;
		}
	</style>
</head>
<body>
	<div class="top">
    <div class="top1">
    <p></p>	
    </div>
    <div class="top2">
    	<span>Already Registered</span>&nbsp;<a href="login.php"><button type="submit" class="btn btn-danger"> Login</button></a>
		
    </div>
    <div class="top3">
    	
	
    </div>
	</div>
<div class="container-fluid">

  <div class="row">
    <div class="col-md-4">  
    </div>

   <div class="col-md-4">
   	<h1 style="color: pink;">Update Information</h1>
   	<hr style="color:pink;">
   	<div class="form">
	<form action="insert.php" method="post">
    <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" name="fname"  placeholder="Enter fname" required>
   
  </div>
    <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" name="lname"  placeholder="Enter lname" required>
   
  </div>
    <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" name="city"  placeholder="Enter city" required>
   
  </div>
    <div class="form-group">
    <label for="state">State</label>
    <input type="text" class="form-control" name="state"  placeholder="Enter state" required>
   
  </div>
    <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address"  placeholder="Enter address" required>
   
  </div>
  <br>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password"  placeholder="Enter Password" required>
   
  </div>
  <br>
 <div class="form-group">
    	
  <button style="text-align: center;" type="submit" class="btn btn-danger">Update</button>
   
  </div>

   </div>


</form>
</div>
    <div class="row">
    <div class="col-md-4">  
    </div>
</body>
</html>


