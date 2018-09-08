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

$sql = sprintf("select menu.F_ID as fid,menu.F_DESC as fdesc, menu.FOOD_TYPE as ftype, menu.PRICE as price  , SUM(menu_order.QUANTITY) as qty,SUM(menu_order.QUANTITY)*menu.PRICE as income from menu,menu_order where menu_order.FOOD_ID=menu.F_ID group by menu_order.FOOD_ID order by income desc");
	
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
