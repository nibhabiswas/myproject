<?php
include'db_conn.php';
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
	if (isset($_POST['submit'])) {
		$id=$_POST['id'];
		$sql="delete from registration where id=$id";
		$result=mysqli_query($conn,$sql);
		header('location:allusers.php?success=deleted successfully');
	}
	else
	{
		header('location:allusers.php');
	}
}else
{
header('location:allusers.php');
}
?>
<!-- $sql = "DELETE FROM registration WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('location:allusers.php');

} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

</body>
</html> -->