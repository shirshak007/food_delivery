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

?>
<br><br><br>
	<a href=logout.php>Log Out</a>
<br>
<?php
$nm=$_POST["nm"];
echo "<font size=6><br>SEARCH RESULT</font><br>";
$sql = "SELECT * FROM catalog WHERE lower(iname) like '%$nm%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        $name= $row["iname"];
	$price=$row["price"];
	$type=$row["type"];
	?>
	<form action=wishlist.php method=post>
	<table border=1>
	<tr><td>
	Item ID: <input type=text name=iid value='<?php echo $row["iid"]?>' readonly><br>
	Name<input type=text name=iname value='<?php echo $row["iname"]?>' readonly><br>
	Type<input type=text name=type value='<?php echo $row["type"]?>' readonly><br>
	Price<input type=text name=price value='<?php echo $row["price"]?>' readonly>
	Quantity:<input type=text name=q value=1>
	<input type=submit value=WishList>
	</form>
	</td></tr>
	</table>
		
	<?php
        }

} 

$conn->close();
?>
