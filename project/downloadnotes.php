<?php
session_start();
$mo=$_SESSION['mysession'];
?>
<?php include "header-student.php"; ?>

<div class="container-fluid text-center">    
<div class="row content">
<div class="col-sm-12 text-left"> 
   <h1 style="color:blue; font-weight: bold">
      Notes
    </h1>
    <hr>
    <br>
    <table class="table" style="padding:20px" width="100%" border="2">

 <tr>
  <th>Class</th>
  <th>Date</th>
  <th>Notes</th>
</tr>
<?php
$c=mysqli_connect("localhost","root","","project_php");
$query = mysqli_query($c,"select * from note");
while($a=mysqli_fetch_array($query))
{
echo "<tr>";
  echo "<td>";
    echo $a['class'];
  echo "</td>";
  echo "<td>"; 
    echo $a['date'];
  echo "</td>";
  echo "<td>";
    ?>

    <a href="<?php echo $a['file']; ?>" target="_blank">Click Here</a>

    <?php
  echo "</td>";
echo "</tr>";
}
?>
</table>
  </div>
</div>
</div><br>
<br><br><br><br><br>
<?php include "footer.php"; ?>


