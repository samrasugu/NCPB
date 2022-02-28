<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Corporate Social Responsibility | NCPB</title>
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
        <div class="col-svnty">
          <p><span>Corporate social responsibility</span><br><br>National Cereals and Produce Board (NCPB) continues to dedicate part of its profit to corporate social responsibility activities aimed at enhancing the livelihoods of those in needs. NCPB has strategically implemented CSR which has enhanced the Board’s image thereby creating great public goodwill from Kenyans. CSR is about capacity building for sustainable livelihoods. It respects cultural differences and finds the business opportunities in building the skills of employees, the community and the government”, In a nutshell, CSR is about business “giving back to society. The Board strives to conduct its business in a way that minimizes environmental impact as well as promoting positive interaction with the community in accordance with sound ethical standards. This brings benefits to all concerned and is in line with the “Social Pillar” of Vision 2030, which calls for “a modern, fair, socially inclusive and equal society supported by a productive and prosperous economy”. NCPB focuses on various activities aimed at making positive impact on various communities while creating a cordial relationship and raising the organization’s profile. Areas of focus included environmental conservation, Health, support to sporting activities, education and social welfare.</p>
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