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

$sql = sprintf("SELECT location.AREA as area, location.PINCODE as pin,COUNT(delivery_boy.D_B_ID) as noofdb FROM delivery_boy,location WHERE location.PINCODE=delivery_boy.AREA GROUP by delivery_boy.AREA ORDER BY noofdb DESC;");
	
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
