<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
$c_name=$_POST["name"];
$c_number=$_POST["phno"];
$membership=$_POST["membership"];
$pwd1=$_POST["pwd"];
$email=$_POST["email"];
$pwd=sha1($pwd1);

$sql = "INSERT INTO customer (C_ID,C_NAME,PH_NO,LOGIN_TYPE,MEMBERSHIP,PASSWORD) VALUES($c_id,'$c_name','$c_number','$email','$membership','$pwd')";
   if ($conn->query($sql) === TRUE) {
 //echo "New user created successfully";
?>
<body>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>New user created successfully</strong>
</div>
<?php include 'ulogin.php';

} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
?>
<br>
<br><a href=usignup.php>Try Again</a>
<?php
}

?>