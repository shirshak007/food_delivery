<head>
<title>HUNGRY DIGGER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/1.css">
<link rel="stylesheet" href="css/2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<style>

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
header
{
padding: 1em;
color:white;
background-color:#2a1506;
clear:left;
text-align:center;
}
nav{
float:middle;
max-width:50%;
padding:1em;
text-align:left;
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


</style>

<script language="javascript">
function func1()
{

		if(document.f1.pin.value=="")
	{
	   alert("Pin field should not be empty");
	   document.f1.pin.focus();
	   return false
	}
	if(isNaN(document.f1.pin.value))
	{
	  alert("pin field should be numeric");
	document.f1.pin.value=""
	   document.f1.pin.focus();
	   return false
	}
	if(document.f1.pin.value.length!=6)
	{
	  alert("PIN field should be 6 digit");
	   document.f1.pin.focus();
	   return false
	}
	if(document.f1.area.value=="")
	{
	   alert("Area field should not be empty");
	   document.f1.area.focus();
	   return false
	}
}
</script>

</head>
<body>
<header><h1>User Registration</h1></header>
<center>
<nav>
<form action=newlocationsuc.php method=post name=f1 onsubmit="return func1();">
PIN<font color=red>*</font>
	<input type=text name=pin>

Area<font color=red>*</font>
	<input type=text name=area>
	<input type=submit value=ADD>
	</form>
</nav>