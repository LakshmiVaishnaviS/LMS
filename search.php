<?php
	include "header.php";
	?>
	<li><a href='index.php'><span>Home</span></a></li>
			    <li><a href='register.php'><span>Register</span></a></li>
			    <li><a href='login.php'><span>Login</span></a></li>
			    <li  class='active'><a href='search.php'><span>Search</span></a></li>
				
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

		<br><br><h2 class="style" align="center">Explore the Wide Range of Available Books</h2><br><br><br><br>
		<form align="center" action="category_search.php" method="post">
		Book Category&nbsp&nbsp&nbsp&nbsp<select name="category">
<option value="">-Select- </option>
<option value="Science fiction">Science</option>
<option value="Satire">Satire </option>
<option value="Drama">Drama </option>
<option value="Health">Health </option>
<option value="Travel">Travel </option>
<option value="Children">Children's </option>
<option value="Spirituality">Spirituality </option>
<option value="Art">Art </option>
<option value="Cookbook">Cookbook </option>
<option value="Fantasy">Fantasy </option>
</select>&nbsp&nbsp&nbsp&nbsp&nbsp <input type = "submit" name="bygenere" value="Search" /><br><br><br></form>
<hr>
<br><br><br>
<form align="center" action="author_search.php" method="post">
Book Author&nbsp&nbsp&nbsp&nbsp<input type="text" name="author" required="true" size="5" style="width:150px">&nbsp&nbsp&nbsp&nbsp&nbsp <input type = "submit" name="byauthor" value="Search" /><br><br><br></form>
<hr>
<br><br><br>
<form align="center" action="lang_search.php" method="post">
Book Language&nbsp&nbsp&nbsp&nbsp<input type="text" name="lang" required="true" size="5" style="width:150px">&nbsp&nbsp&nbsp&nbsp&nbsp <input type = "submit" name="bylender" value="Search" /><br><br><br></form>
<hr>
<br><br><br>
<form action="all_search.php" align="center">		
		<input type = "submit" name="all" value="Show All" /><br><br><br>
		</form>
			
<?php
	include "footer.php";
   ?>