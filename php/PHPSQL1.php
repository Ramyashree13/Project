<html>
	<body>
		<?php
		$conn = mysqli_connect("localhost","root","","class");
if(!$conn){
	die(mysqli_error($conn));
}
		$name = $_POST["first_name"];
		$addr1 = $_POST["last_name"];
		$addr2 = $_POST["email"];
		$username = $_POST["User_name"];
		$password=$_POST["password"];
$query = "INSERT INTO employee1 (name, addr1, addr2, email,password) VALUES ('$name','$addr1','$addr2','$username','$password')";
if(mysqli_query($conn,$query))
{
	header("location:dashboard.html");
	echo "WELOCOME".$name;
}
mysqli_query($conn,$query) or die(mysqli_error($conn));
		?>


	</body>
</html>


<form action = "PHPdisp1.php" method = "POST">
<label>Enter name to search for : <input type = "text" name = "search" />
</label>
<br />
<input type = "submit" />
</form>
	</body>
</html>
