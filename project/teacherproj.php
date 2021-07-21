<h1>
	<center>
		Teacher Register
	</center>
</h1>
<form action="" method="post">
	Mobile : <input type="text" name="mo">
	<br><br>  
	Password : <input type="password" name="pa">
	<br><br>
    <input type="submit" name="su">
</form>
<?php
  if ($_POST) {
  	extract($_POST);
  	$c=mysqli_connect("localhost","root","","project_php");
  	mysqli_query($c,"insert into teacher values('','$mo','$pa')");
  	echo "Success";
  }
  ?>