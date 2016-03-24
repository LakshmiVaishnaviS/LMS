<?php 
include "header.php";
?>
			    <li><a href='index.html'><span>Home</span></a></li>
				<li><a href='register.php'><span>Register</span></a></li>
				<li class='active'><a href='login_action.php'><span>Lend</span></a></li>
			    <li><a href='search.php'><span>Search</span></a></li>
			    <li class='last'><a href='logout.php'><span>Logout</span></a></li>
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

			<br><br><h2 class="style" align="center">Lend Your Treasure . . . </h2><br><br><br>
			
			
  			<div class="clear"></div>
		  </div>
		  <form align="center" action="add_book.php" method="post">

<font color="purple">

Book ISBN&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="isbn" required="true" style="width:150px"><br><br><br><br>
Book Name&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="bname" required="true" style="width:150px"><br><br><br><br>
Book Category&nbsp&nbsp&nbsp&nbsp  <select name="category" style="width:150px">
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
</select>

<br> <br><br><br>
Book Author&nbsp&nbsp&nbsp&nbsp<input type="text" name="author" required="true" style="width:150px"><br><br><br><br>
Book Language&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="lang" required="true" style="width:150px"/><br><br><br><br>
<input type = "submit" value="Lend" />
 </font>
</form>

<?php 
include "footer.php";
?>