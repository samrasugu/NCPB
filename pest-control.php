<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PEST CONTROL | NCPB</title>
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
          <p><span>Pest Control Services</span><br>The Board has well-trained and experienced member of  staff who offer the following pest control services:<br><br></p>
          <p><b>a.     Fumigation</b> – this is a pest control method which uses pesticides in gaseous form under air-tight conditions.We use environmentally friendly and globally recommended phosphine gas for this service.</p><br>
          <p><b>b.     Spraying</b> – Spraying is carried out to control pests on premises, structures and on surfaces of packed/ bagged commodities.The Board offers this service using only recommended insecticides with proven efficacy.</p><br>
          <p><b>c.     Termite and Rodent control</b> – The Board undertakes rodent and termite control.</p><br><br>
          <p><b>Location</b><br><br>All Regional Offices</p>
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