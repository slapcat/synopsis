<?php

$config = parse_ini_file("hosts.ini", true);



?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>synopsis</title>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="leaflet/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
 <script src="leaflet/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
</head>
<body>
<div class="navbar">
  <a href="index.php"><i class="fas fa-globe-americas"></i>  Network</a>

  <a href="host.php"><i class="fas fa-server"></i>  Host 1</a>
  <a href="host.php"><i class="fas fa-server"></i>  Host 2</a>
  <a href="host.php"><i class="fas fa-server"></i>  Host 3</a>
</div>
<div id="mapid"></div>
<script>

	var mymap = L.map('mapid').setView([39.100108495062166, -94.57162622176607], 5);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoiam5hYmFzbnkiLCJhIjoiY2ttcGZuZzQ5MGJ1NjJ2bnNpNXBleHVjaSJ9.Px1mdjtmeW7XKFkE5mvclQ', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery &copy; <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'jnabasny/cl59m1m0b001z14rtuiz9roge',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);



	L.marker([42.9406, -78.8473]).addTo(mymap)
		.bindPopup("<b>Hello world!</b><br />I am a <a href=\"#link\">link</a>.");

	L.marker([42.9406, -78.8474]).addTo(mymap)
		.bindPopup("<b>Hello world!</b><br />I am a <a href=\"#link\">link</a>.");
	L.marker([42.94061, -78.8475]).addTo(mymap)
		.bindPopup("<b>Hello world!</b><br />I am a <a href=\"#link\">link</a>.");

</script>
</body>
</html>
