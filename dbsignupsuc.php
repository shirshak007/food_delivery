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
$c_id=$_POST["dbid"];
$c_name=$_POST["name"];
$c_number=$_POST["phno"];
$ssn=$_POST["ssn"];
$pwd1=$_POST["pwd"];
$email=$_POST["email"];
$pwd=sha1($pwd1);

$sql = "INSERT INTO delivery_boy (D_B_ID,D_B_SSN,D_B_NAME,PH_NO,E_MAIL,PASSWORD) VALUES($c_id,'$ssn','$c_name','$c_number','$email','$pwd')";
   if ($conn->query($sql) === TRUE) {
 //echo "New user created successfully";
?>
<body>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Request granted created successfully</strong>
</div>
<?php include 'dblogin.php';

} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
?>
<br>
<br><a href=usignup.php>Try Again</a>
<?php
}

?>