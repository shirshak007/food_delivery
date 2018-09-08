<html>
<head>

<link rel="icon" href="img/logo.png" type="image" sizes="16x16">
<title>Restaurant Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/1.css">
<link rel="stylesheet" href="css/2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="shake.css">
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
nav{
float:middle;
max-width:50%;
background-color: green;
padding:1em;
text-align:center;
}
/* Start http://www.cursors-4u.com */ * {cursor: url(http://cur.cursors-4u.net/food/foo-2/foo190.cur), auto !important;} /* End http://www.cursors-4u.com */
</style>
</head>
<header>
<?php  session_start()?>
<ul>
  <li><a href="insertmenu.php">Add Item</a></li>
  <li><a href="updatemenu.php">Update Item</a></li>
  <li><a href="restpending.php">Pending Order</a></li>
  <li><a href="resthistory.php">Order History</a></li>
  <li><a href="addraddress.php">Add Address</a></li>
  <li><a href="rmenustats.php">Income Stats</a></li>
  <li class="dropdown" style="float:right">
    <a href="javascript:void(0)" class="dropbtn"><?php echo $_SESSION["r_name"];?></a>
    <div class="dropdown-content">
	  <a href="rhome.php"><i class="fa fa-home"></i></a>
      
      <a href="logout.php"><i class="fa fa-power-off"></i></a>
	  
    </div>
  </li>
</ul>
<center>
<nav>
What Customers See about you...
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
    die();

$r_id=$_SESSION["r_id"];

$sql1="select * from restaurant,r_loc,rrloc where restaurant.R_ID=rrloc.R_ID and rrloc.R_LOC_ID=r_loc.R_LOC_ID and restaurant.R_ID='$r_id';";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) 
{
    // output data of each row
    while($row = $result1->fetch_assoc()) 
	{

?>
<h1><?php echo $row["R_NAME"]?></h1>
We Offer <?php echo $row["R_TYPE"]?> Food
<br>Phone: <?php echo $row["PH_NO"]?>, Email: <?php echo $row["E_MAIL"]?>
<br>Address: <?php echo $row["BUILDING"]?> Building, <?php echo $row["FLOOR_NO"]?> Floor
<br><?php echo $row["STREET_NO"]?> Street, <?php echo $row["LOCALITY"]?>, <?php echo $row["CITY"]?>-<?php echo $row["PINCODE"]?>

<center>
<h1>Find us...<h1>
<div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $row["R_NAME"]?>%20<?php echo $row["PINCODE"]?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.maps-erstellen.de"></a></div><style>.mapouter{text-align:right;height:250px;width:300px;}.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:300px;}</style></div>
</center>
<?php
	}
}
?>
</nav>
<footer class="w3-container w3-padding-32 w3-center" >

  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right" ></i>To the top</a>
  <div class="w3-xlarge w3-section">
<font color=white>
	<a href="https://www.facebook.com/shirshak.das.71" 		    class="fa fa-facebook w3-hover-opacity"></a>
    <a href="https://www.instagram.com/shirshak007/"		    class="fa fa-instagram w3-hover-opacity"></a>
    <a href="https://twitter.com/shirshak008" 					class="fa fa-twitter w3-hover-opacity"></a>
    <a href="https://plus.google.com/102538407467302420903" 	class="fa fa-google w3-hover-opacity"></a>
	</div>
  <p>Powered by <strong>Shirshak & Partha & Kushal & Ayan & Basu</strong></p>
  Copyright &copy;1994- 2018 Hungry  Digger Service, Inc. All rights reserved
  <br>PS: This is not an official website. This is made for project purpose.
</footer>

</html>
