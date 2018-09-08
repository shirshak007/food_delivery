<html>
<title>HUNGRY DIGGER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="1.css">
<link rel="stylesheet" href="2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}

div.container{
width:100%;
border:1px solid gray;
}

header, footer
{
padding: 1em;
color:white;
background-color:black;
clear:left;
text-align:center;
}
nav{
float:middle;
max-width:300px;
margin:0;
padding:1em;
}


input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4Db0E6;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45b67f;
}




input[type=submit]:hover {
    background-color: #45b67f;
	

}
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

</style>
<script>
function func1()
{
if(document.f1.upwd.value=="")
	{
	   alert("Password field should not be empty");
	   document.f1.upwd.focus();
	   return false  
	}
	if(document.f1.pwd.value!=document.f1.upwd.value)
	{
	   alert("Not matched");
	   document.f1.pwd.value=""
	   document.f1.pwd.focus();
	   return false
	}
}
</script>
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error);


$c_id=$_POST["id"];
$email=$_POST["id"];
$phno=$_POST["phno"];

$sql = "SELECT * FROM customer where C_ID='$c_id' and PH_NO='$phno' or LOGIN_TYPE='$email' and PH_NO='$phno'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
		?>
		
		<nav>
<form action=forgotsuc.php method=post name=f1 onsubmit="return func1()">
Enter new Password<font color=red>(Required*)</font>:&nbsp&nbsp<input type=password name=upwd>
<input type=hidden name=id value=<?php echo $row["C_ID"]?>>
Confirm Password <font color=red>(Required*): </font><input type=password name=pwd>
<br><br>
<input type=submit value="RESET">
</form>
		<?php
		
	}
?>
<body bgcolor=white>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Credential Matched</strong>
</div>


<?php


}
else
{
	?>
	<div class="alert1">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Credential Not Matched</strong>
</div>

<?php
}
$conn->close();
?>


