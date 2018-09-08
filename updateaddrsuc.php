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
session_start();


$a_id=$_SESSION["a_id"];
$flat_no=$_SESSION["flat_no"];
$floor=$_SESSION["floor"];
$apartment_no=$_SESSION["apartment_no"];
$street=$_SESSION["street"];
$locality=$_SESSION["locality"];
$pin=$_REQUEST["pin"];
$city=$_SESSION["city"];
$pwd1=$_SESSION["npwd"];
$c_id=$_SESSION["c_id"];

$pwd=sha1($pwd1);

$sql = "SELECT * from customer,craddress,c_address where craddress.C_ID=customer.C_ID and craddress.ADDRESS_ID=c_address.ADDRESS_ID and  customer.C_ID='$c_id'  and customer.PASSWORD='$pwd'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
$sql1 = "update c_address set FLAT_NO='$flat_no',FLOOR='$floor',apartment_no='$apartment_no', STREET='$street',LOCALITY='$locality',PINCODE='$pin',CITY='$city' where ADDRESS_ID='$a_id'";
  if ($conn->query($sql1) === TRUE) {
   // echo "Record updated successfully";
	?>
	<div class="alert1">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Address Updated successfully</strong>
</div>
	<?php
	header( "refresh:1;url=uhome.php" );
} else {
    echo "Error updating record: " . $conn->error;
?>
<br>
<br><a href=update.php>Try Again</a>
<?php
}
}
else
{
	//echo "Password not matched";
	?>
	<div class="alert2">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Password Not matched</strong>
</div>
<br><a href=update.php>Try Again</a>
	<?php
}
?>