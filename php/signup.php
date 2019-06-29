<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="project"; 
$tbl_name="student"; 
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");

$fname=$_POST["first_name"];
$lname=$_POST["last_name"];
$mail =$_POST["email"];
$uname=$_POST["User_name"];
$pass=$_POST["password"];
//$rpass=$_POST["psw_repeat"];


// To protect MySQL injection (more detail about MySQL injection)
$fname=stripslashes($fname);
$lname=stripslashes($lname);
$mail =stripslashes($mail);
$uname=stripslashes($uname);
$pass=stripslashes($pass);
//$rpass=stripslashes($psw_repeat);


$fname = mysqli_real_escape_string($conn,$fname);
$lname= mysqli_real_escape_string($conn,$lname);
$mail= mysqli_real_escape_string($conn,$mail);
$uname = mysqli_real_escape_string($conn,$uname);
$pass = mysqli_real_escape_string($conn,$pass);
//$rpass = mysqli_real_escape_string($conn,$psw_repeat);


$sql="INSERT INTO student(first_name,last_name,email,username,password) VALUES ('$fname', '$lname' ,'$mail','$uname','$pass')";
$result=mysqli_query($conn,$sql);
?>      
<?php echo "Saved Successfully....";?>     
