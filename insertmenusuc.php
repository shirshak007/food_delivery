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
<nav>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$r_id=$_SESSION["r_id"];
$f_id=$_POST["f_id"];
$f_desc=$_POST["f_desc"];
$f_type=$_POST["type"];
$minq=$_POST["minq"];
$maxq=$_POST["maxq"];
$avail=$_POST["avail"];
$price=$_POST["price"];


$sql = "INSERT INTO menu (F_ID,F_DESC,FOOD_TYPE,R_ID,MIN_Q,MAX_Q,AVAILABILITY,PRICE) VALUES($f_id,'$f_desc','$f_type','$r_id','$minq','$maxq','$avail','$price')";
   if ($conn->query($sql) === TRUE) 
   {
	if (isset($_POST["submit"]))
	{
	$filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file"]["size"];
	$allowed_file_types = array('.jpg','.jpeg');	
$maxs=150000;
	if (in_array($file_ext,$allowed_file_types) && ($filesize < $maxs))
	{	
		// Rename file
		$newfilename = "food".$f_id.$file_ext;
		if (file_exists("img/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file"]["tmp_name"], "img/" . $newfilename);
			echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	elseif ($filesize > $maxs)
	{	
		// file size error
		echo "The file you are trying to upload is too large.";
	}
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file"]["tmp_name"]);
	}
}

?>
<body>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>New Item Inserted successfully</strong><br>
  <strong><a href='insertmenu.php'>Add More...</strong>
  
</div>
<?php 
//header("Refresh: 1; URL=rhome.php");

} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
?>
<br>
<br><a href=insertmenu.php>Try Again</a>
<?php
}

?>