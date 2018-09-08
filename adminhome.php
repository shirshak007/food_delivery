
<html>
<title>HD:Admin_Home</title>
<link rel="icon" href="img/logo.png" type="image" sizes="16x16">

<head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/1.css">
<link rel="stylesheet" href="css/2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<style>
div.container{
width:100%;
border:1px solid gray;
}
body {
    font-family: tahoma, helvetica, arial, sans-serif;
    font-size: 12px;
    
    background: #000;
    color: #ddd4d4;
    padding-top: 12px;
    line-height: 2;
    background-image: url('img/backg.jpg');
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
/* Start http://www.cursors-4u.com */ * {cursor: url(http://cur.cursors-4u.net/food/foo-7/foo626.cur), auto !important;} /* End http://www.cursors-4u.com */
</style>
</head>
<body>
<div class="w3-row w3-small w3-cyan">
 
<ul>
<div class="w3-col s1">
  <li><a href="dbservice.php">Add Delivery Boy Details</a></li>
  </div>
  <div class="w3-col s1">
  <li><a href="dbserviceupdate.php">Update Delivery Boy Details</a></li>
  </div>
  <div class="w3-col s1">
  <li><a href="roffer.php">Add Resturant Offering Location</a></li>
  </div>
  <div class="w3-col s1">
  <li><a href="newlocation.php">Add New Location</a></li>
  </div>
  <div class="w3-col s1">
  <li><a href="menustats.php">View Top Selling Foods</a></li>
  </div>
  <div class="w3-col s1">
  <li><a href="reststats.php">Most orders from Restaurant</a></li>
  </div>
  <div class="w3-col s1">
  <li><a href="dbstats.php">Most orders by Delivery Boy</a></li>
  </div>
  
  <div class="w3-col s1">
  <li><a href="noofrest.php">Location with no of Restaurant</a></li>
  </div>
  
  
  <div class="w3-col s1">
  <li><a href="noofdb.php">Location with no of Delivery Boys</a></li>
  </div>
 
    <li class="dropdown"; style="float:right">
    <a href="javascript:void(0)" class="dropbtn"><?php session_start(); echo $_SESSION["a_name"];?></a>
    <div class="dropdown-content">
	  <a href="adminhome.php">Home</a>
      
      <a href="logout.php">Log Out</a>
	  
    </div>
  </li>
</ul>
</div>
<footer class="w3-container w3-padding-32 w3-center">
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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