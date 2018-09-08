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
$r_id=$_POST["id"];
$r_name=$_POST["name"];
$owner_ssn=$_POST["owner_ssn"];
$r_type=$_POST["r_type"];
$package=$_POST["package"];
$pwd1=$_POST["pwd"];
$email=$_POST["email"];
$pwd=sha1($pwd1);
$ap='\\';
if (strpos($r_name, "'") !== false) {
  
  $pos=strpos($r_name, "'");
  $r_name = substr($r_name, 0, $pos) . $ap . substr($r_name, $pos);
  
  }
 

$sql = "INSERT INTO restaurant (R_ID,R_NAME,R_TYPE,PACKAGE,OWNER_SSN,E_MAIL,PASSWORD) VALUES($r_id,'$r_name','$r_type','$package','$owner_ssn','$email','$pwd')";
   if ($conn->query($sql) === TRUE) {
 //echo "New Restaurant created successfully";
?>
<body>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>New Restaurant created successfully</strong>
</div>
<?php include 'rlogin.php';

} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
?>
<br>
<br><a href=rsignup.php>Try Again</a>
<?php
}

?>