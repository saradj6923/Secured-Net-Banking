			<?php
			session_start();
			include('db.php');
			$error=''; 
			if (isset($_POST['submit'])) {
			if (empty($_POST['uname']) || empty($_POST['password'])) {
			$error = "username or password is invalid";
			}
			else
			{

			$uname=$_POST['uname'];
			$password=$_REQUEST['password'];
			//echo $acno2;
			$query = mysqli_query($con,"select * from register where uname='$uname' AND password='$password'");
			
			$rows = mysqli_num_rows($query);
			$rows_data= mysqli_fetch_assoc($query);	
			//$acno=$rows_data['Ac_No'];
			//echo $acno;
			if($rows_data['login_valid'] < 2 )
			{
			if ($rows == 1) 
			{ 
			$_SESSION['uname']=$uname;
			$root = $_SERVER['DOCUMENT_ROOT'];
			header('location: verify_user_login.php');
			} 
			else 
			{
			mysqli_query($con,"UPDATE register SET login_valid = login_valid + 1 WHERE uname = '$uname'"); 
			$error = "username or password is invalid";
			}
			}
			else
			{
				echo "<font color='red'>Your Account is Locked</font>";
			}
			mysqli_close($con);
			}
			}
			?>