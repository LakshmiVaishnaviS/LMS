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
	
	$isbn = $_POST['isbn'];
	$bname = $_POST['bname'];
	$category = $_POST['category'];
	$author = $_POST['author'];
	$lang = $_POST['lang'];
	
	
	$sql = "INSERT INTO books (book_isbn, book_name, category, author, language) VALUES ('$isbn', '$bname', '$category', '$author', '$lang');";
	 mysql_select_db('lms');
	$result = mysql_query($sql, $link);
	
	if ($result == true) {
		
		echo "<script>alert('Thank You for Lending !! ')</script>";
	}
	else {
		echo "<script> alert('Cannot Execute Query')</script>";		
		
	}
	
	mysql_close($link);
?>