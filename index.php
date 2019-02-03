

<!DOCTYPE html>
<html>
   <title>Pixel Farm</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="w3.css">
   <body >
      <!-- Navbar (sit on top) -->
      <div class="w3-top">
         <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="#home" class="w3-bar-item w3-button"><b>Pixel</b> Farm</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
               <a href="login.php" class="w3-bar-item w3-button">Login</a>
               <a href="#about" class="w3-bar-item w3-button">About</a>
               <a href="#contact" class="w3-bar-item w3-button">Contact</a>
            </div>
         </div>
      </div>
      <!-- Header -->
      <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
         <img class="w3-image" src="acd.jpg" alt="Architecture" width="1500" height="800">
         <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>PIXEL</b></span> <span class="w3-hide-small w3-text-light-grey"><b>FARM</b></span></h1>
         </div>
      </header>
      <h2 style = "text-align: center;font-family: 'Roboto', sans-serif;text-transform: uppercase;"><i>Please choose your photo</i></h2>
      <br><br><br><br>
      <div style = "text-align: center;" >
         <p><a href="img/pig-pixel.pdf">
            <img src="img/peiqi.jpg" alt="" style='vertical-align:middle;max-width:20%;max-height:20%;'  id = "fr"/> </a>
            <input type="radio" id="Choice1" name="Choice" value="Choice1" >
            <label for="contactChoice1">Image 1</label>
            <a href="img/weini-pixel.pdf">
            <img src="img/winnie21.png" alt="" style='vertical-align:middle;max-width:20%;max-height:20%;' id = "sd"/> </a>
            <input type="radio" id="Choice2" name="Choice" value="Choice2" >
            <label for="contactChoice1">Image 2</label>
            <a href="img/xiongbenpixel.pdf">
            <img src="img/xiongben.jpg" alt="" style='vertical-align:middle;max-width:20%;max-height:20%;' id = "th"/> </a>
            <input type="radio" id="Choice3" name="Choice" value="Choice3" >
            <label for="contactChoice1">Image 3</label>
         </p>
        <canvas id="myCanvas" width="500" height="500" style="border:1px solid #d3d3d3;">
        Your browser does not support the HTML5 canvas tag.</canvas>
      </div>
      <br><br><br>
      <form style = "text-align: center;">
         Select your favorite colors:
         <input type="color" id="favcolor1" name = "color" value="#000000" >
         <input type="color" id="favcolor2" name = "color" value="#000000" >
         <input type="color" id="favcolor3" name = "color" value="#000000" >
         <input type="button" value="Submit" onClick = "Validate()">
      </form>
      <p style = "text-align: center;">Click the "Submit" button to get the design</p>
      <div style = "text-align: center;">
         <form  method="post" enctype="multipart/form-data" action="upload_file.php">
            Select image to upload:
            <input type="file" name=" image" style  = "margin: 0 auto;"/> 
            <input type="submit" name="submit" value="UPLOAD"/>
         </form>
      </div>
      <!-- Page content -->
      <div class="w3-content w3-padding" style="max-width:1564px">
         <!-- Project Section -->
         <div class="w3-container w3-padding-32" id="projects">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Examples</h3>
         </div>
         <div class="w3-row-padding">
            <?php
               $dbHost     = 'localhost';
               $dbUsername = 'camppp111';
               $dbPassword = '1999422';
               $dbName     = 'camppp111';
               
               //Create connection and select DB
               $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
               
               //Check connection
               if($db->connect_error){
                  die("Connection failed: " . $db->connect_error);
               }
               
               //Get image data from database
               $result = $db->query("SELECT * FROM images");
               
               if($result->num_rows > 0){
                   //Render image
                   while($rows=mysqli_fetch_array($result))
               {
                $image = $rows['image'];
                $location = $rows['location'];
                echo '<div class="'.'w3-col l3 m6 w3-margin-bottom">';
                echo'<div class="'.'w3-display-container ">';
                echo '<img src="data:image/jpeg;base64,'.base64_encode( $image).'" width="70%" height="70%" align="middle"/>';
                echo '</div>';
                echo '</div>';
               } 
               echo '</div>';
               }
               else{
                   echo 'Image not found...';
               }
               
               ?>
         </div>
         <!-- About Section -->
         <!--<div class="w3-container w3-padding-32" id="about">-->
         <!--   <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>-->
         <!--   <p>We are an non-profit organization that provides information about free and unwanted items that is held individuals. People can -->
         <!--      post their item information and where to pick it up. The purpose of this site is both for charity and efficiency of resource -->
         <!--      redistribution among society.-->
         <!--   </p>-->
         <!--</div>-->
         <div class="w3-row-padding w3-grayscale">
         </div>
         <!-- Contact Section -->
         <div class="w3-container w3-padding-32" id="contact">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
            <p>Lets get in touch and talk about your next project.</p>
            <form action="/Contact.php" target="_blank" name = "contact">
               <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
               <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
               <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
               <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
               <button class="w3-button w3-black w3-section" type="submit">
               <i class="fa fa-paper-plane"></i> SEND MESSAGE
               </button>
            </form>
         </div>
         <script>
            function sleep(milliseconds) {
            			var start = new Date().getTime();
            	  for (var i = 0; i < 1e7; i++) {
            		   if ((new Date().getTime() - start) > milliseconds){
            	      break;
            	   }
            	  }
            }
               				function Contact() {
               					var name = document.forms["contact"]["Name"].value;
               					var email = document.forms["contact"]["Email"].value;
               					var message = document.forms["contact"]["Comment"].value;
               					var dataString = 'name1=' + name + '&email1=' + email + '&message1=' + message;
            	if (name == '' || email == '' || message == '') {
            	alert("Please Fill All Fields");
            	} else {
            	
            	window.location.href = "Contact.php?w1=\"" + name + "\"&w2=\"" + email + "\"&w3=\"" + message + "\"";
            	}
            				}
         </script>            	
         <!-- End page content -->
      </div>
       <script src="js/main.js"></script> 
      <!-- Google Map -->
      <div id="googleMap" class="w3-grayscale" style="width:100%;height:450px;"></div>
      <!-- Footer -->
      <footer class="w3-center w3-black w3-padding-16">
         <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="GrabHUB" target="_blank" class="w3-hover-text-green">W3.CSS</a></p>
      </footer>
      <!-- Add Google Maps -->
      <script>
         function myMap()
         {
           myCenter=new google.maps.LatLng(43.0731, -89.4012);
           var mapOptions= {
             center:myCenter,
             zoom:12, scrollwheel: false, draggable: false,
             mapTypeId:google.maps.MapTypeId.ROADMAP
           };
           var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);
         
           var marker = new google.maps.Marker({
             position: myCenter,
           });
           marker.setMap(map);
         }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBdQU3kux_5DDyfW0NbI8_nJYkFCDf3pc&callback=myMap"></script>
      <!--
         To use this code on your website, get a free API key from Google.
         Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
         -->
   </body>
</html>

