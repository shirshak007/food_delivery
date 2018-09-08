<head>

<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/shake.css">

<style>
body {
    font-family: Arial;
}

* {
    box-sizing: border-box;
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
<form class="example" action="foodsresult.php" method=post>
  <input type="text" placeholder="Search by Food..." name='foodsearch'>
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<form class="example" action="restsresult.php" method=post>
  <input type="text" placeholder="Search by Restaurant..." name='restsearch'>
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<?php
$c_id=$_SESSION["c_id"];
$sql2="select * from c_address,craddress,customer where c_address.ADDRESS_ID=craddress.ADDRESS_ID and craddress.C_ID=customer.C_ID and customer.C_ID='$c_id'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) 
{
	while($row2 = $result2->fetch_assoc()) 
{ 
$pin=$row2["PINCODE"];
$sql = "SELECT * from restaurant,r_loc,rrloc,r_offer where restaurant.R_ID=rrloc.R_ID and rrloc.R_LOC_ID=r_loc.R_LOC_ID and r_offer.R_ID=restaurant.R_ID and r_offer.PINCODE='$pin' order by restaurant.PACKAGE DESC;";
	
	?>
<table id="report1">
	<tr>
	<?php echo "<h1>Restaurants in ".$pin."</h1>"?>
	
    <th>Image</th>
    <th>Restaurant Name</th>
	<th>TYPE</th>
    <th>EMAIL</th>
	<th>CALL US</th>
	<th>ACTION</th>
	<tr>
	<?php
	
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
{ 

?>
	
    <tr>
	
	<td><img src="img/rest<?php echo $row["R_ID"]?>.jpg"></td>
	<td><?php echo $row["R_NAME"]?></td>
	<td><?php echo $row["R_TYPE"]?></td>
	<td><?php echo $row["E_MAIL"]?></td>
	<td><?php echo $row["PH_NO"]?></td>
	<td><div class="shake-hard">
<div class="w3-clear nextprev">

<a class="w3-button w3-black w3-margin" href="rmenu.php?r_id=<?php echo $row["R_ID"]?>"><i class="fa fa-opencart w3-margin-right"> Open</i></a>
</div>
</div></td>
	</tr>
<?php 
}
}
else echo "<tr><td>No restaurants available</td></tr>";
}}
else
	echo "<tr><td><font color=white>No Restaurant in your Location</td></tr>"
	
	?>