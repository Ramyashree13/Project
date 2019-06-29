<html>
	<body>
		<?php
		$conn = mysqli_connect("localhost","root","","class");
if(!$conn){
	die(mysqli_error($conn));
}
		$search = $_POST["search"];

	$query = "SELECT * FROM `employee1` WHERE `name` = '$search'";
	

		$result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result) == 0)
			echo "Not found<br />";
		else
			echo "Found<br />";

		$row = mysqli_fetch_array($result);
		echo "Name : ".$row["name"];
		echo "<br />Address 1 : ".$row["addr1"];
		echo "<br />Address 2 : ".$row["addr2"];
		echo "<br />Email ID : ".$row["email"];
		?>
	</body>
</html>
