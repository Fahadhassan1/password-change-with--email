<?php
$con = mysqli_connect("localhost", "root", "","talha");
$ret="SELECT * FROM video ";
$ok=mysqli_query($con, $ret);

while($row=mysqli_fetch_array($ok))
{

  
  $id=$row['id'];
  $name=$row['name'];
echo "<a href='watch.php?id=$id'>$name</a><br>";
  }
?>


