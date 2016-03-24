<?php
	include "header.php";
	?>

			    <li><a href='index.php'><span>Home</span></a></li>
				<li  class='active'><a href='register.php'><span>Register</span></a></li>
				<li><a href='login.php'><span>Login</span></a></li>
			    <li><a href='search.php'><span>Search</span></a></li>
			    
			 	<div class="clear"></div>
			 </ul>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
</div>
<div class="main_btm">
<div class="wrap">
	<div class="main">
		<div class="content">

			<br><br><h2 class="style" align="center">To become a Lender . . .</h2><br>
			<br><br><h2 class="style" align="center">Register Now !</h2><br><br><br><br>
			
  			<div class="clear"></div>
		  </div>
		  <form align="center" action="register_action.php" method="post">

<font color="purple">
Phone No.&nbsp&nbsp&nbsp&nbsp&nbsp <input type="number" name="phno" required="true" style="width:150px" maxlength="10"/><br><br><br><br>
User Name&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="name" required="true" style="width:150px"><br><br><br><br>
E-Mail Id&nbsp&nbsp&nbsp&nbsp&nbsp <input type="email" name="email" required="true" style="width:150px"><br><br><br><br>
Date of Birth&nbsp&nbsp&nbsp&nbsp  <input type="date" name="dob" required="true" style="width:150px"><br> <br><br><br>
Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="gender" value="male" checked><font color="black"> Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="radio" name="gender" value="female"> Female</font><br><br><br><br>


Enter Password&nbsp&nbsp&nbsp    <input type="password" name="psw" required="true" style="width:150px"><br><br><br><br>
Re-Enter Password&nbsp&nbsp <input type="password" name="repsw" required="true" style="width:150px"><br><br><br><br>
<input type = "submit" value="Submit" />
 </font>
</form>

	<?php
	include "footer.php";
   ?>