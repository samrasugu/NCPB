<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LEASING OF PROPERTIES | NCPB</title>
	<link rel="shortcut icon" type="image/png" href="imgs/logo/ncpblogo-icon.jpg">

	<!-- Google font -->
	  
  <!-- social icons -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">

	<!-- Main CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
	  include_once('header.php')
	?>
      
     
    <div class="prod-body-container">
      <hr>
     	<div class="row">
        <div class="col-qt">
     		<!-- Tab links -->
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Stores')" id="defaultOpen">Stores</button>
  <button class="tablinks" onclick="openCity(event, 'Silos')">Silos</button>
  <button class="tablinks" onclick="openCity(event, 'Land')">Land</button>
  <button class="tablinks" onclick="openCity(event, 'Offices')">Offices</button>
</div>

<!-- Tab content -->
<div id="Stores" class="tabcontent">
  <!-- <h3>Pishori</h3> -->
  <p><span>Stores</span><br><br>
</p>
</div>

<div id="Silos" class="tabcontent">
  <!-- <h3>Sindano</h3> -->
  <p><span>Silos</span><br><br>
</p>
</div>

<div id="Land" class="tabcontent">
  <!-- <h3>Tokyo</h3> -->
  <p><span>Land</span><br><br>
</p>
</div>
<div id="Offices" class="tabcontent">
  <!-- <h3>Beans</h3> -->
  <p><span>Offices</span><br><br>
<br><br>
</p>
</div>
       </div>
      </div>
     </div><br><br>

      
       <?php
	     include_once('footer.php')
	   ?>

   <script src="scripts/app.js"></script>

   <script>

    // Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

     function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
   </script>

</body>
</html>