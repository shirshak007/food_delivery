<head>
<title>HUNGRY DIGGER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/1.css">
<link rel="stylesheet" href="css/2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<style>

body {
    font-family: tahoma, helvetica, arial, sans-serif;
    font-size: 12px;
    
    background: #000;
    color: #ddd4d4;
    padding-top: 12px;
    line-height: 2;
    background-image: url('img/backg.jpg');
	background-image-opacity:.5
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;
    opacity: 1;
    filter:alpha(opacity=80);
}
header
{
padding: 1em;
color:white;
background-color:#2a1506;
clear:left;
text-align:center;
}
nav{
float:middle;
max-width:50%;
padding:1em;
text-align:left;
}


input[type=text], select {
    width: 100%;
    padding: 4px 10px;
    margin: 1px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 4px 20px;
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


</style>

<script language="javascript">
function func1()
{
var x = document.f1.email.value;
    	 var atpos = x.indexOf("@");
    	var dotpos = x.lastIndexOf(".");
	if(document.f1.name.value=="")
	{
	   alert("Name field should not be empty");
	   document.f1.name.focus();
	   return false
	}
	if(!isNaN(document.f1.name.value))
	{
	  alert("Name field should not be numeric");
	document.f1.name.value=""
	   document.f1.name.focus();
	   return false
	}
		
		if(document.f1.phno.value=="")
	{
	   alert("Mobile no field should not be empty");
	   document.f1.phno.focus();
	   return false
	}
	if(isNaN(document.f1.phno.value))
	{
	  alert("mobile no field should be numeric");
	document.f1.phno.value=""
	   document.f1.phno.focus();
	   return false
	}
	if(document.f1.phno.value.length!=10)
	{
	  alert("mobile no field should be 10 digit");
	   document.f1.phno.focus();
	   return false
	}
	
    if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
	{
		
        alert("Not a valid e-mail address");
        document.f1.email.focus();
		return false
	}
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
<body>
<header><h1>User Registration</h1></header>
<center>
<nav>

<form action="usignupsuc.php" method=post name=f1 onsubmit="return func1()">

	Customer ID<font color=red>*</font>(Auto Generated)
	<input type=text name=id readonly value="<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error);


$sql = "SELECT * FROM customer ORDER BY C_ID DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id1= $row["C_ID"];
				$id1++;
    }
} else {
    echo "0 results";
}
$conn->close();

echo $id1;

?>">



	Name<font color=red>*</font>
	<input type=text name=name>

	Phone No<font color=red>*</font>
	<input type=text name=phno>


	Email<font color=red>*</font>

	<input type=text name=email>
	<br>
	<br>
	<strong>
	Customer Type
	<input type="radio" name="membership" value="STANDARD" checked> STANDARD
	<input type="radio" name="membership" value="PREMIUM"> PREMIUM<br>
	Password<font color=red>*</font>
	<input type=password name=upwd>
	
	Confirm Password<font color=red>*</font>
	<input type=password name=pwd>
	<font face=arial color=red><strong>* Fields are mandatory.</strong></font>
<input type=submit value="Sign Up">
</form>
</nav>
</center>

<footer class="w3-container w3-padding-32 w3-center" >

  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right" ></i>To the top</a>
  <div class="w3-xlarge w3-section">

	<a href="https://www.facebook.com/shirshak.das.71" 		    class="fa fa-facebook w3-hover-opacity"></a>
    <a href="https://www.instagram.com/shirshak007/"		    class="fa fa-instagram w3-hover-opacity"></a>
    <a href="https://twitter.com/shirshak008" 					class="fa fa-twitter w3-hover-opacity"></a>
    <a href="https://plus.google.com/102538407467302420903" 	class="fa fa-google w3-hover-opacity"></a>
	</div>
  <p>Powered by <strong>Shirshak & Partha & Kushal & Ayan & Basu</strong></p>
  Copyright &copy;1994- 2018 Hungry  Digger Service, Inc. All rights reserved
  <br>PS: This is not an official website. This is made for project purpose.
</footer>

