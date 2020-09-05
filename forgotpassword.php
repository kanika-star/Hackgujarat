<?php
$db= new mysqli("localhost","root","","eduthon");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Forgot Password PAGE</title>
<style>
  body{
        background-color: #32527b;
	padding-top:7%;
	background-image:url('https://s2.best-wallpaper.net/wallpaper/1920x1080/1711/Wind-power-station-sea-boat_1920x1080.jpg');
	background-repeat:no-repeat;
	background-size:cover;
	
    }
  label{
    font-size:20px;
    
  }

</style>
</head>
<body>
 
  <form method="post">
     
	<div style="border:2px solid #ffffff00;padding:20px;margin-right:32%;margin-left:32%;">
        <center>
	<h2><u>Forgot Password</u></h2><br>
	<label for="username" >Username</label><br>
	<input type="text" id="username" name="username" placeholder=" Enter username" size="30" required><br><br>
	<label for="email id">Email Id</label><br>
	<input type="email" id="email id" name="email" placeholder=" Enter Email Id" size="30" required><br><br>
	<label for="adharcard" >Adharcard</label><br>
	<input type="text" id="adharcard" name="adharcard" placeholder=" Enter Adharcard Number" size="30" required><br><br>
	<label for=" new_password" >New Password</label><br>
	<input type="password" id="new_password" name="new_password" placeholder=" Enter New Password " size="30" required><br><br>
	<label for=" new_password" >Confirm Password</label><br>
	<input type="password" id="confirm_password" name="confirm_password" placeholder=" ReEnter Password " size="30" required><br><br>
	<button type="submit" name="submit" style="width:25%;font-size:14px;padding:10px;background-color:Green">Change Password</button>
	</center>
	</div>
     
  </form>
<?php
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$email=$_POST['email'];
		$adharcard=$_POST['adharcard'];
		$password=$_POST['new_password'];
		$cnfpassword=$_POST['confirm_password'];
		//echo "$cnfpassword";
		if ($password != $cnfpassword)
		{
			echo "<script>alert('Password and Confirm Password doesn't Match!')</script>";
			echo "<script>open('forgotpassword.php','_self')</script>";
		}
		else
		{
			$sql="select * from register where username='{$username}' and adharcard='{$adharcard}'";
			$query=mysqli_query($db,$sql);
			if($s=mysqli_fetch_row($query))
			{
				$sql1="update register set password='{$password}' where username='{$username}'";
				if($db->query($sql1))
				{
					echo "<script>alert('Password changed successfully')</script>";
					echo "<script>open('login.php','_self')</script>";
				}
				else
				{
					echo "<script>alert('Password changed Failed!')</script>";
					echo "<script>open('forgotpassword.php','_self')</script>";
				}
			}
			else
			{
				echo "<script>alert('Password changed Failed!')</script>";
				echo "<script>open('forgotpassword.php','_self')</script>";
			}
		}
	}
  
?>
</body>
</html>