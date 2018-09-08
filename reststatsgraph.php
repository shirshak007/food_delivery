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

$sql = sprintf("SELECT restaurant.R_NAME as rname,restaurant.R_ID as rid,COUNT(restaurant_order.ORDER_ID) as nooforders from restaurant,restaurant_order WHERE restaurant.R_ID=restaurant_order.R_ID GROUP by restaurant_order.R_ID order by nooforders desc");
	
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
