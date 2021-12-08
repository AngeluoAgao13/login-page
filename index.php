<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="global.css">

</head>
<body>
<div class="form-wrapper">

<h3><span>Login Form</span></h3>
  <form action="#" method="post">
 
	
    <div class="form-item">
		<input class= "inp1" type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input class= "inp1" type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input class="login"type="submit" class="button" title="Log In" name="login" value="Login"></input>
	</div>
	<?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 	
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:home.php');
					
				}
			else
				{
					echo 'Invalid Username and Password';
				}
		}
  ?>
  </form>
  

</div>

</body>
</html>