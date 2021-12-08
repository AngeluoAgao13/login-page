<?php 
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
 
<html>
<head>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="global.css">
<style>body{
    background-image: url(./img/ssu.jpg);
    background-size: cover;
  }
  .form-wrapper{
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }



  </style>

</head>
<body>
<div class="form-wrapper">
  <div class="box">
    <h3>Login Succesfully <?php echo $row['name']; ?>!</h3>
	 <div class="logout">
    <p><a href="logout.php" class= "button">Log out</a></p>
  </div>
  </div> 
</div>

</body>
</html>