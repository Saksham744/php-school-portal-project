<?php
 session_start();
 $mo=$_SESSION['mysession'];
 ?>
<?php include "header-teacher.php"; ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
 <div class="col-sm-12 text-left"> 
      <h1 style="color:blue; font-weight: bold">
        Upload News
      </h1>
      <hr>
      <br>
      <form action="" method="post">
  News : <input type="text" name="ne" class="form-control">
  <br><br>
  Date : <input type="date" name="da" class="form-control">
  <br><br>
  <input type="submit" name="st" class="btn btn-primary">
</form>
<?php
  if($_POST)
  {
    extract($_POST);
    $c=mysqli_connect("localhost","root","","project_php");
    mysqli_query($c,"insert into news values('','$ne','$da')");
    echo "Success";
  }
  ?>
    </div>
  </div>
</div>
<br><br><br><br><br><br>
<?php include "footer.php"; ?>


