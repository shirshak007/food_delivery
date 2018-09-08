<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.alert1 {
    padding: 20px;
    background-color: GREEN;
    color: white;
	float: none !important;
	width: auto !important;
}
.alert2 {
    padding: 20px;
    background-color: RED;
    color: white;
	float: none !important;
	width: auto !important;
}
.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$o_id=$_POST["o_id"];
$f_id=$_POST["f_id"];
$quantity=$_POST["quantity"];
$avail=$_POST["avail"]-$quantity;
$sql1 = "update menu_order set STATUS='Picked Up' where ORDER_ID='$o_id'  and FOOD_ID='$f_id'";
$sql2 = "update menu set AVAILABILITY='$avail' where F_ID='$f_id'";
  if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
   // echo "Record updated successfully";
	?>
	<div class="alert1">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Picked Up by Dboy successfully</strong>
</div>
	<?php
  
	header( "refresh:1;url=restpending.php" );
} else 
    echo "Error updating record: " . $conn->error;
?>
<br>