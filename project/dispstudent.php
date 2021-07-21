<?php
 session_start();
 $mo=$_SESSION['mysession'];
 ?>
<?php include "header-teacher.php"; ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
 <div class="col-sm-12 text-left"> 
     <h1 style="color:blue; font-weight: bold">
        Registered Students
      </h1>
      <hr>
      <br>
      <table class="table" style="padding:20px" width="100%" border="2">
  <tr>
    <th>Name</th>
    <th>Mobile</th>
    <th>Roll No.</th>
    <th>Class</th>
  </tr>
<?php
$c=mysqli_connect("localhost","root","","project_php");
$query = mysqli_query($c,"select * from student");
while($a=mysqli_fetch_array($query))
{
  echo "<tr>";
    echo "<td>";
      echo $a['name'];
    echo "</td>";
    echo "<td>"; 
      echo $a['mobile'];
    echo "</td>";
     echo "<td>";
      echo $a['roll_no'];
    echo "</td>";
    echo "<td>"; 
      echo $a['class'];
    echo "</td>";
  echo "</tr>";
}
?>
</table>
    </div>
  </div>
</div>
<br><br><br><br><br><br>
<?php include "footer.php"; ?>

