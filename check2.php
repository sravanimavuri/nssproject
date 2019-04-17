<?php
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,"activities");
if(!$conn){
	echo'unsuccessful connection';
}
$sql="SELECT * FROM activities";
$query=mysqli_query($sql);
while ($users=mysql_fetch_assoc($query)){
// Associative array
//$row=mysqli_fetch_assoc($result);
//if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    //while ($row=mysqli_fetch_assoc($result)) {
 //printf"<tr>";
 //print"<th>Sno:</th><td>".$info['Sno']."</td>";
 //print"<th>Date:</th><td>".$info['Date']."</td>";
 //print"<th>Event:</th><td>".$info['Event']."</td>";
 //print"<th>Venue:</th><td>".$info['Venue']."</td>";
 //print"<th>Organisers:</th><td>".$info['Organisers']."</td>";
 //printf("%s %s\n",$row["Sno"],$row["Event"]);
 echo "<tr>";
    echo "<td>".$users['Sno']."</td>";
    echo "<td>".$users['Event']."</td>";
    echo "</tr>";
}
//$result->free();

//print"</table>";
mysqli_close($conn);
?>