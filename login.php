<?php
	include "header.php";
	?>
			    <li><a href='index.php'><span>Home</span></a></li>
			    <li><a href='register.php'><span>Register</span></a></li>
			    <li class='active'><a href='login.php'><span>Login</span></a></li>
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
		<br><br><h2 class="style" align="center">Welcome Lender !</h2><br><br><br><br>
		<form align="center" action="login_check.php" method="post" target=""_blank>
		Phone No.&nbsp&nbsp&nbsp&nbsp&nbsp <input type="number" name="phno" required="true" style="width:150px" maxlength="12"/><br><br><br><br>
		Password&nbsp&nbsp&nbsp&nbsp&nbsp <input type="password" name="psw" required="true" style="width:150px"><br><br><br><br>
		<input type = "submit" value="Login" />
		</form>
			
  			<?php
	include "footer.php";
   ?>