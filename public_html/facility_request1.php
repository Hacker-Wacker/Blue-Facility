<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!this is me>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BLUE FACILITY</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="g.js"></script>



</head>



<?php
//Just checking if any field has been left empty or not
// define variables and initialize with empty values
$objectnameErr = $detailsErr="";
$objectname = $details= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["objectname"])) {
        $objectnameErr = "Missing";
		 echo "Missing objectname!\n";
		 echo" ";
    }
    else {
        $username = $_POST["objectname"];
    }
    
    if (empty($_POST["details"])) {
        $detailsErr= "Missing";
		 echo "Missing details!\n";
		 echo " ";
    }
    else {
        $details= $_POST["details"];
    }
}
	
?>

<header>
  <div class="row-1">
    <div class="container">
      <div class="menubar">
                <!-- Logo -->  
      <div class="logo fleft"><image src= "images/a.jpg" width = "200" height= "100" align="left"/><h1>
        
        <a rel="home" title="BLUE FACILITY" href="project.html"></a>
        </h1>
      </div>
            
        <div class="socials">
            <div class="header-social">       
            <div class="textwidget">
              <div class="tooltips" id="social"> 
                <a title="Twitter" rel="tooltip" data-placement="bottom" href="#"><img alt="twitter" src="images/twitter.png"></a><a title="Facebook" rel="tooltip" data-placement="bottom" href="#"><img alt="facebook" src="images/facebook.png"></a><a rel="tooltip" data-placement="bottom" href="#" data-original-title="LinkedIn"><img alt="linkedin" src="images/linkedin.png"></a><a title="RSS" rel="tooltip" data-placement="bottom" href="#"><img alt="rss" src="images/rss.png"></a></div></div>
            </div>
        </div>
        
      </div>
   </div>


  <div class="row-3">
      <div class="container">
        
        <div class="sixteen columns">
              <!-- menu -->
             <nav id="main-nav-menu">
	      <ul class="sf-menu sf-js-enabled" id="menu-menu"><li class="menu-item" id="menu-item"><a href="index.html" class="sf-with-ul">Home<span class="indicator-sf"> »</span><span class="indicator"></span></a>

              </li>

              <li class="first_menu_item" id="first_menu_item"><a href="lost_item1.html" class="sf-with-ul">Lost Item<span class="indicator-sf"> »</span><span class="indicator"></span></a>
              </li>

              <li class="seventh_menu_item" id="seventh_menu_item"><a href="found_item.html" class="sf-with-ul">Found Item<span class="indicator-sf"> »</span><span class="indicator"></span></a>
              </li>
              
              <li class="second_menu_item" id="second_menu_item"><a href="room_booking2.html" class="sf-with-ul">Room Booking<span class="indicator-sf"> »</span><span class="indicator"></span></a>
              </li>

              <li class="third_menu_item" id="third_menu_item"><a href="facility_request1.php" class="sf-with-ul">Facility Request<span class="indicator-sf"> »</span><span class="indicator"></span></a>
              </li>

              <li class="fourth_menu_item" id="fourth_menu_item"><a href="feedback.html" class="sf-with-ul">FeedBack<span class="indicator-sf"> »</span><span class="indicator"></span></a>
              </li>

              <li class="fifth_menu_item" id="fifth_menu_item"><a href="imprint.html" class="sf-with-ul">Regulations<span class="indicator-sf"> »</span><span class="indicator"></span></a>
              </li>
	      
	
              
              <li class="sixth_menu_item" id="sixth_menu_item"><a href="contact.html">Contact»</a></li>

              </nav>

        </div>
      </div>
  </div>

  </div>
  <h2>REQUEST FACILITY</h2>
  <body>
  
  <form   method="post" action="insert_facility_request.php">
      Please fill in the fields below to report a defect in your room:<br><br>
      <table>
        <tr><td>Object name:</td>   <td><input type="text" name="objectname"></td></tr>
        <tr><td>Further Details:</td> <td><input type="text" name="details"></td></tr>
      </table><br>
      <button type="submit"> Submit</button>
    </form>

  </body>
</header>
<body>

  <!-- Post -->
</div>
<footer>
      Our Address: Jacobs University Bremen, Germany | Email: a.malik_at_jacobs-university.de, a.mushumbusi_at_jacobs-university.de, y.mengesha_at_jacobs-university.de <br>  
      © 2013 TheRebels . All rights reserved.</footer>
</body>
</html>
