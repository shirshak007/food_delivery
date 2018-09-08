<head>

<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/1.css">
<link rel="stylesheet" href="css/2.txt">

<style>
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
</style>
</head>
<body>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn w3-green"  href="uhome.php">&#10094; Previous</a>
<a class="w3-right w3-btn w3-cyan" href="logout.php"><i class="fa fa-power-off w3-margin-right"> Logout</i></a>
</div>
<nav>
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
$total=0;
$c_id=$_SESSION["c_id"];

$sql = "SELECT * from wishlist,menu where wishlist.FOOD_ID=menu.F_ID and wishlist.C_ID='$c_id'";
	?>
<table id="report1">
	<tr>
    <th>Food Id</th>
    <th>Food Desc</th>
    <th>Unit Price</th>
	<th>Quantity</th>
    <th>Subtotal</th>
    <th>Action</th>
	<tr>
	<?php
	$o_id=0;
	$r_id=0;
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
{ 
$quantity=$row["QUANTITY"];
$availability=$row["AVAILABILITY"]-$quantity;
$o_id=$row["ORDER_ID"];
$_SESSION["availability"]=$availability;
?>
	
    <tr>
	
	<td><?php echo $row["FOOD_ID"]?></td>
	<td><?php echo $row["F_DESC"]?></td>
	<td><?php echo $row["PRICE"]?></td>
	<td><?php echo $row["QUANTITY"]?></td>
	<td><?php echo $row["SUB_TOTAL"]?></td>
	<td><a href=delwish.php?f_id=<?php echo $row["F_ID"]?>>Delete this</a></td>
	
</div></td>
	</tr>
<?php 

$r_id=$row["R_ID"];
$total+=$row["SUB_TOTAL"];
}
}

else
	echo "<tr><td><font color=white>No Items in wishlist</td></tr>";
	
	?>
	<h2>Total Amount:<?php echo $total?></h2>
	</table>
	<?php if($r_id>0 || $o_id>0)
	{?>
<form class="example" action="rmenu.php?r_id=<?php echo $r_id?>" method=post>
  <button type="submit"><i class="fa fa-plus">Add More</i></button>
</form>
<form class="example" action="checkout.php" method=post>
<font color=white>
<strong>Select Delivery Address Before Checkout<br>
	<input type=hidden name=o_id value=<?php echo $o_id?>>
	<input type=hidden name='total' value=<?php echo $total?>>
	<?php
	$c_id1=$_SESSION["c_id"];
	
	$sql2="select c_address.PINCODE as pin,c_address.FLAT_NO as flat,c_address.FLOOR as floor,c_address.APARTMENT_NO as apart,c_address.LOCALITY as local from c_address,craddress,customer where c_address.ADDRESS_ID=craddress.ADDRESS_ID and craddress.C_ID=customer.C_ID and customer.C_ID='$c_id1'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) 
{
	while($row2 = $result2->fetch_assoc()) 
		
{
	$cpin=$row2["pin"];
	
	$sql3="select *  from d_b_service where PINCODE='$cpin'";
$result3 = $conn->query($sql3);
if ($result3->num_rows > 0) 
{
	while($row3 = $result3->fetch_assoc()) 
		
{	
?>
	<input type=radio name=area value=<?php echo $row2["pin"]?> checked><?php echo $row2["flat"].",".$row2["floor"].",".$row2["apart"].",".$row2["local"].",".$row2["pin"]."<br>"?>
<?php 
}}
}}
?>
  <button type="submit"><i class="fa fa-money"> Proceed to Pay <?php echo $total?>/-</i></button>
</form>
	<?php }
	?>
</nav>	
	