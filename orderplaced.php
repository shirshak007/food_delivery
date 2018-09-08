<html xmlns="http://www.w3.org/1999/xhtml">
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


</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    
<script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
</head>
<body>
<form id="form1">
    <div id="dvContainer">
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
$c_id=$_SESSION["c_id"];
$o_id=$_POST["o_id"];
$total=$_POST["total"];
$method=$_POST["method"];

$r_id=$_SESSION["r_id"];
$c_pin=$_POST["pin"];

if($method=="cod")
	$status="Not Paid";
else	
	$status="Paid";

$sql3="insert into payment(ORDER_ID,PAYMENT_METHOD,TOTAL,PAYMENT_STATUS,DELIVERY_STATUS) values('$o_id','$method','$total','$status','Not Delivered')";

$sql4="INSERT INTO cust_order (CUST_ID,ORDER_ID) VALUES('$c_id','$o_id');";
$sql5="INSERT INTO restaurant_order (R_ID,ORDER_ID) VALUES('$r_id','$o_id');";
$sql6="select * from delivery_boy,d_b_service where delivery_boy.D_B_ID=d_b_service.D_B_ID and d_b_service.PINCODE='$c_pin' order by delivery_boy.D_B_ID DESC limit 1";
$result2 = $conn->query($sql6);
if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) 
	{
		$d_b_id=$row2["D_B_ID"];
		$sql7="INSERT INTO food_delivery (ORDER_ID,D_B_ID) VALUES('$o_id','$d_b_id');";
		
		if ( $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE && $conn->query($sql5) === TRUE && $conn->query($sql7) === TRUE)
			{
	$sql = "SELECT * from wishlist where C_ID='$c_id'";
	$result1 = $conn->query($sql);
	if ($result1->num_rows > 0) {
    // output data of each row
	$i=0;
    while($row = $result1->fetch_assoc()) {
        $f_id= $row["FOOD_ID"];
		$i++;
		$quantity=$row["QUANTITY"];
		$sql2="insert into menu_order(ORDER_ID,FOOD_ID,QUANTITY,STATUS) values('$o_id','$f_id','$quantity','Not Picked')";
		
		if ($conn->query($sql2) === TRUE ) {
			//echo $i." item Placed<br>";
			
		}			
		else
			echo "Already Place This item.. Sorry.. " . $sql2 . "<br>" .$conn->error;
    }	
	echo $i." item(s) Placed<br>";
	
} 
else {
    echo "0 results";
}

$sql = "select payment.ORDER_ID AS oid,payment.TOTAL as total,payment.PAYMENT_STATUS as stat, delivery_boy.D_B_NAME as dbname, delivery_boy.PH_NO as dbph,customer.C_NAME as cname, customer.PH_NO as cuph,c_address.FLAT_NO as flat,c_address.FLOOR as floor,c_address.APARTMENT_NO as apartment,c_address.STREET as street,c_address.LOCALITY as locality,c_address.PINCODE as pin  from delivery_boy,d_b_service,payment,food_delivery,cust_order,customer,c_address,craddress where delivery_boy.D_B_ID=d_b_service.D_B_ID and delivery_boy.D_B_ID=food_delivery.D_B_ID and payment.ORDER_ID=food_delivery.ORDER_ID and payment.ORDER_ID=cust_order.ORDER_ID and cust_order.CUST_ID=customer.C_ID and customer.C_ID=craddress.C_ID and craddress.ADDRESS_ID=c_address.ADDRESS_ID and payment.ORDER_ID='$o_id' and c_address.PINCODE='$c_pin'";
	?>
	

<table id="report1">
	<tr>
    <th>Order ID</th>
	<th>Customer Name</th>
    <th>PH_NO</th>
    <th>Flat,Floor,Apartment</th>
	<th>Locality,PIN</th>
	<th>DBoy Name</th>
	<th>DBoy PhNo</th>
	<th>Total Amount</th>
	<th>STATUS</th>
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
	<td><?php echo $row["cname"]?></td>
	<td><?php echo $row["cuph"]?></td>
	<td><?php echo $row["flat"].",".$row["floor"].",".$row["apartment"]?></td>
	<td><?php echo $row["locality"].",".$row["pin"]?></td>
	<td><?php echo $row["dbname"]?></td>
	<td><?php echo $row["dbph"]?></td>
	<td><?php echo $row["total"]?></td>
	<td><?php echo $row["stat"]?></td>	
</td>
	</tr>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Order Placed, Do not Press back or Refresh...</strong>
  <a href="uhome.php">CLICK HERE</a>
</div>

<?php

}
}
}
else{
	
	echo "Error: " . $sql3 . "<br>" ."Error: " . $sql4 . "<br>" ."Error: " . $sql5 . "<br>" ."Error: " . $sql7 . "<br>" . $conn->error;
	?>
	<a href="uhome.php">Home</a>
	<?php
	}
	}
}
else {
    echo "No Delivery Boy in this area available";
}
$sql8="Delete from wishlist where ORDER_ID='$o_id' and C_ID='$c_id'";
if($conn->query($sql8) === TRUE)
	{
	echo	"<br>Wishlist Empty";
	}

?>

</table>
</div>
    <input type="button" value="Download invoice" id="btnPrint" />
    </form>
</body>
</html>