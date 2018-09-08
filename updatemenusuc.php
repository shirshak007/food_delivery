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
$r_id=$_SESSION["r_id"];
$f_id=$_POST["f_id"];
$f_desc=$_POST["f_desc"];
$f_type=$_POST["f_type"];
$min_q=$_POST["min_q"];
$max_q=$_POST["max_q"];
$price=$_POST["price"];



$sql1 = "update menu set F_DESC='$f_desc',FOOD_TYPE='$f_type',MIN_Q='$min_q',MAX_Q='$max_q',PRICE='$price' where F_ID='$f_id'";
  if ($conn->query($sql1) === TRUE) {
   // echo "Record updated successfully";
	?>
	<div class="alert1">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Updated successfully</strong>
</div>
	<?php
  
	header( "refresh:1;url=rhome.php" );
} else {
    echo "Error updating record: " . $conn->error;
?>
<br>
<br><a href=updatemenu.php>Try Again</a>
<?php
}
