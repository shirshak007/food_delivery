<html>
<title>HUNGRY DIGGER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="1.css">
<link rel="stylesheet" href="2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<style>
.alert {
    padding: 20px;
    background-color: GREEN;
    color: white;
	float: none !important;
	width: auto !important;
}
.alert1 {
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
footer
{
padding: 1em;
color:white;
background-color:black;
clear:left;
text-align:center;
}
</style>
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error);

if($_SESSION)
{
	$r_id=$_SESSION["r_id"];
	$email=$_SESSION["remail"];
	$pwd1=$_SESSION["rpwd"];
	$pwd=sha1($pwd1);
}
else{
$r_id=$_POST["id"];
$email=$_POST["id"];
$pwd1=$_POST["pwd"];
$pwd=sha1($pwd1);
}
$sql = "SELECT * FROM restaurant where R_ID='$r_id' and PASSWORD='$pwd' or E_MAIL='$email' and PASSWORD='$pwd'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
    $_SESSION["r_name"]= $row["R_NAME"];
	$_SESSION["r_id"]=$row["R_ID"];
	$_SESSION["remail"]=$row["E_MAIL"];
	$_SESSION["rpwd"]=$row["PASSWORD"];
    }
?>
<body bgcolor=black>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Login successful</strong>
</div>
<?php
echo "Welcome ".$_SESSION["r_name"];
?>
<center>
<img src="load.gif">
<?php 
header( "refresh:1;url=rhome.php" );
}
else
{
	?>
	<div class="alert1">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Login Unsuccessful</strong>
</div>

<?php
include "ulogin.php";
}
$conn->close();
?>


