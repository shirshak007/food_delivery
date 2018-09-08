<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/logo.png" type="image" sizes="16x16">
<title>HD::Menu</title>

<link rel="stylesheet" href="css/1.css">
<link rel="stylesheet" href="css/2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

<style>
body {
    font-family: Arial;
}

* {
    box-sizing: border-box;
}

header
{
padding: 1em;
color:white;
background-color:#2a1506;
clear:left;
text-align:center;
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
    width: 20%;
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
body {
    font-family: tahoma, helvetica, arial, sans-serif;
    font-size: 12px;
    
    background: #000;
    color: #ddd4d4;
    padding-top: 12px;
    line-height: 2;
    background-image: url('img/uhome.jpg');
	background-image-opacity:.5
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;
    opacity: 1;
    filter:alpha(opacity=80);
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

</style>

</head>

<body>

<header>
<h1>Search by Food Name</h1>
</header>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn w3-green"  href="uhome.php">&#10094; Previous</a>

<a class="w3-right w3-btn w3-cyan" href="logout.php"><i class="fa fa-power-off w3-margin-right"> Logout</i></a>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
    die();
$cid=$_SESSION["c_id"];
$nm=$_POST["foodsearch"];
echo "<font size=4><br>SEARCH RESULT for '".$nm."'</font><br>";
$sql1 = "SELECT * FROM customer,craddress,c_address where customer.C_ID=craddress.C_ID and craddress.ADDRESS_ID=c_address.ADDRESS_ID and customer.C_ID=$cid";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) 
{
	while($row1 = $result1->fetch_assoc()) 
	{
		$c_pin=$row1["PINCODE"];

$sql = "SELECT * FROM menu,restaurant,r_loc,rrloc,r_offer where restaurant.R_ID=rrloc.R_ID and rrloc.R_LOC_ID=r_loc.R_LOC_ID and menu.R_ID=restaurant.R_ID and r_offer.R_ID=restaurant.R_ID and r_offer.PINCODE='$c_pin'  and menu.F_DESC like '%$nm%' order by restaurant.PACKAGE DESC;";
$result = $conn->query($sql);
?>

<table id="report1">
	<tr>
    <th>Image</th>
    <th>Food Name</th>
	<th>Type</th>
    <th>Price</th>
	<th>Provided By</th>
	<th>Action</th>
	<tr>
	<?php
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
    ?>
    <tr>
	
	<td><img src="img/food<?php echo $row["F_ID"]?>.jpg"></td>
	<td><?php echo $row["F_DESC"]?></td>
	<td><?php echo $row["FOOD_TYPE"]?></td>
	<td><?php echo $row["PRICE"]?></td>
	<td><?php echo $row["R_NAME"]?></td>
	<td><div class="shake-hard">
<div class="w3-clear nextprev">

<a class="w3-right w3-btn w3-block" href="rmenu.php?r_id=<?php echo $row["R_ID"]?>"><i class="fa fa-angle-double-right w3-margin-right"><img src="img/ordernow.gif" width=100 height=50></i></a>
</div>
</div></td>
</tr>
	<?php
        }

}
else 
	echo "<tr><td>No match found in your location ".$row1["PINCODE"]."</td></tr>";
}
 
}
else
	echo "<tr><td>No match found in your location</td></tr>";
$conn->close();
?>
