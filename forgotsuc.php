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


$c_id=$_POST["id"];
$pwd1=$_POST["pwd"];

$pwd=sha1($pwd1);

$sql1 = "update customer set PASSWORD='$pwd' where C_ID='$c_id'";
  if ($conn->query($sql1) === TRUE) {
   // echo "Record updated successfully";
	?>
	<div class="alert1">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Password Updated successfully</strong>
</div>
	<?php
	header( "refresh:1;url=ulogin.php" );
} 
else {
    echo "Error updating record: " . $conn->error;
?>
<br>
<br><a href=update.php>Try Again</a>
<?php
}

?>