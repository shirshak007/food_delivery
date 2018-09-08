<head>
<link rel="icon" href="img/logo.png" type="image" sizes="16x16">
<title>Add Your Address</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/1.css">
<link rel="stylesheet" href="css/2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}

div.container{
width:100%;
margin:auto;
border:1px solid gray;
}

header, footer
{
padding: 1em;
color:white;
background-color:#2a1506;
clear:left;
text-align:center;
}
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

nav{
float:middle;
max-width:500px;
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


input[type=submit]:hover {
    background-color: #45b67f;
}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

#myInput {
    border-box: box-sizing;
    background-image: url('searchicon.png');
    background-position: 14px 12px;
    background-repeat: no-repeat;
    font-size: 16px;
    padding: 14px 20px 12px 45px;
    border: none;
    border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f6f6f6;
    min-width: 230px;
    overflow: auto;
    border: 1px solid #ddd;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

</style>

<script language="javascript" type="text/javascript">
function func1()
{

	if(document.f1.flat_no.value=="")
	{
	   alert("Flat field should not be empty");
	   document.f1.flat_no.focus();
	   return false
	}
	
	if(document.f1.floor.value=="")
	{
	   alert("Floor field should not be empty");
	   document.f1.floor.focus();
	   return false
	}
	
	if(document.f1.apartment_no.value=="")
	{
	   alert("Apartment No field should not be empty");
	   document.f1.apartment_no.focus();
	   return false
	}
	
	if(document.f1.street.value=="")
	{
	   alert("Street field should not be empty");
	   document.f1.street.focus();
	   return false
	}
	
	if(document.f1.locality.value=="")
	{
	   alert("Locality field should not be empty");
	   document.f1.locality.focus();
	   return false
	}
		if(document.f1.city.value=="")
	{
	   alert("City field should not be empty");
	   document.f1.city.focus();
	   return false
	}
	
		

}


</script>

</head>
<body>

<header><h1>Insert Address</h1></header>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn w3-green"  href="uhome.php">&#10094; Previous</a>
<a class="w3-right w3-btn w3-cyan" href="logout.php"><i class="fa fa-power-off w3-margin-right"> Logout</i></a>
</div>
<center>

<nav>

<form action="insertaddress2.php" method=post name=f1 onsubmit="return func1()">

	Address ID<font color=red>*</font>(Auto Generated)
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


$sql = "SELECT * FROM c_address ORDER BY ADDRESS_ID DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id1= $row["ADDRESS_ID"];
		$id1++;
    }
} else {
    echo "0 results";
}
$conn->close();
echo $id1;
?>">

	Flat No:<font color=red>*</font>
	<input type=text name=flat_no>

	Floor:<font color=red>*</font>
	<input type=text name=floor>
	
	Apartment No<font color=red>*</font>
	<input type=text name=apartment_no>

	Street<font color=red>*</font>
	<input type=text name=street>

	Locality<font color=red>*</font>
	<input type=text name=locality>

	City<font color=red>*</font>
	<input type=text name=city>

<input type=submit value="Add Address">
</form>
</nav>
<footer class="w3-container w3-padding-32 w3-center">
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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