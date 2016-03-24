<?php
	include "header.php";
	?>

			    <li><a href='index.php'><span>Home</span></a></li>
				<li><a href='register.php'><span>Register</span></a></li>
				<li><a href='login.php'><span>Login</span></a></li>
			    <li class='active'><a href='search.php'><span>Search</span></a></li>
			    
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

			<br><br><h2 class="style" align="center">All the Available Books are </h2><br><br><br>
			
			<table align="center" width="1000" border="1" cellpadding="1" cellspacing="1">
		  <b><tr>
		  <th>ISBN</th>
		  <th>NAME</th>
		  <th>CATEGORY</th>
		  <th>AUTHOR</th>
		  <th>LANGUAGE</th>
		  </tr>
		  </b>
		  <?php 
		  

	$link = @mysql_connect("localhost" , "root", "");
	
	mysql_select_db('lms');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
            
      $author = $_POST['author'];
    
	
	$sql="SELECT * FROM books WHERE author = '$author'";
	$records=mysql_query($sql);


		  while($book=mysql_fetch_assoc($records)) {
			  echo "<tr>";
			  echo "<td>".$book['book_isbn']."</td>";
			  echo "<td>".$book['book_name']."</td>";
			  echo "<td>".$book['category']."</td>";
			  echo "<td>".$book['author']."</td>";
			  echo "<td>".$book['language']."</td>";
			  echo "</tr>";
		  }
	}
		  ?>
		  </table>
  			<?php
	include "footer.php";
   ?>