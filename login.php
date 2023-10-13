<!-- 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
		body
		{
			background-color: black;
			background-image: url("images/pro5.jfif");
		}
		.main
		{
			width: 100%;
			height: 200px;
			display: flex;
			color: white;

		}
		.formmm
		{
			margin: 0 auto;
			margin-top: 100px;
			width: 600px;
			height: 300px;
			background-color: rgba(0, 0, 0, 0.1);
			border-radius: 10px;
			color: #951a7a;
			
		}
	</style>
	<title></title>
</head>
<body>
<div class="main" >
	<div class="formmm">
	<form action="dologin.php" method="post">
	


		<h1 style="color:pink; margin-left: 8px;">Login Here!!!</h1><hr style="color:green;">
		 
		 <?php

            //if(isset($_GET['error']))
            //{
              //  echo '<p class="error">'.$_GET['error'].'</p>';
                
              //  }

              //  ?>
		 <label for="email" style="margin-left: 8px;">Email</label>
		<input type="text" name="email" class="form-control" >
		<label for="password" style="margin-left: 8px;">Password</label>
		<input type="password" name="password" class="form-control"  >
		<button type="submit" name='submit' class="btn btn-danger" style="margin-left: 8px;">Loginn</button>
	</form>
	<p class="center">
		<a href='registration.php' style="float:left;">Register Here</a>
	</p>

	</div>
</div>
</body>
</html>
 -->





 <html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login page</title>
  <style type="text/css">
    body 
{
  font-family:Arial; 
  background: -webkit-linear-gradient(to right, #155799, #159957); 
  background: linear-gradient(to right, #155799, #159957); 
  color:whitesmoke;
}
.headingsContainer{
    text-align: center;
}
.mainContainer{
    padding: 16px;
}
input[type=text], input[type=password]{
    width: 100%;
    margin: 10px 0;
    border-radius: 5px;
    padding: 15px 18px;
    box-sizing: border-box;
  }
  button {
    background-color: #030804;
    color: white;
    padding: 14px 20px;
    border-radius: 5px;
    margin: 7px 0;
    width: 100%;
    font-size: 18px;
  }

button:hover {
    opacity: 0.6;
    cursor: pointer;
  }
  h1{
    text-align: center;
}
h3{
  font-size: 30px;
}


form{
    width:35rem;
    margin: auto;
    color:whitesmoke;
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: rgba(11, 15, 13, 0.582);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
}
.subcontainer{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}

.subcontainer a{
    font-size: 16px;
    margin-bottom: 12px;
}

  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 25%;
}

  </style>
</head>
<body>
  <form action="dologin.php" method="post">
    <a href="login.php"><img src="images/login.jpg" height="120px" width="60px" class="center"></a>
        <div class="headingsContainer">
            <h3>Login Here!!!!!</h3>
            <p>Sign in with your email and password</p>

            <?php

            if(isset($_GET['error']))
            {
                echo '<p class="error">'.$_GET['error'].'</p>';
                
                }
                   

                ?>
                <?php
                if(isset($_GET['success']))
           		 {
                	echo '<p class="success">'.$_GET['success'].'</p>';
                
                }

                ?>
        </div>
        <div class="mainContainer"><!-- Username -->
        
            <label for="email">Your email</label>
            <input type="text" placeholder="Enter Email" name="email" >
            <br><br>
            <label for="password">Your password</label>
            <input type="password" placeholder="Enter Password" name="password">

            <div class="subcontainer">
                
                
            </div>

            <button type="submit">Login</button>

            

        </div>

    </form>
</body>
</html>