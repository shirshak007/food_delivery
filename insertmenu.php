<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/logo.png" type="image" sizes="16x16">
<title>HD::Menu</title>

<link rel="stylesheet" href="css/1.css">
<link rel="stylesheet" href="css/2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<style>

div.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-ansition-duration: 0.4s; /* Safari */
    ansition-duration: 0.4s;
}

.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);

}
header, footer
{
padding: 1em;
color:white;
background-color:#2a1506;
clear:left;
text-align:center;
}



nav ul
{
list-style-type:none;
padding:0;
}

nav ul a{
text-decoration:none;
}
article{
margin-left:170px;
border-left:1px solid gray;
padding:1em;
overflow:hidden;
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


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #abc;
}
body {
    font-family: tahoma, helvetica, arial, sans-serif;
    font-size: 12px;
    
    background: #000;
    color: #ddd4d4;
    padding-top: 12px;
    line-height: 2;
    background-image: url('img/backg.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;
    opacity: 5;
    filter:alpha(opacity=80);
}

nav{
float:middle;
max-width:50%;
background-color: green;
padding:1em;
text-align:left;
}
</style>
<script language="javascript" type="text/javascript">
function f()
{
if(document.f1.f_desc.value=="")
	{
	   alert("Description field should not be empty");
	   document.f1.f_desc.focus();
	   return false
	}
	if(!isNaN(document.f1.f_desc.value))
	{
	  alert("Description field should not be numeric");
	document.f1.f_desc.value=""
	   document.f1.f_desc.focus();
	   return false
	}
		if(document.f1.type.value=="")
	{
	   alert("Food Type field should not be empty");
	   document.f1.type.focus();
	   return false
	}
	if(isNaN(document.f1.minq.value) || document.f1.minq.value=="")
	{
	  alert("Min Quantity field should be numeric");
	document.f1.minq.value=""
	   document.f1.minq.focus();
	   return false
	}
	if(isNaN(document.f1.maxq.value) || document.f1.maxq.value=="")
	{
	  alert("Max Quantity field should be numeric");
	document.f1.maxq.value=""
	   document.f1.maxq.focus();
	   return false
	}
	if(isNaN(document.f1.avail.value) || document.f1.avail.value=="")
	{
	  alert("Availability field should be numeric");
	document.f1.avail.value=""
	   document.f1.avail.focus();
	   return false
	}
	if(isNaN(document.f1.price.value) || document.f1.price.value=="")
	{
	  alert("Price field should be numeric");
	document.f1.price.value=""
	   document.f1.price.focus();
	   return false
	}
}
</script>
</head> 
<body onload="hidefield()">

<header>
<h1>Add New Item</h1>
</header>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn w3-green"  href="rhome.php">&#10094; Previous</a>
<a class="w3-right w3-btn w3-cyan" href="logout.php"><i class="fa fa-power-off w3-margin-right"> Logout</i></a>
</div>

	<center>
	<nav>
	

	<form id="f1" name="f1" action="insertmenusuc.php" enctype="multipart/form-data" method=post onsubmit="return f()">

		FOOD ID<font color=red>*</font>(Auto Generated)
			<input type=text name=f_id readonly value="<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error);


$sql = "SELECT * FROM menu ORDER BY F_ID DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id1= $row["F_ID"];
		$id1++;
    }
} else {
    echo "0 results";
}

echo $id1;
?>">

    Description<font color=red>*</font>

	<input type=text name=f_desc>
	
	Food Type(Specify: Indian/Chinese)<font color=red>*</font>

	<input type=text name=type>
	<br>Min Quantity a Customer can order<font color=red>*</font>
	
	<input type=text name=minq min=1 max=100>	
	<br>Max Quantity a Customer can order<font color=red>*</font>
	
	<input type=text name=maxq min=1 max=100>
	<br>Availability<font color=red>*</font>

	<input type=text name=avail min=1 max=100>	
	
	<br>Price<font color=red>*</font>
	<br>
	<input type=text name=price>	
	<br>
	Upload Image: <input id="file" name="file" type="file" />
	
	<input id="Submit" name="submit" type="submit" value="Submit" />
	</form>
	</nav>
	</div>
	<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/shirshak.das.71" 		    class="fa fa-facebook w3-hover-opacity"></a>
    <a href="https://www.instagram.com/shirshak007/"		    class="fa fa-instagram w3-hover-opacity"></a>
    <a href="https://twitter.com/shirshak008" 					class="fa fa-twitter w3-hover-opacity"></a>
    <a href="https://plus.google.com/102538407467302420903" 	class="fa fa-google w3-hover-opacity"></a>
  </div>
  <p>Powered by <strong>Shirshak & Suvarthi</strong></p>
  Copyright &copy;1994- 2018 United Parcel Service, Inc. All rights reserved
  <br>PS: This is not an official website. This is made for project purpose.
</footer>
	</body>
	</html>
