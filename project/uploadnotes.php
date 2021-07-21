<?php
 session_start();
 $mo=$_SESSION['mysession'];
 ?>
<?php include "header-teacher.php"; ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
 <div class="col-sm-12 text-left"> 
      <h1 style="color:blue; font-weight: bold">
        Uploads Notes
      </h1>
      <hr>
      <br>
      <form action="" method="post" enctype="multipart/form-data">
  Class : <input type="text" name="cl" class="form-control">
  <br>
  Date : <input type="date" name="da" class="form-control">
  <br>
  Topic : <input type="text" name="to" class="form-control">
  <br>
  File : <input type="file" name="f1" class="form-control">
  <br>
  <input type="submit" name="sb" class="btn btn-primary">
  <br>
</form>
<?php
if($_POST)
{   
  $tmp_name = $_FILES['f1']['tmp_name'];
  $name = $_FILES['f1']['name'];

  $folder = "uploads/";

  $merge = $folder.$name;

  move_uploaded_file($tmp_name, $merge);
    
    extract($_POST);
    $c=mysqli_connect("localhost","root","","project_php");
    mysqli_query($c,"insert into note   values('','$cl','$da','$to','$merge')");
  echo "Done"; 
}
?>
    </div>
  </div>
</div>
<br><br><br><br><br><br>
<?php include "footer.php"; ?>
