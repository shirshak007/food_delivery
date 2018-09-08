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
$r_loc_id=$_SESSION["a_id"];
$ph_no=$_SESSION["ph_no"];
$floor=$_SESSION["floor"];
$build=$_SESSION["build"];
$street=$_SESSION["street"];
$locality=$_SESSION["locality"];
$pin=$_REQUEST["pin"];
$city=$_SESSION["city"];

$r_id=$_SESSION["r_id"];


$sql = "INSERT INTO r_loc (R_LOC_ID,PH_NO,BUILDING,FLOOR_NO,STREET_NO,LOCALITY,PINCODE,CITY) VALUES('$r_loc_id','$ph_no','$build','$floor','$street','$locality','$pin','$city')";
$sql1 = "INSERT INTO rrloc (R_ID,R_LOC_ID) VALUES('$r_id','$r_loc_id')";;   
if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Restaurant Address inserted successfully</strong>
</div>
<body bgcolor=black>
<center>
<img src="img/load.gif">
<?php

header("Refresh: 1; URL=rhome.php");
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
?>
<br>
<br><a href=addraddress.php>Try Again</a>
<?php
}

?>