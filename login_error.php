<?php
include "header.php";			   
?>
				 <li><a href='index.html'><span>Home</span></a></li>
				 <li><a href='register.php'><span>Register</span></a></li>
				<li   class='active'><a href='login.php'><span>Login</span></a></li>
				 <li><a href='search.php'><span>Search</span></a></li>
			    
			    
			 	<div class="clear"></div>
			 </ul>
	</div>
	<div class="search">
    	<form>
    		<input type="text" value="">
    		<input type="submit" value="">
    	</form>
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

			
  			<div class="clear"></div>
		  </div>
		  
		  <?php
		  echo "<script> alert('Invalid Login Phone No. and Password !!')</script>";
		 echo "<a href='login.php' align='center'>Try Again</a>";
		 ?>
		  
		  
		  <?php
		  include "footer.php";
		  ?>