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

$sql = sprintf("SELECT delivery_boy.D_B_NAME as dbname, delivery_boy.D_B_ID as dbid,COUNT(food_delivery.ORDER_ID) as nooforders from delivery_boy,food_delivery WHERE delivery_boy.D_B_ID=food_delivery.D_B_ID group by food_delivery.D_B_ID order by nooforders desc;
");
	
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
