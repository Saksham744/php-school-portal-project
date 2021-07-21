<h1>
	<center>
		Student Education Portal
	</center>
</h1>
<form action="" method="post">
	Name : <input type="text" name="na">
	<br><br>
	Mobile : <input type="text" name="mo">
	<br><br>  
	Password : <input type="password" name="pa">
	<br><br>
	Roll Number : <input type="text" name="ro">
	<br><br>
	Class : <input type="text" name="cl">
	<br><br>
    <input type="submit" name="su">
</form>
<?php
  if ($_POST) {
  	extract($_POST);
  	$c=mysqli_connect("localhost","root","","project_php");
  	mysqli_query($c,"insert into student values('','$na','$mo','$pa','$ro','$cl')");
  	echo "Success";
  }
  ?>