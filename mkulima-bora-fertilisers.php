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
     	<!-- <div class="row"> -->
        <!-- <div class="col-qt"> -->
     		<!-- Tab links -->
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'TopDressing')" id="defaultOpen">Top Dressing</button>
  <button class="tablinks" onclick="openCity(event, 'Planting')">Planting</button>
</div>

<!-- Tab content -->
<div id="TopDressing" class="tabcontent">
  <!-- <h3>Pishori</h3> -->
  <p><span>BUYING PROCEDURE</span><br><br>
1.Registration of farmers is the work of Agricultural Officers at Sub County and Ward levels. Farmers who are not registered will not access fertiliser.<br>
2.A registered and vetted farmer will the be issued with an official form by the vetting committee indicating the crops he/she grows and the quantity of fertilizer he/she needs to buy on the size of land prepared for planting and the available fertilizer as per allocation on the distribution list.<br>
3.Forms of authorization signatories of the officers vetting farmers shall be availed to the NCPB Regional Manager and Depot Manager in the locality in advance so that the the Depot/Silo Manager can authenticate the signature on the vetting forms to confirm if they are genuine.<br>
4.Forms MUST be filled in full, verified by vetting committee. Half filled form will not accepted by NCPB personnel and will be referred back to the vetting committee for fresh vetting.<br>
5.After verifying the form is genuine, the depot/silo manager shall confirm the availability of stock in the store and if adequate, endorses and stamps the voucher and indicates the account number and the bank or Mpesa till number as the case might be.<br>
6.Farmer shall proceed to deposit the cash or pay via Mpesa.</p><br><br>

<p><span>RELEASE OF FERTILISER</span><br><br>
1.Deposit/silo manager shall confirm the slip and Mpesa transactions using online statements and authorize on the deposit slip attached with fully processed voucher and the farmer’s identity cards.<br>
2.Cashier raises a prepaid sales order for the approved quantity.<br>
3.Farmers endorses all provisions of sale documents without fail.<br>
4.Cashier MUST confirm that the ID, the farmers photograph and other details match.<br>
5.Stores clerk after receiving the green copy of sales order from the cashier will proceed to raise customer dispatch advice (CDA) for prepaid sales order or invoice dispatch advice (IDA) for credit sales order(CSO).<br>
6.Customer (Farmer) must sign the customer dispatch advice CDA as provided to confirm having collected the subsidized fertiliser.</p><br><br>

<p><span>FARMERS COOPERATIVES SOCIETIES</span><br><br>
1. All the cooperative societies wishing to access subsidized fertilizers must be legally registered<br>
2.Respective members must also be registered farmers in MOAL&F database fully verified and confirmed<br>
3. The cooperative society’s fertilizer requirements will be rationalized by the county to ensure equity in considerations of quantities and types available in NCPB depots as per the allocation.<br>
4. The rationalized quanties by the counties shall be forwarded to the MOAL&F for approval by the principal secretary.<br>
5. The initialized quantities once approved in the permanent secretary will be forwarded to NCPB head office for onward transmission to the depots/silos for implementation.</p>
</div>

<div id="Planting" class="tabcontent">
  <!-- <h3>Sindano</h3> -->
  <p><span>BUYING PROCEDURE</span><br><br>
1.Registration of farmers is the work of Agricultural Officers at Sub County and Ward levels. Farmers who are not registered will not access fertiliser.<br>
2.A registered and vetted farmer will the be issued with an official form by the vetting committee indicating the crops he/she grows and the quantity of fertilizer he/she needs to buy on the size of land prepared for planting and the available fertilizer as per allocation on the distribution list.<br>
3.Forms of authorization signatories of the officers vetting farmers shall be availed to the NCPB Regional Manager and Depot Manager in the locality in advance so that the the Depot/Silo Manager can authenticate the signature on the vetting forms to confirm if they are genuine.<br>
4.Forms MUST be filled in full, verified by vetting committee. Half filled form will not accepted by NCPB personnel and will be referred back to the vetting committee for fresh vetting.<br>
5.After verifying the form is genuine, the depot/silo manager shall confirm the availability of stock in the store and if adequate, endorses and stamps the voucher and indicates the account number and the bank or Mpesa till number as the case might be.<br>
6.Farmer shall proceed to deposit the cash or pay via Mpesa.</p><br><br>

  <p><span>RELEASE OF FERTILISER</span><br><br>
1.Deposit/silo manager shall confirm the slip and Mpesa transactions using online statements and authorize on the deposit slip attached with fully processed voucher and the farmer’s identity cards.<br>
2.Cashier raises a prepaid sales order for the approved quantity.<br>
3.Farmers endorses all provisions of sale documents without fail.<br>
4.Cashier MUST confirm that the ID, the farmers photograph and other details match.<br>
5.Stores clerk after receiving the green copy of sales order from the cashier will proceed to raise customer dispatch advice (CDA) for prepaid sales order or invoice dispatch advice (IDA) for credit sales order(CSO).<br>
6.Customer (Farmer) must sign the customer dispatch advice CDA as provided to confirm having collected the subsidized fertiliser.</p><br><br>

<p><span>FARMERS COOPERATIVES SOCIETIES</span><br><br>
1. All the cooperative societies wishing to access subsidized fertilizers must be legally registered<br>
2.Respective members must also be registered farmers in MOAL&F database fully verified and confirmed<br>
3. The cooperative society’s fertilizer requirements will be rationalized by the county to ensure equity in considerations of quantities and types available in NCPB depots as per the allocation.<br>
4. The rationalized quanties by the counties shall be forwarded to the MOAL&F for approval by the principal secretary.<br>
5. The initialized quantities once approved in the permanent secretary will be forwarded to NCPB head office for onward transmission to the depots/silos for implementation.</p>
</div>

       <!-- </div> -->
      <!-- </div> -->
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