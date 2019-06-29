<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tutor Joe's</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
		
		
		<img src="img/1.jpg" style="margin-left:90px;" class="sha">
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > Notes Upload</h3><br>
					<img src="img/home.jpg" class="imgs">
					<?php 
mysql_connect("localhost","root","");
mysql_select_db("school");
if(isset($_REQUEST["submit"]))
{
	 $file=$_FILES["file"]["name"];
	$tmp_name=$_FILES["file"]["tmp_name"];
	$path="upload/".$file;
	$file1=explode(".",$file);
	$ext=$file1[1];
	$allowed=array("jpg","png","gif","pdf","wmv","pdf","zip");
	if(in_array($ext,$allowed))
	{
 move_uploaded_file($tmp_name,$path);
 mysql_query("insert into upload(file)values('$file')");
	
	
}
}

?>


<form enctype="multipart/form-data" method="post">

File Upload:<input type="file" name="file">
<input type="submit" name="submit" value="upload">

</form><br><br><br>
		<?php
mysql_connect("localhost","root","");
mysql_select_db("file");
$query=mysql_query("select * from upload");
$rowcount=mysql_num_rows($query);
?>
<table border="1">
<tr>
<td>Download notes here</td>
</tr>
<?php
for($i=1;$i<=$rowcount;$i++)
{
	$row=mysql_fetch_array($query);

?>
<tr>
<td><a href="upload/<?php echo $row["file"] ?>"><?php echo $row["file"] ?></a></td>

</tr>

<?php	
}

?>
</table>			
					
					
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html>