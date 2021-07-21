<?php
 session_start();
 $mo=$_SESSION['mysession'];
 ?>
<?php include "header-student.php"; ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
 <div class="col-sm-12 text-left"> 
      <h1 style="color:blue; font-weight: bold">
        Uploads Issue
      </h1>
      <hr>
      <br>
      <form action="" method="post" enctype="multipart/form-data">
  Name : <input type="text" name="na" class="form-control">
  <br>
  Class : <input type="text" name="cl" class="form-control">
  <br>
  Issue : <input type="text" name="is" class="form-control">
  <br>
  <input type="submit" name="sb" class="btn btn-primary">
  <br>
</form>
<?php
if($_POST)
{   
  
    extract($_POST);
    $c=mysqli_connect("localhost","root","","project_php");
    mysqli_query($c,"insert into issue values('','$na','$cl','$is')");
  echo "Done"; 
}
?>
    </div>
  </div>
</div>
<br><br><br><br><br><br>
<?php include "footer.php"; ?>

