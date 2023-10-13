<?php
include'db_conn.php';
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['id'])) 
{

 $id = $_GET['id']; // get id through query string


$qry = mysqli_query($conn,"SELECT * from registration where id='".$_GET['id']."'");


 $row=mysqli_fetch_array($qry);// fetch data


}




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    
	<div class="row">
  <div class="container">
  <div class="row">
    <div class="col-md-4">  
    </div>


    <div class="form">

    <form action="updateuser.php" method="post">
    <div class="form-group">
    <label for="fname"> Name</label>
    <input type="text" class="form-control" name="name"  value="<?php echo $row['name']; ?>"  placeholder="Enter name" required>
   
  </div>

   
  </div>
      <div class="form-group">
    <label for="phone">Email</label>
    <input type="text" class="form-control" name="Email"  value= "<?php echo $row['email']; ?>"  placeholder="Enter Email" required readonly>


    <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone"  value= "<?php echo $row['phone']; ?>"  placeholder="Enter phone" required>
   
  </div>
    <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address"  value="<?php echo $row['address']; ?>"  placeholder="Enter address" required>
   
  </div>
  <br>

   <input type="hidden" class="form-control" name="id" value="<?php echo $_GET['id']; ?>" placeholder="Enter address">
  </div>
 
  <button type="submit"  name="update" class="btn btn-danger">Update</button>


</form>
    </div>
    <div class="col-md-4">
     
    </div>
  </div>
</div>


   
</body>
</html>

