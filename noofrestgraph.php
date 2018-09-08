<?php
header('Content-Type:application/json');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
    die();

$sql = sprintf("SELECT location.AREA as area,location.PINCODE as pin,COUNT(rrloc.R_ID) as noofrest from location,restaurant,rrloc,r_loc WHERE location.PINCODE=r_loc.PINCODE AND rrloc.R_LOC_ID=r_loc.R_LOC_ID AND rrloc.R_ID=restaurant.R_ID GROUP by r_loc.PINCODE order by noofrest desc");
	
$result = $conn->query($sql);
$data=array();
foreach($result as $row)
{
	$data[]=$row;
}
$result->close();
$conn->close();
print json_encode($data);
?>
