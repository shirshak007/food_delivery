<head>
<style>

.alert {
    padding: 20px;
    background-color: GREEN;
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
<?php
session_start();
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
$a_id=$_SESSION["a_id"];
$flat_no=$_SESSION["flat_no"];
$floor=$_SESSION["floor"];
$apartment_no=$_SESSION["apartment_no"];
$street=$_SESSION["street"];
$locality=$_SESSION["locality"];
$pin=$_REQUEST["pin"];
$city=$_SESSION["city"];

$c_id=$_SESSION["c_id"];


$sql = "INSERT INTO c_address (ADDRESS_ID,FLAT_NO,FLOOR,APARTMENT_NO,STREET,LOCALITY,PINCODE,CITY) VALUES('$a_id','$flat_no','$floor','$apartment_no','$street','$locality','$pin','$city')";
$sql1 = "INSERT INTO craddress (C_ID,ADDRESS_ID) VALUES('$c_id','$a_id');";   
if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Address inserted successfully</strong>
</div>
<body bgcolor=black>
<center>
<img src="img/load.gif">
<?php

header("Refresh: 1; URL=uhome.php");
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
?>
<br>
<br><a href=insertaddress.php>Try Again</a>
<?php
}

?>