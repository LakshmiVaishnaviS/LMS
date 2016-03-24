<?php 
$link = @mysql_connect("localhost" , "root", "");
	
	if ($link == false) {
		echo "<script> alert('Can't Connect to Database Server...')</script>";
		exit;
	}
	
	if (mysql_select_db("lms", $link) == false) {
		echo "<script> alert('Can't Connect to Database...')</script>";
		exit;
	}
	
	$phno = $_POST['phno'];
	$name = $_POST['name'];
	$mail_id = $_POST['email'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$password = $_POST['psw'];
	$re_password=$_POST['repsw'];
	
	if ($password != $re_password) {
		
		echo "<script> alert('Password Missmatch. Try Again.')</script>";
		exit;
	}
	
	$sql = "INSERT INTO lenders (ph_no, name, mail_id, dob, gender, password) VALUES ('$phno', '$name', '$mail_id', '$dob', '$gender', '$password');";
	 mysql_select_db('lms');
	$result = mysql_query($sql, $link);
	
	if ($result == true) {
		
		echo "<script> alert('Registered Successfully !!')</script>";
		
		exit;
	}
	else {
		echo "<script> alert('Cannot Execute Query')</script>";		
		
	}
	header('Location: register.php');
	mysql_close($link);
?>