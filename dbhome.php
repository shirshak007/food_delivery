<html>
<head>

<link rel="icon" href="img/logo.png" type="image" sizes="16x16">
<title>DBoy Home</title>
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
#report1 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
	color:black;
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
/* Start http://www.cursors-4u.com */ * {cursor: url(http://cur.cursors-4u.net/cursors/cur-2/cur197.ani), url(http://cur.cursors-4u.net/cursors/cur-2/cur197.png), auto !important;} /* End http://www.cursors-4u.com */
</style>
</head>
<body>

<ul>
  <li><a href="dbpending.php">Pending Item</a></li>

  <li><a href="dbhistory.php">Order History</a></li>
  <li class="dropdown"; style="float:right">
    <a href="javascript:void(0)" class="dropbtn"><?php session_start(); echo $_SESSION["dbname"];?></a>
    <div class="dropdown-content">
	  <a href="dbhome.php">Home</a>

      <a href="logout.php"><i class="fa fa-power-off"> Log Out</i></a>
	  
    </div>
  </li>
</ul>

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


/*
$sql = "SELECT * from item where c_id='$c_id' and final_date='0000-00-00' order by i_id;";
	?>
<table id="report1">
	<tr><th>Item ID</th>
    <th>Destination</th>
	<th>DEST. PIN</th>
    <th>DEST. C/O</th>
	<th>Weight</th>
	<th>Type</th>
	<th>Expected Date</th>
	<th>Cost</th>
	<th>Action</th>
	
	<?php
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
{ 
$dest=$row["dest_adr_id"];


?>
	
    <tr>
	<td><?php echo "<font color=White>".$row["i_id"]?></td>
	<td><?php 
	$sql1 = "SELECT * from address where adr_id='$dest';";
	$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) 
{
	while($row1 = $result1->fetch_assoc()) 
{ 
	echo "<font color=yellow>".$row1["address"];
	
?></td>
	<td><?php echo "<font color=#7ACA3C>".$row1["pin"]?></td>
	<td><?php echo "<font color=cyan>".$row1["care_of"]?></td>
	<td><?php echo "<font color=orange>".$row["weight"]?></td>
	<td><?php echo "<font color=pink>".$row["type"]?></td>
	<td><?php echo "<font color=#E09879>".$row["exp_date"]?></td>
	<td><?php echo "<font color=red>".$row["price"]?></td>
	<td><div class="shake-little">
<div class="w3-clear nextprev">

<a class="w3-right w3-btn w3-block" href="track.php?i_id=<?php echo $row["i_id"]?>"><i class="fa fa-car w3-margin-right"><font color=yellow>Track</i></a>
</div>
</div></td>
	</tr>
<?php 
}
}
}
}
else
	echo "<tr><td><font color=white>You are not sending any items now.</td></tr>"
	*/
	?>
	
</p>
</div>
</table>
</body>

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

</html>
