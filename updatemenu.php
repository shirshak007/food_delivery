<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/logo.png" type="image" sizes="16x16">
<title>HD::Menu</title>

<link rel="stylesheet" href="css/1.css">
<link rel="stylesheet" href="css/2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/shake.css">

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
tr:nth-child(even) {
    background-color: #f2f2f2
}
</style>

<script>
function sortTable(n) {

  var table, rows, switching, i, x, y, shouldSwitch,m;
  table = document.getElementById("report1");
  switching = true;
  m=n;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("tr");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("td")[3];
      y = rows[i + 1].getElementsByTagName("td")[3];
      //check if the two rows should switch place:
      if(m==0)
	  {
	  if (Number(x.innerHTML) > Number(y.innerHTML)) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
	  }
	  else
	  {
		if (Number(x.innerHTML) < Number(y.innerHTML)) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }  
	  }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>

</head>

<body>
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

$r_id=$_SESSION["r_id"];

?>
<header>
<h1>Update Menu</h1>
</header>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn w3-green"  href="rhome.php">&#10094; Previous</a>

<a class="w3-right w3-btn w3-cyan" href="logout.php"><i class="fa fa-power-off w3-margin-right"> Logout</i></a>
</div>

<?php

$sql = "SELECT * FROM menu where R_ID='$r_id'";
$result = $conn->query($sql);
?>

<h2>Select Food</h2>
<NAV><table id="report1">
	<tr>
    <th>Image</th>
    <th>Food Name</th>
	<th>Type</th>
    <th>Price</th>
    <th>Quantity</th>
	<th>Action</th>
	</tr>
	<?php
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
    ?>
	<form action="updatemenu2.php" method=post>
    <input type=hidden name=maxq value=<?php echo $row["MAX_Q"]?>>
	<tr>
	
	<td><img src="img/food<?php echo $row["F_ID"]?>.jpg" width=300 height=200></td>
	<td><?php echo $row["F_DESC"]?></td>
	<td><?php echo $row["FOOD_TYPE"]?></td>
	<td id=TD><?php echo $row["PRICE"]?></td>
	
	<td><input type="number" name='quantity' value=1 min=<?php echo $row["MIN_Q"]?> max=<?php echo $row["MAX_Q"]?>></td>
	<input type=hidden name=f_id value=<?php echo $row["F_ID"]?>>
	<td><div class="shake-little">
	
  <button type="submit"><i class="fa fa-pencil"> EDIT</i></button>
</td>
</form>

</div>

</tr>
	<?php
        }

} 

$conn->close();
?>
</table>

</nav>
</body>

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
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
