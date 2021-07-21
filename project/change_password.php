<?php
 session_start();
 $mo=$_SESSION['mysession'];
 ?>
 <?php include "header-student.php"; ?>
<div class="container-fluid text-center">    
  <div class="row content">
 <div class="col-sm-12 text-left"> 
      <h1 style="color:blue">
        <b>Change Password</b>
      </h1>
      <form action="password.php" method="post">
      	Old Password :
      	<input type="password" name="password" class="form-control">
      	<br>
      	<input type="submit" name="old">
      </form>
    </div>
  </div>
</div>
<br><br><br><br><br><br>
<?php include "footer.php"; ?>