<head>
<title>HUNGRY DIGGER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/1.css">
<link rel="stylesheet" href="css/2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
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

input[type=text], select {
    width: 100%;
    padding: 4px 10px;
    margin: 1px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 4px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4Db0E6;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45b67f;
}

body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}
nav{
float:middle;
max-width:50%;
background-color: green;
padding:1em;
text-align:left;
}
/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>
<?php  session_start();?>
<ul>
<li><a class="w3-left w3-btn-large w3-green"  href="updatemenu.php">&#10094; Previous</a></li>
  <li class="dropdown"; style="float:right">
    <a href="javascript:void(0)" class="dropbtn"><?php echo $_SESSION["r_name"];?></a>
    <div class="dropdown-content">
	  <a href="rhome.php">Home</a>
      <a href="logout.php"><i class="fa fa-power-off"> Log Out</i></a>
	  
    </div>
  </li>
</ul>
<center>
<nav>
  <h3>FOOD INFO</h3>
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

$r_id=$_SESSION["r_id"];
$f_id=$_POST["f_id"];
//echo $r_id.$f_id;
$sql = "SELECT * from menu where F_ID='$f_id' and R_ID='$r_id';";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
{ 
?>
  <form action=updatemenusuc.php method=post>
  <input type=hidden name=f_id value="<?php echo $row["F_ID"]?>">
	Food Description
	<input type=text name=f_desc value="<?php echo $row["F_DESC"]?>">

	Food Type
	<input type=text name=f_type value="<?php echo $row["FOOD_TYPE"]?>">

	Min Quantity
	<input type=text name=min_q value="<?php echo $row["MIN_Q"]?>">
	
	Max Quantity
	<input type=text name=max_q value="<?php echo $row["MAX_Q"]?>">
	
	Price
	<input type=text name=price value="<?php echo $row["PRICE"]?>">

	
	<input type=submit value="Update">
	</form> 
	<?php
}
}
?>
  
</div>
<p align=right><a href="forgot.php">Forgot Password?</a></p>

</NAV>
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

</html> 
