<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WEIGHING | NCPB</title>
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
          <p>The Board provides weighing services that gives you an accurate weight for your load.The board operates 40,60 and 80 tonne weighbridges in it’s depots/Silos that are digital.The board also has platform weighing scales(100,250Kg).</p>
        </div>
      </div>
    </div>
      
     
    <div class="prod-body-container">
      <!-- <hr> -->
     	<div class="row">
        <div class="col-qt">
           <button class="accordion">Lake Western</button>
           <div class="panel">
            <p>Bungoma, Kisumu, Kisii, Kakamega, Kehancha, Webuye, Migori</p>
           </div>

           <button class="accordion">Nairobi Eastern</button>
           <div class="panel">
            <p>Loitoktok, Nairobi grain silos, Makueni, Thika, Lunga Lunga(Nairobi), G.C.P(Nairobi)</p>
           </div>

           <button class="accordion">South Rift</button>
           <div class="panel">
            <p>Eldama Ravine, Kericho, Nakuru Depot, Nyahururu, Nakuru Maize Silos, Narok, Nakuru Wheat Silos, Nakuru Cyprus Bins, Kirindoni, Kilgoris</p>
           </div>

           <button class="accordion">Coast</button>
           <div class="panel">
            <p>Shimanzi(Mombasa), Changamwe</p>
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