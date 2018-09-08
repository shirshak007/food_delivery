<head>
<title>Order Placed</title>
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

body {
    font-family: tahoma, helvetica, arial, sans-serif;
    font-size: 12px;
    
    background: #000;
    color: #ddd4d4;
    padding-top: 12px;
    line-height: 2;
    background-image: url('img/wishlist.jpg');
	background-image-opacity:.5
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;
    opacity: 1;
    filter:alpha(opacity=80);
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
<body>
<ul>
  

  <li class="dropdown"; style="float:right">
    <a href="javascript:void(0)" class="dropbtn"><?php session_start(); echo $_SESSION["r_name"];?></a>
    <div class="dropdown-content">
	  <a href="rhome.php">Home</a>
      
      <a href="logout.php"><i class="fa fa-power-off"> Log Out</i></a>
	  
    </div>
  </li>
</ul>
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
$sql = "select payment.ORDER_ID as oid,menu_order.FOOD_ID as fid, menu_order.QUANTITY as quantity,menu.F_DESC as fdesc, menu.FOOD_TYPE as ftype,menu.AVAILABILITY as avail,restaurant_order.R_ID as rid from payment,menu_order,menu,restaurant_order where payment.ORDER_ID=menu_order.ORDER_ID and menu.F_ID=menu_order.FOOD_ID  and restaurant_order.ORDER_ID=payment.ORDER_ID and restaurant_order.R_ID='$r_id' and menu_order.STATUS='Not Picked'";
	?>
<table id="report1">
	<tr>
    <th>Order ID</th>
	<th>Food ID</th>
    <th>Description</th>
	<th>Type</th>
	<th>Quantity</th>
	<th>Click To Confirm Dboy Pick Up</th>
	<tr>
	<?php
	
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
{ 
?>
  <tr>	
	<td><?php echo $row["oid"]?></td>
	<td><?php echo $row["fid"]?></td>
	<td><?php echo $row["fdesc"]?></td>
	<td><?php echo $row["ftype"]?></td>
	<td><?php echo $row["quantity"]?></td>
	
	<td><form action=orderpickedup.php method=post>
	<input type=hidden name=o_id value="<?php echo $row["oid"]?>">
	<input type=hidden name=quantity value=<?php echo $row["quantity"]?>>
	<input type=hidden name=f_id value=<?php echo $row["fid"]?></td>
	<input type=hidden name=avail value=<?php echo $row["avail"]?></td>
	
	<i class="fa fa-arrow-right"></i><input type=submit value=" CONFIRM">
	</td>
	</form>
	</tr>

<body bgcolor=black>
<center>
<?php

	
	//header("Refresh: 2; URL=home.php");
}?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>YOUR PENDING ITEMS</strong>
 
</div>

<?php
}
else
	echo "No Delivery Pending";


?>