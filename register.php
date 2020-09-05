<?php
$db= new mysqli("localhost","root","","EDUTHON");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>SIGNUP PAGE</title>
<style>
  body{
        background-color: #32527b;
	/*padding-top:1%;
	background-image:url('https://s2.best-wallpaper.net/wallpaper/1920x1080/1711/Wind-power-station-sea-boat_1920x1080.jpg');
	background-repeat:no-repeat;
	background-size:cover;
	*/
    }
  label{
    font-size:19px;
    width:28%;
    display:inline-block;
  }


  input[type=text],input[type=number],input[type=password]{
    width:50%;    
    margin-right:5%;
  }

  select{
    width:51%;
  }

</style>
</head>
<body>
 
  <form method="post">
     
	<div style="border:2px solid black;padding:10px;margin-right:30%;margin-left:30%;background-color:gray;">
        <center><h2><u>Registration Form</u><h2></center><br>

	<label for="Name" >Name :</label>
	<input type="text" id="Name" name="name" placeholder="eg. Ram Rajput" size="30" required><br><br>

	<label for="father's name" >Father's Name :</label>
	<input type="text" id="father's name" name="fathersname" placeholder="eg. Vishnu Rajput" size="30" required><br><br>

	<label for="gender">Gender :</label>
	<input type="radio" id="male" name="gender" value="male">
        <label for="male" style="color:black">Male&nbsp;&nbsp;&nbsp;</label>
	<input type="radio" id="female" name="gender" value="female">
	<label for="female" style="color:black">Female</label><br><br>

	<label for="mobile" >Mobile No.:</label>
	<input type="number" id="mobile" name="mobileno" placeholder="eg. 9870445678" maxlength="10" minlength="10" required><br><br>

	<label for="email" >Email Id :</label>
	<input type="text" id="email" name="email" placeholder="eg. abc@gmail.com" size="30" required><br><br>

	<label for="Address" >Address :</label>
	<input type="text" id="Address" name="address" placeholder="eg. B/42 Dhiram Colony" size="30" required><br><br>
	
	<label for="city">City:</label>
	<input type="text" id="city" name="city" placeholder="eg. Modinagar" required><br><br>

	<label for="state">State: </label>
	<select name="state" id="state" required>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select><br><br>

	<label for="pincode" >Pincode :</label>
	<input type="number" id="Pincode" name="pincode" placeholder=" Enter Pincode" size="6" maxlength="6" minlength="6" required><br><br>

	<label for="Username" >Username :</label>
	<input type="text" id="Username" name="username" placeholder=" Enter Username" size="30" required><br><br>

	<label for="passsword">Password :</label> 
	<input type="password" id="password" name="password" placeholder=" Enter password" size="30" required><br><br>

	<label for="adharcard">Adhar Card:</label>
	<input type="number" id="adharcard_number" name="adharcard" placeholder="eg. 987687655432" maxlength="12" minlength="12" required><br><br>

	<label for="board">Board :</label>
	<select name="board" id="board" required>
<option value="C.B.S.E.">C.B.S.E.</option>
<option value="I.C.S.E.">I.C.S.E.</option>
</select><br><br>

	<label for="standard">Class :</label>
	<select name="class" id="standard" required>
		<option value="X">X</option>
		<option value="XI">XI</option>
		<option value="XII">XII</option>
	</select><br><br>

	<center><button type="submit" name="submit" style="width:25%;font-size:14px;padding:10px;background-color:Green">Submit</botton></center>
        <br>
	
	</div>
     
  </form>
  <?php
  if(isset($_POST['submit']))
  {
  $name=$_POST['name'];
  $fathersname=$_POST['fathersname'];
  $gender=$_POST['gender'];
  $mobileno=$_POST['mobileno'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $pincode=$_POST['pincode'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $adharcard=$_POST['adharcard'];
  $board=$_POST['board'];
  $class=$_POST['class'];
  $sql="insert into register values ('{$name}','{$fathersname}','{$gender}','{$mobileno}','{$email}','{$address}'
  ,'{$city}','{$state}','{$pincode}','{$username}','{$password}','{$adharcard}','{$board}','{$class}')";
	if($db->query($sql))
	{
	echo "<script>alert('Registeration Successful')</script>";
	echo "<script>open('login.php','_self')</script>";
	}
	else
	{
	echo "<script>alert('Registeration Failed!')</script>";
	echo"<script>window.open('register.php')</script>";
	}
  }
?>
</body>
</html>