
<?php

include("connect.php"); 
$tbl_name="user_levels"; 

$username=$_POST['username']; 
$password=$_POST['password']; 
$user_level = $_POST['user_level']; 

$result = mysqli_query($dbhandle, "INSERT INTO $tbl_name (username,password,userlevel) VALUES ('$username','$password','$user_level')");


if($result===TRUE)
{
echo "<script>alert('User Account has been saved in the database.');
						window.location='index.php';
						</script>";
}						
else
{
  echo"The query did not run";
} 
mysqli_close($result);


?>

