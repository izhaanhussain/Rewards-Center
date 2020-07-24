<?php
	require 'header.php';
?>
	<main>
		<p>Click the button to get your coordinates.</p>

		<button onclick="getLocation()">Try It</button>

		<p id="demo"></p>
	</main>	
	<script>
		var x = document.getElementById("demo");

		function getLocation() {
		  if (navigator.geolocation) {
		    navigator.geolocation.getCurrentPosition(showPosition);
		  } else { 
		    x.innerHTML = "Geolocation is not supported by this browser.";
		  }
		}

		function showPosition2(position) {
		  x.innerHTML = "Latitude: " + position.coords.latitude + 
		  "<br>Longitude: " + position.coords.longitude;
		}

		function showError(error) {
		  switch(error.code) {
		    case error.PERMISSION_DENIED:
		      x.innerHTML = "User denied the request for Geolocation."
		      break;
		    case error.POSITION_UNAVAILABLE:
		      x.innerHTML = "Location information is unavailable."
		      break;
		    case error.TIMEOUT:
		      x.innerHTML = "The request to get user location timed out."
		      break;
		    case error.UNKNOWN_ERROR:
		      x.innerHTML = "An unknown error occurred."
		      break;
		  }
		}

		function showPosition(position) {
		  var latlon = position.coords.latitude + "," + position.coords.longitude;

		  var img_url = "https://maps.googleapis.com/maps/api/js?key=AIzaSyA5aeTfDt-qzVf8O2QMqkUvr36h1hnrbeE&callback=initMap";

		  document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
		}
	</script>
<?php
	require 'footer.php';
?>	