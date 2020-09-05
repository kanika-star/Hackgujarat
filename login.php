<?php
$db= new mysqli("localhost","root","","eduthon");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>LOGIN PAGE</title>
<style>
  body{
        background-color: #fffdd0;
	padding-top:6%;
    }

  label{
    font-size:20px;
    
  }

</style>
</head>
<body>
 
  <form method="post">
     
	<div style="border:1px solid #ffffff00;padding:20px;margin-right:32%;margin-left:32%;">
        <center>
	<h2><u>Login Form</u></h2><br>
	<label for="username" >Username</label><br>
	<input type="text" id="username" name="username" placeholder=" Enter username" size="30" required><br><br>
	<label for="passsword">Password</label><br>
	<input type="password" id="password" name="password" placeholder=" Enter password" size="30" required><br><br>
	<button type="submit" name="submit" style="width:25%;font-size:14px;padding:10px;background-color:Green">Login</botton>
        <br>
	</center>
	<br>
	<a href="register.php"<button type="button" style="background-color:#006994;font-size:14px;padding:10px 18px;margin-left:40px;" >Sign Up</button></a>
	<span style="float:right;"><a href="forgotpassword.php"><b>Forgot Password?</b></a></span>
	 </div>
     
  </form>
  <?php
  if(isset($_POST['submit']))
  {
	$username=$_POST['username'];
    $password=$_POST['password'];
	$sql="select * from register where username='{$username}' and password='{$password}'";
	$query=mysqli_query($db,$sql);
	if($s=mysqli_fetch_row($query))
	{
		//$s=mysqli_fetch_row($query);
	    if ($s[12]=="C.B.S.E.")
		{
			if($s[13]=="X")
		    {
				echo "<script>alert('Login Successful')</script>";
				echo"<script>open('CBSE 10/CBSE 10 HOMEPAGE.html','_self')</script>";
		    }
		    else if($s[13]=="XI")
		    {
				echo "<script>alert('Login Successful')</script>";
				echo"<script>open('C:\wamp64\www\EDUTHON/CBSE 10/CBSE 11 HOMEPAGE.html','_self')</script>";
		    }
		    else if($s[13]=="XII")
		    {
				echo "<script>alert('Login Successful')</script>";
				echo"<script>open('C:\wamp64\www\EDUTHON\CBSE 10\CBSE 12 HOMEPAGE.html','_self')</script>";
		    }
		    else
			{
				echo "<script>alert('Error! Try after some time')</script>";
				echo "<script>open('login.php','_self')</script>";
		    }
		}
		else
		{
			if($s[13]=="X")
			{
				echo "<script>alert('Login Successful')</script>";
				echo"<script>open('C:\wamp64\www\EDUTHON\ICSE 10\ICSE 10 HOMEPAGE.html','_self')</script>";
			}
			else if($s[13]=="XI")
			{
				echo "<script>alert('Login Successful')</script>";
				echo"<script>open('C:\wamp64\www\EDUTHON\ICSE 10\ICSE 11 HOMEPAGE.html','_self')</script>";
			}
			else if($s[13]=="XII")
			{
				echo "<script>alert('Login Successful')</script>";
				echo"<script>open('C:\wamp64\www\EDUTHON\ICSE 10\ICSE 12 HOMEPAGE.html','_self')</script>";
			}
			else
			{
				echo "<script>alert('Error! Try after some time')</script>";
				echo "<script>open('login.php','_self')</script>";
			}
		}
	}
	else
	{
		echo "<script>alert('Unauthorized Access!')</script>";
		echo "<script>open('login.php','_self')</script>";
	}
}

  
  ?>

</body>
</html>