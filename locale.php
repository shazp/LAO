<?php 
$pagename = "index";
include("inc/header.php"); 
?>


    <div class="container marketing">
      <div id="locale" class="featurette">
      	<div class="row-fluid">
      		
      		                     	<br><br><div class="translation-buttons">
<a class="btn btn-large btn-primary" href="locale-espanol.php">Traducción al Español</a>
</div> 	<br><br>
      	</div>
      	
<div id="mapCanvas" class="span7 pull-right ftte-img-adjust" >

<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
<script type="text/javascript">
	  // initialize the google Maps 	
	
     function initializeGoogleMap() {
		// set latitude and longitude to center the map around
		var latlng = new google.maps.LatLng(26.25, 
											-112.47);		
		// set up the default options
		var myOptions = {
		  zoom: 13,
		  center: latlng,
		  navigationControl: true,
		  navigationControlOptions: 
		  	{style: google.maps.NavigationControlStyle.DEFAULT,
			 position: google.maps.ControlPosition.TOP_LEFT },
		  mapTypeControl: true,
		  mapTypeControlOptions: 
		  	{style: google.maps.MapTypeControlStyle.DEFAULT,
			 position: google.maps.ControlPosition.TOP_RIGHT },

		  scaleControl: true,
		   scaleControlOptions: {
        		position: google.maps.ControlPosition.BOTTOM_LEFT
    	  }, 
		  mapTypeId: google.maps.MapTypeId.SATELLITE,
		  draggable: true,
		  disableDoubleClickZoom: false,
		  keyboardShortcuts: true
		};
		var map = new google.maps.Map(document.getElementById("mapCanvas"), myOptions);
		if (false) {
			var trafficLayer = new google.maps.TrafficLayer();
			trafficLayer.setMap(map);
		}
		if (false) {
			var bikeLayer = new google.maps.BicyclingLayer();
			bikeLayer.setMap(map);
		}
		if (true) {
			addMarker(map,26.256993,-112.477110,"La Oficina");
			addMarker(map,26.256054,-112.477102,"Malecon Rental");
			addMarker(map,26.260918,-112.479824,"Materiales y Transportes San Juanico");
		}
	  }

	  window.onload = initializeGoogleMap();

	 // Add a marker to the map at specified latitude and longitude with tooltip
	 function addMarker(map,lat,long,titleText) {
	  	var markerLatlng = new google.maps.LatLng(lat,long);
	 	var marker = new google.maps.Marker({
      		position: markerLatlng, 
      		map: map, 
      		title:titleText,
			icon: "http://code.google.com/apis/maps/documentation/javascript/examples/images/beachflag.png"});   
	 }
	
    </script><!-- end .content -->
   
      	
      </div>	


        <h2 class="featurette-heading harabara"> Locale</h2>

        <p>San Juanico is a small fishing village nestled inside a south facing bay on the Pacific coast of Southern Baja. The main employers of the town are the local fishing co-operative and construction. The village began life as a center for the harvesting of abalone, and now has a fleet of pangas run by the co-op. They fish year round and still have seasons for lobster and abalone.</p>



 <h2 class="featurette-heading harabara"><br> Getting there</h2>
 
 
        <p>Car rentals are available from Loreto, La Paz and Los Cabos. The new road makes it a comfortable trip and once you are here there are good services available in town from restaurants and groceries to mechanics, a pharmacy and medical clinic.</p>
              </div>



      <!-- /END THE FEATURETTES -->

<div class="divider"><img src="img/swirl.png"></div>



 <?php 
 $myvar="english";
 include("inc/footer.php"); ?>
