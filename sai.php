<html>
<head>
</head>
<h1 align="center"> NSS ACTIVITIES</h1>
<style>
body {
background-image: url("https://cache.desktopnexus.com/thumbseg/656/656536-bigthumbnail.jpg");
height: 90%;
  background-position: center;
  background-repeat: no-repeat;
  background-size:cover;
}
</style>

<?php
$con=mysqli_connect("localhost","root","","nss");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT Sno,Date,Event,Venue,Organisers FROM activities ORDER BY Sno;";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  echo("<center><br><br><br><br><table border='5'>");
  echo("<tr>
			<h1><th>Serial Number</th>
			<th>Date</th>
			<th>Event</th>
			<th>Venue</th>
			<th>Organiser</th></h1>
		</tr>");
  while ($row=mysqli_fetch_row($result))
    {
		echo("<tr>
				<td>".$row[0]."</td>
				<td>".$row[1]."</td>
				<td>".$row[2]."</td>
				<td>".$row[3]."</td>
				<td>".$row[4]."</td>
			  </tr>");
    }
  // Free result set
  echo("</table></center>");
  mysqli_free_result($result);
}

mysqli_close($con);
?>
</html>