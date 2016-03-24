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
	session_start();
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myphno = $_POST['phno'];
      $mypassword = $_POST['psw']; 
      
      $sql = "SELECT ph_no FROM lenders WHERE ph_no = '$myphno' and password = '$mypassword'";
	  mysql_select_db('lms');
      $result = mysql_query($sql,$link);
      $row = mysql_fetch_array($result,MYSQL_ASSOC);
      
      
      $count = mysql_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		  
         $_SESSION['login_user'] = $myphno;
         
         header("location: login_action.php");
		 mysql_close($link);
		 die();
      }else {
		  
         header("location:login_error.php");
		 }
   }
   mysql_close($link);
?>

	
	
	
		  
		  
		  
		 
	