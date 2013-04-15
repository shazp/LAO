<?php 
$pagename = "index";
include("inc/header.php"); 
?>

    <div class="container marketing">

      <div id="locale" class="featurette">
      	
      	      	<div class="row-fluid">
      		
      		                     	<br><br>                    	<div class="translation-buttons">
<a class="btn btn-large btn-primary" href="locale.php">English Version</a>
</div> 	<br><br>
      	</div>
<div id="mapCanvas" class="span7 pull-right ftte-img-adjust" >
<br><br>
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
      	

        <h2 class="featurette-heading harabara"> Locale</h2><br>
        <p>San Juanico es un pequeño pueblo de pesquero ubicado en el interior de una bahía orientada al sur en la costa del Pacífico de Baja California Sur. Los principales actividades laborales de este pueblo es la pesca cooperativa local y la construcción. El pueblo comenzó su vida como un centro para la recolección de abulones, y ahora cuenta con una flota de pangas a cargo de la cooperativa. Ellos pescan durante todo el año y aun tienen temporadas de langosta y abulón. Tambien nos visitan muchos extranjeros para practicar el surf. Ya que nuestra bahia hace unas olas especiales para este deporte.<br><br></p>
        <h2 class="featurette-heading harabara">Indicaciones</h2>
        <p>Alquiler de coches están disponibles en  Loreto, La Paz y Los Cabos. La nueva carretera hace que sea un viaje cómodo y una vez que esté aquí hay buenos servicios disponibles en el pueblo como restaurantes y tiendas de abarrotes, talleres mecánicas, una farmacia y una clínica médica.</p>
              </div>


                

      <!-- /END THE FEATURETTES -->

<div class="divider"><img src="img/swirl.png"></div>


 <?php 
 $myvar="spanish";
 include("inc/footer.php"); ?>
