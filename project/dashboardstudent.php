
<?php
 session_start();
 $mo=$_SESSION['mysession'];
 ?>
 <?php include "header-student.php"; ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
 <div class="col-sm-12 text-left"> 
      <h1 style="color:blue">
        <b>Welcome to Student Dashboard</b>
      </h1>
      <img src="https://img.freepik.com/free-vector/student-wearing-uniform-character-collection_188398-149.jpg?size=626&ext=jpg">
    </div>
  </div>
</div>
<a href="logoutproj.php">Logout</a>
<br><br><br><br>
<?php include "footer.php"; ?>
 