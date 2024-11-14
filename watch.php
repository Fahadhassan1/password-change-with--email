<?php
$con = mysqli_connect("localhost", "root", "","talha");
?>
<html>
<head>
	<title></title>
</head>
<body>

<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
$ret="SELECT * FROM video where id='$id'";
$ok=mysqli_query($con, $ret);
while($row=mysqli_fetch_array($ok))
{
  $id=$row['id'];
  $name=$row['name'];
echo "you are watchng".$name;
?>
<video width="300" height="200" controls autoplay>
<source src="video/<?php echo $row['name'];?>" type="video/mp4">

<?php
}
}
else{
	echo "error!";
}
?>
</body>
</html>