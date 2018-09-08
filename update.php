<head>
<title>HUNGRY DIGGER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/1.css">
<link rel="stylesheet" href="css/2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<style>
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
    background-color: #037070;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #75D975;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
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

body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body onload="openCity(event, 'info')">

<ul>
<li><a class="w3-left w3-btn-large w3-green"  href="uhome.php">&#10094; Previous</a></li>
  <li class="dropdown"; style="float:right">
    <a href="javascript:void(0)" class="dropbtn"><?php session_start(); echo $_SESSION["c_name"];?></a>
    <div class="dropdown-content">
	  <a href="uhome.php">Home</a>
      <a href="logout.php"><i class="fa fa-power-off"> Log Out</i></a>
	  
    </div>
  </li>
</ul>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'info')">Personal Info</button>
  <button class="tablinks" onclick="openCity(event, 'addr')">Address</button>
</div>

<div id="info" class="tabcontent">
  <h3>Personal Info</h3>
  <p>
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

$c_id=$_SESSION["c_id"];

$sql = "SELECT * from customer where C_ID='$c_id';";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
{ 
?>
  <form action=updateinfo.php method=post name=f1 onsubmit="return func1()">
	Name
	<input type=text name=name value="<?php echo $row["C_NAME"]?>">

	Phone No
	<input type=text name=phno value="<?php echo $row["PH_NO"]?>">


	Email

	<input type=text name=email value="<?php echo $row["LOGIN_TYPE"]?>">

	Enter Password(to proceed)<font color=red>*</font>
	<input type=password name=pwd>
	<input type=submit value="Update">
</form>
<?php
}
}?>
  </p>
</div>

<div id="addr" class="tabcontent">
  <h3>Your Address</h3>
<p>
  <div class="tab">  
  
  <?php
  $sql1 = "SELECT * from customer,craddress,c_address where craddress.C_ID=customer.C_ID and craddress.ADDRESS_ID=c_address.ADDRESS_ID and  customer.C_ID='$c_id';";
	$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) 
{
	$i=1;
	while($row = $result1->fetch_assoc()) 
{ echo "<center><h3>Address".$i++."</h3></center>"?>
  <form action=updateaddr2.php method=post>
  <input type=hidden name=a_id value="<?php echo $row["ADDRESS_ID"]?>">
	Flat No
	<input type=text name=flat_no value="<?php echo $row["FLAT_NO"]?>">

	Floor
	<input type=text name=floor value="<?php echo $row["FLOOR"]?>">

	Apartment No
	<input type=text name=apartment_no value="<?php echo $row["APARTMENT_NO"]?>">
	
	Street
	<input type=text name=street value="<?php echo $row["STREET"]?>">
	
	Locality
	<input type=text name=locality value="<?php echo $row["LOCALITY"]?>">

	City
	<input type=text name=city value="<?php echo $row["CITY"]?>">
	Enter Password(to proceed)<font color=red>*</font>
	<input type=password name=pw>
	<input type=submit value="NEXT">
	</form> 
	<?php
}
}
?>
  
</div>
</div>

<p align=right><a href="forgot.php">Forgot Password?</a></p>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}


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
	if(document.f1.pwd.value=="")
	{
	   alert("Password field should not be empty");
	   document.f1.pwd.focus();
	   return false  
	}
 
}
</script>
     
</body>
</html> 
