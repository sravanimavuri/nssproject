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
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$department=$_POST['department'];
$registerno=$_POST['registerno'];
$phoneno = $_POST['phoneno'];
$bloodgroup = $_POST['bloodgroup'];
$address = $_POST['address'];
$email = $_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$sql = "INSERT INTO registration (firstname, lastname,department,registerno,phoneno,bloodgroup,address,email,username,password)
 VALUES('$firstname','$lastname','$department','$registerno','$phoneno','$bloodgroup','$address','$email','$username','$password');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>