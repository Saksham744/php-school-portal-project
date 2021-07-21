<?php include "header.php"; ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
 <div class="col-sm-12 text-left"> 
     <h1 style="color:blue; font-weight: bold">
	<center>
		Teacher Register
	</center>
</h1>
<form action="" method="post">
	Mobile : <input type="text" name="mo" class="form-control">
	<br><br>  
	Password : <input type="password" name="pa" class="form-control">
	<br><br>
    <input type="submit" name="su" class="btn btn-primary">
</form>
<?php
  if ($_POST) {
  	extract($_POST);
    $pa=md5($pa);
    $check = preg_match("/^[0-9]{10,10}$/",$mo);
    if(!$check)
      {
        echo "Invalid";
        exit;
      }
  	$c=mysqli_connect("localhost","root","","project_php");
  	mysqli_query($c,"insert into teacher values('','$mo','$pa')");
  	echo "Success";
  }
  ?>
      
    </div>
  </div>
</div>
<br><br><br><br><br><br>
<?php include "footer.php"; ?>


