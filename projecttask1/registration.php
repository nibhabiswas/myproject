		
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
/*			background-image: url("images/pro5.jfif");*/
		}
		.pgreen
		{
			background-color: red;
			width: 44%;
		}
		.form
		{
			/*background-color: rgba(0, 0, 0, 0.1);
			color: white;*/
		}
		.top
		{
			width: 100%;
			background-color:;
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
		.btncolor
		{
			background-color: #04AA1F;
			width: 34%;
			height: 40px;
			border-radius: 12px;
			border:none;
		
		}
	</style>
</head>
<body>
	<div class="top">
    <div class="top1">
    <p></p>	
    </div>
    <div class="top2">
    	<span style="	margin-right: 50px; color: #04AA1F;">Already Registered?</span>&nbsp;<a href="login.php"><button type="submit" class="btncolor" style="color:white;"> Login</button></a>
		
    </div>
    <div class="top3">
    	
	
    </div>
	</div>
<div class="container-fluid">

  <div class="row">
    <div class="col-md-4">  
    </div>

   <div class="col-md-4">
   	<h1 style="color: #04AA1F;">User Registration</h1>
   	<hr style="color:#04AA1F;">
   	<?php
   	 if(isset($_GET['error']))
            {
                echo '<p class="error pgreen"  style=color:white;>'.$_GET['error'].'</p>';
                
                }

                ?>
   	<div class="form">

	<form action="store.php" method="post">
    <div class="form-group">
    <label for="fname"> Name</label>
    <input type="text" class="form-control" name="name"  placeholder="Enter name" required>
   
  </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email"  placeholder="Enter email" required>
   
  </div>
    <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone"  placeholder="Enter phone" required>
   
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
    	
  <button style="text-align: center;color: white;" type="submit" class="btncolor" name="submit">Submit</button>
   
  </div>

   </div>


</form>
</div>
    <div class="row">
    <div class="col-md-4">  
    </div>
</body>
</html>


