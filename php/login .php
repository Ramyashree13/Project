<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="student1"; 
$tbl_name="table1"; 

$con = mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form 
$un= $_POST["uname"];
$pwd=$_POST["psw"]; 
// To protect MySQL injection (more detail about MySQL injection)
$un = stripslashes($un);
$pwd = stripslashes($pwd);
$un = mysqli_real_escape_string($con,$un);
$pwd = mysqli_real_escape_string($con, $pwd);
$sql="SELECT * FROM $tbl_name WHERE username='$un' and password='$pwd' ";
$result=mysqli_query($con, $sql);
$count=mysqli_num_rows($result);
if($count==1){
header("location:student.html");
}
else {
echo "<h1>Invalid username or password</h1>";
//header("location:login.html");
}
?>