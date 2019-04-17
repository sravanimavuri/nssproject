<?php
$servername = "localhost";
$usernam = "root";
$passwo = "";
$dbname = "nss";

// Create connection
$conn = new mysqli($servername, $usernam, $passwo, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$user=$_POST['username'];
$pass=$_POST['password'];			
$sql="SELECT * FROM registration WHERE username='$user' and password='$pass'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
    echo "Login Successful! $count ";
	header("Location: avtiv.html");
} else {
    echo "Login Unsuccessful! $count";
	
}

ob_end_flush();
?>