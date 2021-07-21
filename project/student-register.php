<?php include "header.php"; ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
 <div class="col-sm-12 text-left"> 
     
      <h1 style="color:blue; font-weight: bold">
	<center>
		Student Registration
	</center>
</h1>
<form action="" method="post">
	Name : <input type="text" name="na" class="form-control">
	<br>
	Mobile : <input type="text" name="mo" class="form-control">
	<br>
	Password : <input type="password" name="pa" class="form-control">
	<br>
	Roll Number : <input type="text" name="ro" class="form-control">
	<br>
	Class : <input type="text" name="cl" class="form-control">
	<br>
    <input type="submit" name="su" class="btn btn-primary">
    <br>
</form>
<br>
<?php
  if ($_POST) {
  	extract($_POST);
  	$pa=md5($pa);
    $check1 = preg_match("/^[a-zA-Z]{5,30}$/",$na);
    $check2 = preg_match("/^[0-9]{10,10}$/",$mo);
    $check3 = preg_match("/^[0-9]{1,3}$/",$ro);
    $check4 = preg_match("/^[0-9]{1,2}$/",$cl);
    if((!$check1)||(!$check2)||(!$check3)||(!$check4))
  {
    echo "Invalid";
    exit;
  }
  	$c=mysqli_connect("localhost","root","","project_php");
  	mysqli_query($c,"insert into student values('','$na','$mo','$pa','$ro','$cl')");
  	echo "Success";
  }
  ?>
    </div>
  </div>
</div>
<br><br><br><br>
<?php include "footer.php"; ?>



