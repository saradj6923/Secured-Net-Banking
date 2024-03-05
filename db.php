<?php
$con = mysqli_connect("localhost","root","","my_profile");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?> 