   <?php
 $con = mysqli_connect("localhost", "root", "","talha");
    if(isset($_POST['upd']))
{
       $name = $_FILES['file']['name'];
       $temp=$_FILES['file']['tmp_name'];
      move_uploaded_file($temp, "video/".$name);
	$query = "INSERT INTO video(name) VALUES('$name')";
    if (mysqli_query($con,$query))
    {
    	echo "Upload successfully.";
    	echo "<br>".$name."has been upload";
    }
    
 else{
          echo "Invalid file .";
       }
   }  
 ?>
<html>
  <head>
  </head>
  <body>
    <form method="post" action="videoupload.php" enctype="multipart/form-data">

<table border="1" style="padding:10px">

<tr>

<Td>Upload  Video</td></tr>

<Tr><td><input type="file" name="file"/></td></tr>

<tr><td>

<input type="submit" value="Uplaod Video" name="upd"/>



</td></tr>

</table>

</form>
<a href="video.php"><input type="submit" value="Display Video" name="disp"/></a>
  </body>
</html>