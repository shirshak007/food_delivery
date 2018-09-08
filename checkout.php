	
<head>
<title>HD::Checkout</title>
<link rel="icon" href="img/logo.png" type="image" sizes="16x16">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="1.css">
<link rel="stylesheet" href="2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<style>
/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
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
header, footer
{
padding: 1em;
color:white;
background-color:#2a1506;
clear:left;
text-align:center;
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

/* Padding - just for asthetics on Bootsnipp.com */
body { margin-top:20px; }

/* CSS for Credit Card Payment form */
.credit-card-box .panel-title {
    display: inline;
    font-weight: bold;
}
.credit-card-box .form-control.error {
    border-color: red;
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
}
.credit-card-box label.error {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.credit-card-box .payment-errors {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.credit-card-box label {
    display: block;
}
/* The old "center div vertically" hack */
.credit-card-box .display-table {
    display: table;
}
.credit-card-box .display-tr {
    display: table-row;
}
.credit-card-box .display-td {
    display: table-cell;
    vertical-align: middle;
    width: 50%;
}
/* Just looks nicer */
.credit-card-box .panel-heading img {
    min-width: 180px;
}
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    width: 25%;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

</style>

<script language="javascript" type="text/javascript">

document.getElementById("card").onkeyup = function() {myFunction()};

function myFunction() {
    
	var x = document.getElementById("card");

	if(x.value.length/4==1)
	x.value= x.value += "-";
	if(x.value.length/9==1)
	x.value= x.value += "-";
if(x.value.length/14==1)
	x.value= x.value += "-";
if(x.value.charAt(0)=='4') 
{
	
	document.getElementById("p1").innerHTML = "VISA";

}
if((x.value.charAt(0)+x.value.charAt(1)=='51')||(x.value.charAt(0)+x.value.charAt(1)=='52')||(x.value.charAt(0)+x.value.charAt(1)=='53')||(x.value.charAt(0)+x.value.charAt(1)=='54')||(x.value.charAt(0)+x.value.charAt(1)=='55')) 
{
	
	document.getElementById("p1").innerHTML = "MasterCard";

}
if((x.value.charAt(0)=='6')||(x.value.charAt(0)+x.value.charAt(1)=='56')||(x.value.charAt(0)+x.value.charAt(1)=='57')||(x.value.charAt(0)+x.value.charAt(1)=='58')||(x.value.charAt(0)+x.value.charAt(1)=='50')) 
{
	
	document.getElementById("p1").innerHTML = "Maestro";

}
if((x.value.charAt(0)+x.value.charAt(1)=='60')||(x.value.charAt(0)+x.value.charAt(1)+x.value.charAt(2)+x.value.charAt(3)=='6521') )
{
	
	document.getElementById("p1").innerHTML = "RuPay";

}
}

function myFunction3() {
    
	var x = document.getElementById("ccard");

	if(x.value.length/4==1)
	x.value= x.value += "-";
	if(x.value.length/9==1)
	x.value= x.value += "-";
if(x.value.length/14==1)
	x.value= x.value += "-";
if(x.value.charAt(0)=='4') 
{
	
	document.getElementById("p2").innerHTML = "VISA";

}
if((x.value.charAt(0)+x.value.charAt(1)=='51')||(x.value.charAt(0)+x.value.charAt(1)=='52')||(x.value.charAt(0)+x.value.charAt(1)=='53')||(x.value.charAt(0)+x.value.charAt(1)=='54')||(x.value.charAt(0)+x.value.charAt(1)=='55')) 
{
	
	document.getElementById("p2").innerHTML = "MasterCard";

}
if((x.value.charAt(0)=='6')||(x.value.charAt(0)+x.value.charAt(1)=='56')||(x.value.charAt(0)+x.value.charAt(1)=='57')||(x.value.charAt(0)+x.value.charAt(1)=='58')||(x.value.charAt(0)+x.value.charAt(1)=='50')) 
{
	
	document.getElementById("p2").innerHTML = "Maestro";

}
if((x.value.charAt(0)+x.value.charAt(1)=='60')||(x.value.charAt(0)+x.value.charAt(1)+x.value.charAt(2)+x.value.charAt(3)=='6521') )
{
	
	document.getElementById("p2").innerHTML = "RuPay";

}
}

function myFunction2() {
    
	var x = document.getElementById("exp");
if(x.value.length/2==1)
	x.value= x.value += "/";
if(x.value.charAt(0)+x.value.charAt(1)>'12')
{
	alert("ERROR DATE")
	x.value="";
	return false
	
}

	}

	function myFunction4() {
    
	var x = document.getElementById("cexp");
if(x.value.length/2==1)
	x.value= x.value += "/";
if(x.value.charAt(0)+x.value.charAt(1)>'12')
{
	alert("ERROR DATE")
	x.value="";
	return false
	
}

	}
function myFunction5() {
    document.getElementById("f1").reset();
}
function myFunction6() {
 
var x = document.getElementById("upi1");
    	 
		if(!x.value.includes("@"))
		{
		x.value="";
		x.focus();
		alert("ERROR");
		return false;
		}
}
function openCity(evt, cityName) {
	document.getElementById("f1").reset();
	document.getElementById("f2").reset();
	document.getElementById("f3").reset();
	document.getElementById("f4").reset();
	document.getElementById("f5").reset();
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
	document.getElementById("f1").reset();
}




</script>

</head>
<body onload="openCity(event, 'debit')">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error);


$o_id=$_POST["o_id"];
$total=$_POST["total"];
$pin=$_POST["area"];
?>
<div class="container">
<header><h1>Secure Payment Portal</h1>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn w3-green"  href="uhome.php">&#10094; Previous</a>
</div>
</header>


<nav>
<div class="tab">
	  
  <button class="tablinks" onclick="openCity(event, 'debit')">Debit Card</button>
  <button class="tablinks" onclick="openCity(event, 'credit')">Credit Card</button>
  <button class="tablinks" onclick="openCity(event, 'upi')">UPI</button>
  <button class="tablinks" onclick="openCity(event, 'paytm')">Paytm</button>
  <button class="tablinks" onclick="openCity(event, 'cod')">Cash on Delivery</button>
</div>

<div id="debit" class="tabcontent">
  <p>
<form id="f1" action="orderplaced.php" method=post>
	
	<input type=hidden name=o_id value='<?php echo $o_id?>'>
	<input type=hidden name=pin value='<?php echo $pin?>'>
	<input type=hidden name=total value='<?php echo $total?>'>
	<input type=hidden name=method value='<?php echo "Debit Card"?>'>

 
 <link href="pay1.css" rel="stylesheet" id="bootstrap-css">
 <script src="pay2.js"></script>
 <script src="pay3.js"></script>


<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="pay4.js"></script>
<script type="text/javascript" src="pay5.js"></script>

<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="pay6.js"></script>

<div class="container">
    <div class="row">
        <!-- You can make it whatever width you want. I'm making it full width
             on <= small devices and 4/12 page width on >= medium devices -->
        <div class="col-xs-12 col-md-4">
        <input type="button" onclick="myFunction5()" value="Reset">
 
        
            <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="pay1.png">
                        </div>
                    </div>                    
                </div>
				<div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
					<h4 class="panel-title display-td" >TOTAL AMOUNT <?php echo $total?></h4>
					</p></div></div></div>
                <div class="panel-body">
                    <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input 
										class="form-control"
										type="text" name="card" 
										id="card"
										maxlength=19
										onkeyup = "myFunction()"
										required
										>
										
                                        <span class="input-group-addon">
										<p id="p1"></p>
										</i></span>
										
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        name="exp"
                                        id="exp"
                                        placeholder="MM / YY"
                                        autocomplete="cc-exp"
                                        required 
										onkeyup = "myFunction2()"
										maxlength=5
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CVV CODE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control"
                                        name="cvv"
                                        placeholder="CVV"
                                        autocomplete="cc-csc"
                                        required
										maxlength=3
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">NAME OF CARD HOLDER</label>
                                    <input type="text" class="form-control" name="cardholder" />
                                </div>
                            </div>                        
                        </div>
                       
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    
                </div>
            </div>            
      </div>                        
    </div>
</div>
 
 <input type=submit value="Place Order">
 </form>
  </p>
</div>
<div id="credit" class="tabcontent">
  <h3>Credit Card Details</h3>
  <p>
  <form id="f2" action="orderplaced.php" method=post>
<input type=hidden name=o_id value='<?php echo $o_id?>'>
	<input type=hidden name=total value='<?php echo $total?>'>
	<input type=hidden name=pin value='<?php echo $pin?>'>
	<input type=hidden name=method value='<?php echo "Credit Card"?>'>
 <link href="pay1.css" rel="stylesheet" id="bootstrap-css">
 <script src="pay2.js"></script>
 <script src="pay3.js"></script>


<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="pay4.js"></script>
<script type="text/javascript" src="pay5.js"></script>

<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="pay6.js"></script>

<div class="container">
    <div class="row">
        <!-- You can make it whatever width you want. I'm making it full width
             on <= small devices and 4/12 page width on >= medium devices -->
        <div class="col-xs-12 col-md-4">
        
        
            <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="pay1.png">
                        </div>
                    </div>                    
                </div>
				<div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
					<h4 class="panel-title display-td" >TOTAL AMOUNT <?php echo $total?></h4>
					</p></div></div></div>
                <div class="panel-body">
                    <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input 
										class="form-control"
										type="text" name="card" 
										id="ccard"
										maxlength=19
										onkeyup = "myFunction3()"
										required
										>
										
                                        <span class="input-group-addon">
										<p id="p2"></p>
										</i></span>
										
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        name="cexp"
                                        id="cexp"
                                        placeholder="MM / YY"
                                        autocomplete="cc-exp"
                                        required 
										onkeyup = "myFunction4()"
										maxlength=5
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CVV CODE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control"
                                        name="cvv"
                                        placeholder="CVV"
                                        autocomplete="cc-csc"
                                        required
										maxlength=3
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">NAME OF CARD HOLDER</label>
                                    <input type="text" class="form-control" name="cardholder" />
                                </div>
                            </div>                        
                        </div>
                       
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    
                </div>
            </div>            
      </div>                        
    </div>
</div>

 
 <input type=submit value="Place Order">
 </form>

  </p>
</div>

<div id="upi" class="tabcontent">
  <h3>UPI </h3>
  <p>
  <form id="f3" action="orderplaced.php" method=post onsubmit="return myFunction6()">
<input type=hidden name=o_id value='<?php echo $o_id?>'>
	<input type=hidden name=total value='<?php echo $total?>'>
	<input type=hidden name=pin value='<?php echo $pin?>'>
	<input type=hidden name=method value='<?php echo "UPI"?>'>
  <center>
  ENTER YOUR UPI ID
  <input type=text id="upi1" name=card required maxlength=50 placeholder="abc@okexample" >
  <input type=submit value="Place Order">
 </center>
 </form>
  </p>
</div>

<div id="paytm" class="tabcontent">
  <p>
  <form id="f4" action="orderplaced.php" method=post>
<input type=hidden name=o_id value='<?php echo $o_id?>'>
	<input type=hidden name=total value='<?php echo $total?>'>
	<input type=hidden name=pin value='<?php echo $pin?>'>
	<input type=hidden name=method value='<?php echo "Paytm"?>'>
  <center>
  <div class="gallery">
  <img src="paytm1.png" alt="" width="400" height="500">
  </div>
 
  <img src="paytm2.png" alt="" width="30" height="50">
 or, Enter Phone Number
  <input type=text name=card required maxlength=10>
  <input type=submit value="Place Order">
 </form>
 </center>
  </p>
</div>

<div id="cod" class="tabcontent">
  <h3>Cash on Delivery </h3>
  <p>
  <form id="f5" action="orderplaced.php" method=post>
	
	<input type=hidden name=o_id value='<?php echo $o_id?>'>
	<input type=hidden name=total value='<?php echo $total?>'>
	<input type=hidden name=method value='<?php echo "cod"?>'>
<input type=hidden name=pin value='<?php echo $pin?>'>
  <center>
  Pay <?php echo $total?>/- to Delivery Boy. Place order and get draft bill.
  <input type=submit value="Place Order">
 </center>
 </form>
  </p>
</div>


</nav>
</body>
</div>
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
