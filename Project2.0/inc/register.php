<?php
require_once("config.php");
 
if(isset($_POST['submit']))
{
	$firstName 	= htmlentities(trim($_POST['first_name']),ENT_QUOTES);
	$lastName 	= htmlentities(trim($_POST['last_name']),ENT_QUOTES);
	$email 		= htmlentities(trim($_POST['email']),ENT_QUOTES);
	// $phone 		= htmlentities(trim($_POST['phone']),ENT_QUOTES);
	$password 	= htmlentities(trim($_POST['password']),ENT_QUOTES);
	
	
	if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($phone) && !empty($password))
	{
			
			$sql = "select * from users where email = '".$email."'";
			
			$result = mysqli_query($conn, $sql);
			$numRows = mysqli_num_rows($result);
			
			if($numRows == 0)
			{
				$options = array("cost"=>4);
				$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
				
				$sqlInsert = "insert into tbl_users (first_name, last_name, email, phone, password) values('".$firstName."', '".$lastName."' , '".$email."', '".$hashPassword."')";
				$rs = mysqli_query($conn, $sqlInsert);
				
				if($rs)
				{
					$successMsg = "Form has been saved successfully";
				}
				else
				{
					$errorMsg = "Unable to save user. Please try again";
				}
				
 
			}
			else
			{
				$errorMsg = "User already exist";
			}
			
	}
	else
	{
		$errorMsg = 'All fields are required';
	}
	
	
}
 
 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="container">
	<h3 class="heading">Registration Form</h3>
	<?php 
		if(isset($errorMsg))
		{
			echo '<div class="error_msg">';
			echo $errorMsg;
			echo '</div>';
			unset($errorMsg);
		}
		
		if(isset($successMsg))
		{
			echo '<div class="success_msg">';
			echo $successMsg;
			echo '</div>';
			unset($successMsg);
		}
		
	?>
	<div class="form-cont">
		<form name="myForm" id="registrationForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
			<label for="firstName">First Name</label>
			<input type="text" name="first_name" placeholder="Type your First Name" id="firstName"/> 
			
			<label for="lastName">Last Name</label>
			<input type="text" name="last_name" placeholder="Type your Last Name" id="lastName"/> 
			
			<label for="emailAddress" >Email</label>
			<input type="text" name="email" placeholder="Type your Email" id="emailAddress"/> 
			
			<label for="phone" >Phone</label>
			<input type="text" name="phone" placeholder="Type your Email" id="phone"/> 
			
			<label for="password">Password</label>
			<input type="password" name="password" placeholder="Type your Password" id="password"/>
			<input type="submit" id="submitForm" value="Submit" name="submit"/>
		</form>
	</div>
</div>
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../assets/js/reg-script.js"></script>
</body>
</html>