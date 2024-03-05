<?php 
include("db.php");
if(isset($_POST['submit']))
{
$uname = $_POST['uname'];
$login_valid = $_POST['login_valid'];
$img_valid = $_POST['img_valid'];
$query2=mysqli_query($con,"UPDATE register SET login_valid = '$login_valid',img_valid='$img_valid' WHERE uname = '$uname'");
if($query2)
{
echo "<script>alert('Lock reset Successfully'); window.location = './adminmenu.php';</script>";
}
}
?>