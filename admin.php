<?php
include('db.php');
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['name']) || empty($_POST['password'])) {
$error = "name or password is invalid";
}
else
{

$name=$_POST['name'];
$password=$_POST['password'];

$query = mysqli_query($con,"select * from profile_admin where username='$name' AND password='$password'");
$rows = mysqli_num_rows($query);
if ($rows == 1) { 
$_SESSION['username']=$name;
$root = $_SERVER['DOCUMENT_ROOT'];
header('location: adminmenu.php');
} 
else {
$error = "name or password is invalid";
}
mysqli_close($con);
}
}
?>