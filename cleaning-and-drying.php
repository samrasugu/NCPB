<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CLEANING AND DRYING | NCPB</title>
	<link rel="shortcut icon" type="image/png" href="imgs/logo/ncpblogo-icon.jpg">

	<!-- Google font -->
	  
  <!-- social icons -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">

	<!-- Main CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css?version=1">
</head>
<body>

    <?php
	  include_once('header.php')
	?>
	
	<div class="body-container">
    <hr>
        <div class="row pd-prdct-srv">
        <div class="col-lg">
          <p>The Board cleans farmers’/customers’ grain to improve grade by removing foreign matter and chaff. Wet grain is dried to the required moisture content, a post-harvest grain handling service quite helpful to farmers and traders in the management of the grain during the rainy season.<br><br>The Board offers cleaning services for various grains and legumes to meet the standards set of Kenya Bureau of Standards</p>
        </div>
      </div>
    </div>
      
     
    <div class="prod-body-container">
      <!-- <hr> -->
     	<div class="row">
        <div class="col-qt">
           <button class="accordion">Lake Western</button>
           <div class="panel">
            <p>Bungoma, Webuye, Kisumu</p>
           </div>

           <button class="accordion">Nairobi Eastern</button>
           <div class="panel">
            <p>Nairobi Grain Silos</p>
           </div>

           <button class="accordion">North Rift</button>
           <div class="panel">
            <p>Kitale, Eldorect silos, Moi’s bridge</p>
           </div>

        </div>
      </div>
     </div><br><br>

      
       <?php
	     include_once('footer.php')
	   ?>

   <script src="scripts/app.js"></script>

   <script>
     var acc = document.getElementsByClassName("accordion");
     var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
   </script>

</body>
</html>