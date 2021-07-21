<?php
 session_start();
 $mo=$_SESSION['mysession'];
 ?>
<?php include "header-student.php"; ?>
<div class="container-fluid text-center">    
  <div class="row content">
 <div class="col-sm-12 text-left"> 
      <h1 style="color:blue; font-weight: bold">
        Change Password
      </h1>
      <?php
      if(isset($_POST['old']))
      {
      		extract($_POST);
          $password=md5($password);
      		$c=mysqli_connect("localhost","root","","project_php");
			$query = mysqli_query($c,"select * from student where password='$password'");
			if(mysqli_num_rows($query)==0)
			{
				echo "You have entered wrong password. Try again!!";
			}
			else
			{
				?>
				 <form action="" method="post">
			      	New Password :
			      	<input type="password" name="password" class="form-control">
			      	<br>
			      	<input type="submit" name="new">
			      </form>

				<?php
			}
      }
      ?>
      <?php
if(isset($_POST['new']))
{
      		extract($_POST);
            $password=md5($password);
      		$c=mysqli_connect("localhost","root","","project_php");
      		mysqli_query($c,"UPDATE student set password='$password' WHERE mobile='$mo'");
      		echo "Changed";
}
?>
    </div>
  </div>
</div>
<br><br><br><br><br><br>
<?php include "footer.php"; ?>



