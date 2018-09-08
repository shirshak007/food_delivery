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
$pin=$_POST["pin"];
$dbid=$_POST["dbid"];
$sal=$_POST["salary"];

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

$sql = "update delivery_boy set SALARY='$sal' ,AREA='$pin' where D_B_ID=$dbid";   
$sql1 = "update d_b_service set PINCODE='$pin' where D_B_ID='$dbid'";   
if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Updated successfully</strong>
</div>
<body bgcolor=black>
<center>
<img src="img/load.gif">
<?php

header("Refresh: 1; URL=adminhome.php");
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
?>
<br>
<br><a href=roffer.php>Try Again</a>
<?php
}

?>