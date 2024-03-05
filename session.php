<?php
session_start();
include ('db.php');
// Starting Session
$user_check=$_SESSION['uname'];
$ses_sql=mysqli_query($con,"select * from register where uname='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$user_id =$row['register_id'];
$user_name =$row['uname'];
if(!isset($user_id)){
mysql_close($con); 
$root = $_SERVER['DOCUMENT_ROOT'];
header('Location: login.php');
}
?>