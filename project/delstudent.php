<?php
 session_start();
 $mo=$_SESSION['mysession'];
 ?>
<?php include "header-teacher.php"; ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
 <div class="col-sm-12 text-left"> 
      <h1 style="color:blue; font-weight: bold">
        Delete Student
      </h1>
      <hr>
      <br>
      <form action="" method="post" enctype="multipart/form-data">
      Enter Student Mobile No.: <input type="text" name="mob" class="form-control">
      <br>
  <input type="submit" name="sb" class="btn btn-primary">
  <br>
</form>
<?php
if($_POST)
{   
 
    
    extract($_POST);
    $c=mysqli_connect("localhost","root","","project_php");
    mysqli_query($c,"DELETE from student where mobile='$mob'");
    echo "Deleted!"; 
}
?>
    </div>
  </div>
</div>
<br><br><br><br><br>
<?php include "footer.php"; ?>
