<head>
<title>STATS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/1.css">
<link rel="stylesheet" href="css/2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
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
#report1 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
	color:black;
	
    background-color:#99bffc;
	opacity:1;
	text-align: center;
    width: 100%;
}

#report1 td, #report1 th {
    border: 1px solid #ddd;
	
	padding: 8px;
}

#report1 tr:hover {background-color: #118BBA;}

#report1 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}

form.example input[type=text] {
    padding: 1px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 100%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}
nav{
float:left;
max-width:50%;
margin:0;
padding:1em;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #2a1506;
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
</style>
</head>
<body bgcolor=white>
<ul>
  

  <li class="dropdown"; style="float:right">
    <a href="javascript:void(0)" class="dropbtn"><?php session_start(); echo $_SESSION["a_name"];?></a>
    <div class="dropdown-content">
	  <a href="adminhome.php">Home</a>
      
      <a href="logout.php"><i class="fa fa-power-off"> Log Out</i></a>
	  
    </div>
  </li>
</ul>
<?php
//header('Content-Type:application/json');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
    die();

$sql = "SELECT location.AREA as area, location.PINCODE as pin,COUNT(delivery_boy.D_B_ID) as noofdb FROM delivery_boy,location WHERE location.PINCODE=delivery_boy.AREA GROUP by delivery_boy.AREA ORDER BY noofdb DESC";
	?>
<table id="report1">
	<tr>
    <th>Area</th>
	<th>PIN</th>
    <th>Total Delivery Boys</th>
	
	<tr>
	<?php
	
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
{ //$data[]=$row;
?>
  <tr>	
	<td><?php echo $row["area"]?></td>
	<td><?php echo $row["pin"]?></td>
	<td><?php echo $row["noofdb"]?></td>
	</div></td>
	</tr>

<body bgcolor=black>
<center>
<?php

}?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Locations with most no of Delivery Boys</strong>
 
</div></table><?php
}
else
	echo "No Resule";
mysqli_close($conn);
?><h1>Stats in Graph</h1>
<?php
include "noofdbbargraph.html";
?>
