<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('dashboard.html'?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tutor Joe's</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
			
			<div id="section">
				
				<div class="content">
						<h3 > Notes Upload</h3><br>
					<form action="uploadfile.php" method="post" enctype="multipart/form-data">
    Select notes to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit">
</form>
					
					
					
				</div>
				
			</div>
	</body>
</html>