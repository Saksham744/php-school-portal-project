<?php
 session_start();
 $mo=$_SESSION['mysession'];
 ?>
<?php include "header-teacher.php"; ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
 <div class="col-sm-12 text-left"> 
      <h1 style="color:blue; font-weight: bold">
        Delete Notes
      </h1>
      <form action="" method="post">
	Topic : <input type="text" name="to">
	<br><br>
    <input type="submit" name="ss">
</form>
<?php
 if($_POST)
 {
 	extract($_POST);
 	$c= mysqli_connect("localhost","root","","project_php");
 	mysqli_query($c,"DELETE from note where topic='$to'");
 	
 	echo "Deleted!";
 }
?>
    </div>
  </div>
</div>
<br><br><br><br><br><br>
<?php include "footer.php"; ?>


