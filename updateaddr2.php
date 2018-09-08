<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

#myInput {
    border-box: box-sizing;
    background-image: url('searchicon.png');
    background-position: 14px 12px;
    background-repeat: no-repeat;
    font-size: 16px;
    padding: 14px 20px 12px 45px;
    border: none;
    border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f6f6f6;
    min-width: 230px;
    overflow: auto;
    border: 1px solid #ddd;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>
<body>
<?php
session_start();
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
$a_id=$_POST["a_id"];
$flat_no=$_POST["flat_no"];
$floor=$_POST["floor"];
$apartment_no=$_POST["apartment_no"];
$street=$_POST["street"];
$locality=$_POST["locality"];
$city=$_POST["city"];
$pwd=$_POST["pw"];

$c_id=$_SESSION["c_id"];

$_SESSION["a_id"]=$a_id;
$_SESSION["flat_no"]=$flat_no;
$_SESSION["floor"]=$floor;
$_SESSION["apartment_no"]=$apartment_no;
$_SESSION["street"]=$street;
$_SESSION["locality"]=$locality;
$_SESSION["city"]=$city;
$_SESSION["npwd"]=$pwd;
	?>


<h2>Search Your Location by PIN</h2>
<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">CLICK HERE</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
	<?php
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "food_delivery";
	
	$sql = "SELECT * FROM LOCATION";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $pin= $row["PINCODE"];
		?>
		<a href="updateaddrsuc.php?pin=<?php echo $pin?>"><?php echo $pin?></a>
		<?php
    }
} else {
    echo "0 results";
}
// Create connection
?>
  </div>
</div>


<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
</script>

</body>