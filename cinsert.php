
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
$Sno=$_POST['Sno'];
$Date=$_POST['Date'];
$Event=$_POST['Event'];
$Venue=$_POST['Venue'];
$Organisers=$_POST['Organisers'];

$sql = "INSERT INTO activities (Sno,Date,Event,Venue,Organisers)
 VALUES('$Sno','$Date','$Event','$Venue','$Organisers');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>