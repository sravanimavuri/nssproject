<?php
$con = mysqli_connect('localhost','root','') or die ("<script language='javascript'>alert('Unable to connect to database')</script>");
mysqli_select_db($con, "activities");

if (isset($_GET['Sno'])){
    $partid = $_GET['Sno'];
    $sql = 'SELECT * 
        FROM activities';

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    //$partnumber = $partid;
    //$nsn = $row["NSN"];
    //$description = $row["Description"];
    //$quantity = $row["Quantity"];
    //$condition = $row["Conditio"];
	printf("sno is %s \n",$partid);
}
?>