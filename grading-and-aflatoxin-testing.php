<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GRADING AND AFLATOXIN TESTING | NCPB</title>
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
          <p><span>Grading Services</span><br><br>Grading Services are offered to farmers, millers, individuals in line with KEBS standards to ascertain the grade of the produce. These services are offered in the entire Board’s network.</p>
        </div>
      </div>
    </div>
      
     
    <div class="prod-body-container">
      <!-- <hr> -->
     	<div class="row">
        <div class="col-qt">
           <button class="accordion">Lake Western</button>
           <div class="panel">
            <p>Awendo, Kisumu Silos, Kehancha, Bungoma Stores, Kapsokwony, Hamisi, Bondo, Kisii, Nyansiongo, Bungoma Silos, Lugari, Myanga, Homa Bay, Ntimaru, Migori, Butere, Malaba, Kakamega, Tamlega, Kisumu silo stores, Kendu Bay, Chavakali, Malava, Kipkarren River</p>
           </div>

           <button class="accordion">South Rift</button>
           <div class="panel">
            <p>Bomet, Marigat, Kabarnet, Eldama Ravine, Kericho(New stores), Mulot, Elburgon, Nginyang, Kericho(Old stores), Enoosaen, Kilgoris, Kirindoni, Maralal, Narok stores, Nakuru(ex-Japanese), Naivasha,Kimalel, Kipkelion, Kedowa,  Nakuru (New stores), Keringet</p>
           </div>

           <button class="accordion">Coast Region</button>
           <div class="panel">
            <p>Changamwe, Voi, Garsen, Kwale, Hola, Mombasa, Kilifi, Mokowe.</p>
           </div>

           <button class="accordion">North Rift</button>
           <div class="panel">
            <p>Eldoret, Kapsabet, Moi’s Bridge, Lodwar , Mosoriot, Kapsowar, Ziwa, Kipkarren Salient, Turbo, Kapenguria, Kitale</p>
           </div>

           <button class="accordion">Northern</button>
           <div class="panel">
            <p>Embu, Kiganjo, Nanyuki, Meru, Maragua, Isiolo, Sagana, Mwea, Marsabit</p>
           </div>

           <button class="accordion">Nairobi Grain Silos</button>
           <div class="panel">
            <p>Nairobi Grain Silos</p>
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