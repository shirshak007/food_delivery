<head>
<title>Added to Cart</title>
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
max-width:300px;
margin:0;
padding:1em;
}
</style>
</head>
<body>

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
$f_id=$_POST["f_id"];
$c_id=$_SESSION["c_id"];
$r_id=$_SESSION["r_id"];
$quantity=$_POST["quantity"];
$maxq=$_POST["maxq"];
$price=$_POST["price"];
$sql = "SELECT * FROM payment ORDER BY ORDER_ID DESC LIMIT 1";
$result1 = $conn->query($sql);
if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        $order_id= $row["ORDER_ID"];
		$order_id++;
    }
} else {
    echo "0 results";
}
$subtotal=$price*$quantity;

//echo "q".$quantity;
//echo "oid".$order_id;
//echo "st".$subtotal;
$sql2="select * from wishlist where FOOD_ID='$f_id' and C_ID='$c_id' and R_ID='$r_id' GROUP by ORDER_ID";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) 
	{
		$q=$row2["QUANTITY"]+$quantity;
		$st=$row2["SUB_TOTAL"]+$price;
		
		$sql3="update wishlist set QUANTITY='$q',SUB_TOTAL='$st' where FOOD_ID='$f_id' and C_ID='$c_id' and R_ID='$r_id'";
		if($q<=$maxq)
		{
		if ($conn->query($sql3) === TRUE) {
		?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Increased quantity to Wish List</strong>
</div>
<?php

header("Refresh: 1; URL=viewwishlist.php");

		}
		}
		else
		{
			?>
			<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>MAX QUANTITY EXCEEDED</strong>
</div>
			<?php header("Refresh: 1; URL=viewwishlist.php");
		}
	}
}
else
{	
$sql1="INSERT INTO wishlist (C_ID,ORDER_ID,FOOD_ID,R_ID,QUANTITY,SUB_TOTAL) VALUES('$c_id','$order_id','$f_id','$r_id','$quantity',$subtotal);";
//$sql2="INSERT INTO restaurant_order (R_ID,ORDER_ID) VALUES('$r_id',1);";
//$sql3="INSERT INTO cust_order (CUST_ID,ORDER_ID) VALUES('$c_id',1);";
//$sql4="INSERT INTO food_delivery (ORDER_ID,D_B_ID) VALUES(1,1);";


if ($conn->query($sql1) === TRUE) {
?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Added To Wish List</strong>
</div>
<?php

header("Refresh: 1; URL=viewwishlist.php");
}
else
{
	
	 echo "Error: " . $sql1 . "<br>" . $conn->error;
}
}
?>