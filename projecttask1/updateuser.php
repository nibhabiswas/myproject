<?php
include'db_conn.php';
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['id'])) 
{
if(isset($_POST['update'])) // when click on Update button
{
    
    $name = $_POST['name'];
      $id = $_POST['id'];
   
    $phone = $_POST['phone'];
    $address = $_POST['address'];
   $query="update registration SET name='$name', phone='$phone', address='$address' where id=$id";

    $data = mysqli_query($conn,$query);
     if($data)
    {
        mysqli_close($conn); // Close connection
        header('location:allusers.php'); // redirects to all records page
        exit;
    }
    else
    {
         header('location:show_user.php');
    }        
}


}
 else
    {
         header('location:login.php');
    } 

?>