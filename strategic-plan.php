<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Strategic Plan | NCPB</title>
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
          <p><span>Strategic Goals</span><br><br>1. Establish GCK as autonomous commercial enterprise<br><br>2. To diversify sources of funding/revenue generation for sustained business growth<br><br>3. To increase revenue generation through commodity trade<br><br>4. To strengthen human resource capacity to support enterprise development<br><br>5. To provide a conducive physical working environment for improved performance<br><br>6. Strengthen collaboration, partnership and linkages with partners and other stakeholders<br><br>7. Strengthen post-harvest value addition and management services</p>
          <p>The strategic goals listed above will be achieved through implementation of the seven (7) priority areas formulated in the strategic direction with their respective strategic objectives, expected key results/successes and strategies for achieving respective strategic objectives. The seven priority areas are:<br><br>1.    Transformation of NCPB to GCK<br><br>2.    Raise Capital for growth and sustainability<br><br>3.    Business development, diversification and marketing<br><br>4.    Grain Management and value addition<br><br>5.    Partnerships and Collaborations<br><br>6.    Capacity building for enhanced service del<br><br>7.    ICT for improved efficiency</p>
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