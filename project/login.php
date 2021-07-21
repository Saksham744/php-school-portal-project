<?php include "header.php"; ?>
 
<div class="container-fluid text-center">    
  <div class="row content">
 <div class="col-sm-12 text-left"> 
 	<center>
      <h1 style="color:blue; font-weight: bold">Login Form</h1></center>
<form action="" method="post">
	Mobile : <input type="text" name="mo" class="form-control">
	<br><br>
	Password : <input type="password" name="pa" class="form-control">
	<br><br>
	Type : <input type="radio" name="ty" value="Teacher">Teacher
	       <input type="radio" name="ty" value="Student">Student 
	<br><br>
	<input type="submit" name="st" value="Login" class="btn btn-primary">
</form>
<?php
if($_POST) {
	extract($_POST);
    $pa=md5($pa);
    $check1 = preg_match("/^[a-zA-Z]{5,30}$/",$ty);
    $check2 = preg_match("/^[0-9]{10,10}$/",$mo);
    if((!$check1)||(!$check2))
  {
    echo "Invalid";
    exit;
  }
	if ($ty == "Teacher")
 	{
		include "connection.php";
		$k=mysqli_query($c,"select * from teacher where mobile='$mo' and password='$pa'");
		if(mysqli_num_rows($k)==0)
    {
    	echo "invalid login";
    }
    else
    {
    	session_start();
    	$_SESSION['mysession'] = $mo;
    	header("location:dashboardteacher.php");
    }
 	}
    else if ($ty == "Student")
    {
     include "connection.php";
		$k=mysqli_query($c,"select * from student where mobile='$mo' and password='$pa'");
		if(mysqli_num_rows($k)==0)
    {
    	echo "invalid login";
    }
    else
    {
    	session_start();
    	$_SESSION['mysession'] = $mo;
    	header("location:dashboardstudent.php");
    }
    } else {
    	echo "Invalid";
    }

}
?>
      
    </div>
  </div>
</div>
<br><br><br><br><br><br>
<?php include "footer.php"; ?>




