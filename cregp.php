<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$firstname = $_POST['cfirstname'];
$lastname = $_POST['clastname'];
$department=$_POST['cdepartment'];
$registerno=$_POST['cregisterno'];
$phoneno = $_POST['cphoneno'];
$bloodgroup = $_POST['cbloodgroup'];
$address = $_POST['caddress'];
$email = $_POST['cemail'];
$username=$_POST['cusername'];
$password=$_POST['cpassword'];
$sql = "INSERT INTO cregistration (cfirstname,clastname,cdepartment,cregisterno,cphoneno,cbloodgroup,caddress,cemail,cusername,cpassword)
 VALUES('$firstname','$lastname','$department','$registerno','$phoneno','$bloodgroup','$address','$email','$username','$password');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>