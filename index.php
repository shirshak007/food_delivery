<!DOCTYPE html>
<html>
<link rel="icon" href="img/hungry.png" type="image" sizes="16x16">
<title>HUNGRY DIGGER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/1.css">
<link rel="stylesheet" href="css/2.txt">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" type="text/css" href="css/shake.css">

  
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
 


<style>
html,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none;}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
div.container{
width:100%;
border:1px solid gray;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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
/* Start http://www.cursors-4u.com */ * {cursor: url(http://cur.cursors-4u.net/food/foo-1/foo25.cur), auto !important;} /* End http://www.cursors-4u.com */

<!#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    max-width: 50%; 
    max-height: 50%;
>

</style>




 <div class="w3-row w3-large w3-cyan">
   <div class="w3-col s1">
   <center>
   <img class="w3-spin" src="img/hungry.png" width="35" height="35" />
   </center>
   </div>
    <div class="w3-col s2">
      <a href="index.php" class="w3-btn w3-block"><i class="fa fa-home"></i> HOME</a>
    </div>
    <div class="w3-col s2">
      <a onclick="document.getElementById('loginmenu').style.display='block'" class="w3-btn w3-block"><i class="fa fa-sign-in"></i> LOGIN</a>
    </div>
     <div class="w3-col s2">
      <a onclick="document.getElementById('signupmenu').style.display='block'" class="w3-btn w3-block"><i class="fa fa-user-plus"></i> SIGN UP</a>
    </div>
    <div class="w3-col s2">
      <a href="contact.php" class="w3-btn w3-block"><i class="fa fa-phone"></i> CONTACT US</a>
    </div>
	<div class="w3-col s2">
	<div class="shake-little">
 <a href="adminlogin.html" class="w3-btn w3-block"><i class="fa fa-male"></i> ADMIN LOGIN</a>
</div>
      
    </div>
	<div class="w3-col s1">
	<div class="shake-little">
	<a href="ordernow.php" class="w3-btn w3-block"><img src="img/ordernow.gif" width="120" height="37" /></a>
	</div>
	</div>
    
    </div>
	
<body>
<div id="loginmenu" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
	
      <span onclick="document.getElementById('loginmenu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h2>LOGIN AS</h2><font face=arial size=5>
	  <a href="ulogin.php" class="fa fa-user w3-btn">&nbsp&nbsp<strong><font face="courier new">CUSTOMER</a>&nbsp&nbsp<br>or,<br>
	  <a href="rlogin.php" class="fa fa-bitcoin w3-btn">&nbsp&nbsp<font face="courier new">RESTAURANT</a>&nbsp&nbsp<br>or,<br>
	  <a href="dblogin.php" class="fa fa-truck w3-btn">&nbsp&nbsp<font face="courier new">DELIVERY BOY</a></strong>
    </div>
    
  </div>
</div>
<div id="signupmenu" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('signupmenu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>REGISTER AS</h1>
	   <a href="usignup.php" class="fa fa-user w3-btn">&nbsp&nbsp<strong>CUSTOMER</strong></a>&nbsp&nbsp<br>or,<br>
	  <a href="rsignup.php" class="fa fa-bitcoin w3-btn">&nbsp&nbspRESTAURANT</a>&nbsp&nbsp<br>or,<br>
	  <a href="dbsignup.php" class="fa fa-truck w3-btn">&nbsp&nbspDELIVERY BOY</a>
    </div>
    
  </div>
</div>

<center>
<video autoplay loop id="myVideo" width=720 height=480>
  <source src="img/back3.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
</center>
<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:20px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b> </b></h1>
  </div>
	
  <!-- Slideshow -->
  <div class="slider">
    <ul class="slides">
	 <li>
        <img src="img/notice1.png" alt="sliderimg4"> <!-- random image -->
        <div class="caption right-align">
           <h1 class="center-align"><font size=10 face=allstar>We are</font></h1>
          
		</div>
		
      </li>
      <li>
        <img src="img/notice2.jpg" alt="sliderimg2"> <!-- random image -->
        <div class="caption left-align">
          <h1 class="right-align"><font size=5 color=RED>We know you are hungry!</font></h1>
			<h2 class="right-align"><font size=6 color=GREEN>Introducing Fastest delivery.</font></h2>
        </div>
      </li>
      <li>
        <img src="img/notice3.jpg" alt="sliderimg3"> <!-- random image -->
        <div class="caption right-align">
       <h1 class="center-align"><font size=8 color=BLACK>Continental/Sub-Continental</font></h1>
          <h1 class="center-align"><font size=8 color=CYAN>We cover all types of foods...</font></h2>
		</div>
		
      </li>
	  <li>
        <img src="img/notice4.jpg" alt="sliderimg4"> <!-- random image -->
        <div class="caption center-align">
        <div class="caption center-align">
          <h1>Restaurants</h1>
      <h2><font size=6 color=cyan>90% restaurants in Kolkata trust us.</font></h2>
		</div>
		
      </li>
	  
    </div>
		</div>
		
     </ul>
     </font>
	 
	 
	 
  <!-- Grid -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Latest News</span>
    </div>
    <div class="w3-col l3 m6 w3-container w3-padding-16">
      <h3>Newly Added</h3>
      <p><img src="img/bawarchi.jpg" height=100 width=160>
	  <br>A restaurant named Bawarchi sign up with us</p>
    </div>

    <div class="w3-col l3 m6 w3-container w3-padding-16">
      <h3>New Item Added</h3>
      <p>
	  <img src="img/hilsa.jpg" height=100 width=160>
	  <br>Sharma's kitchen added all new Hilsa Paturi
	  </p>
    </div>
	<div class="w3-col l3 m6 w3-container w3-padding-16">
      <h3>JOBS</h3>
      <p>We are hiring delivery boys for some areas.Contact US(Link at Top).</p>
    </div>
  </div>
  </div>
  
<!-- Footer -->
<font color=white face="arial" size=3>
<footer class="w3-container w3-padding-32 w3-center">
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">

	<img class="w3-spin" src="img/hungry.png" width="50" height="50" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="https://www.facebook.com/shirshak.das.71" 		    class="fa fa-facebook w3-hover-opacity"></a>
    <a href="https://www.instagram.com/shirshak007/"		    class="fa fa-instagram w3-hover-opacity"></a>
    <a href="https://twitter.com/shirshak008" 					class="fa fa-twitter w3-hover-opacity"></a>
    <a href="https://plus.google.com/102538407467302420903" 	class="fa fa-google w3-hover-opacity"></a>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<img class="w3-spin" src="img/hungry.png" width="50" height="50" />
  </div>
  <p>Powered by <strong>Shirshak & Partha & Kushal & Ayan & Basu</strong></p>
  Copyright &copy;1994- 2018 Hungry  Digger Service, Inc. All rights reserved
  <br>PS: This is not an official website. This is made for project purpose.
</footer>


 <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
  $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
  
  </script>

<script type="text/javascript">
  $(function() {  
      var pull        = $('#pull');  
          menu        = $('nav a');  
          // menuHeight  = menu.height();  
    
      $(pull).on('click', function(e) {  
          e.preventDefault();  
          menu.slideToggle();  
      }); 

  }); 
  $(window).resize(function(){  
      var w = $(window).width();  
      if(w > 320 && menu.is(':hidden')) {  
          menu.removeAttr('style');  
      }  
  });

  $(document).ready(function() {
    $('.fancybox').fancybox();
  });

  var $window = $(window);
  var velocity = 0.5;

  function update(){
      var pos = $window.scrollTop();

      $('.test').each(function() {
          var $element = $(this);
          var height = $element.height();

          $(this).css('backgroundPosition', '10% ' + Math.round((height - pos) * velocity) + 'px');
      });
  };

  $window.bind('scroll', update);


  var cbpAnimatedHeader = (function() {
 
    var docElem = document.documentElement,
        header = document.querySelector( '.cbp-af-header' ),
        didScroll = false,
        changeHeaderOn = 100;
 
    function init() {
        window.addEventListener( 'scroll', function( event ) {
            if( !didScroll ) {
                didScroll = true;
                setTimeout( scrollPage, 250 );
            }
        }, false );
    }
 
    function scrollPage() {
        var sy = scrollY();
        if ( sy >= changeHeaderOn ) {
            classie.add( header, 'cbp-af-header-shrink' );
        }
        else {
            classie.remove( header, 'cbp-af-header-shrink' );
        }
        didScroll = false;
    }
 
    function scrollY() {
        return window.pageYOffset || docElem.scrollTop;
    }
 
    init();
 
})();
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var strcount
var x = new Date()
document.getElementById('ct').innerHTML = x;
tt=display_c();
}
</script>
 

</body>
</html>
