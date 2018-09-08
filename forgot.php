<head>
<title>HUNG Forgot</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="1.css">
<link rel="stylesheet" href="2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}

div.container{
width:100%;
border:1px solid gray;
}

header, footer
{
padding: 1em;
color:white;
background-color:black;
clear:left;
text-align:center;
}
nav{
float:middle;
max-width:300px;
margin:0;
padding:1em;
}


input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
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

div {
    border-radius: 5px;
    background-color: #f1f1f1;
    padding: 20px;
}


input[type=submit]:hover {
    background-color: #45b67f;
	

}

</style>

<script>
function func1()
{
if(document.f1.phno.value=="")
	{
	   alert("Mobile no field should not be empty");
	   document.f1.phno.focus();
	   return false
	}
	if(isNaN(document.f1.phno.value))
	{
	  alert("mobile no field should be numeric");
	document.f1.phno.value=""
	   document.f1.phno.focus();
	   return false
	}
	if(document.f1.phno.value.length!=10)
	{
	  alert("mobile no field should be 10 digit");
	   document.f1.phno.focus();
	   return false
	}
}
</script>
</head>
<body>
<div class="container">
<header><h1>RESET PASSWORD</h1></header>
<nav>
<form action=forgotcheck.php method=post name=f1 onsubmit="return func1()">
Enter USER ID/Email ID<font color=red>(Required*)</font>:&nbsp&nbsp<input type=text name=id>
Enter Phone No <font color=red>(Required*): </font><input type=text name=phno>
<br><br>
<input type=submit value="RESET">

</form>
</nav>
</center>
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
