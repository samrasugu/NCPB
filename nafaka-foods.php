<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NAFAKA FOODS | NCPB</title>
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
  <button class="tablinks" onclick="openCity(event, 'Pishori')" id="defaultOpen">Pishori</button>
  <button class="tablinks" onclick="openCity(event, 'Sindano')">Sindano</button>
  <button class="tablinks" onclick="openCity(event, 'Maize')">Maize</button>
  <button class="tablinks" onclick="openCity(event, 'Beans')">Beans</button>
</div>

<!-- Tab content -->
<div id="Pishori" class="tabcontent">
  <!-- <h3>Pishori</h3> -->
  <p><span>Nafaka Pishori Rice</span><br><br>
Captivating aroma. Superfine slender grains. Impeccably soft texture.
It has everything to give you a pure imperial treat that exhilarates your senses and soul.<br><br>
Available in:</p>
</div>

<div id="Sindano" class="tabcontent">
  <!-- <h3>Sindano</h3> -->
  <p><span>Nafaka Sindano Rice</span><br><br>
Treat yourself to the mouth-watering delights of Nafaka Sindano Rice. It gives you the goodness of purity and taste that will fill your stomach and keep you fit and active all day.<br><br>
Available in: 50kg bag</p>
</div>

<div id="Maize" class="tabcontent">
  <!-- <h3>Tokyo</h3> -->
  <p><span>Nafaka Maize</span><br><br>
Nafaka Maize is highly graded quality maize that offers you a healthy wholesome meal that will enhance your menu while giving you strength all day long.<br><br>
Available in: Maize is sold in Bulk or Packages of: 50kg, 20kgs and 10kgs. It is available in our depots which are located country wide.</p>
</div>
<div id="Beans" class="tabcontent">
  <!-- <h3>Beans</h3> -->
  <p><span>Nafaka Beans</span><br><br>
Indulge yourself in carefully selected and delicious Nafaka beans. Nafaka beans is a perfect health food which is low in fat and cholesterol and high in fiber, iron , folic acid a good source of protein.<br><br>
</p>
</div>
       </div>
      </div>
     </div>

      
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