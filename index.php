<?php

$config = parse_ini_file("hosts.ini", true);


include('header.php');
?>
<div id="mapid"></div>
<script>

	var mymap = L.map('mapid').setView([39.100108495062166, -94.57162622176607], 5);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery &copy; <a href="https://www.mapbox.com/">Mapbox</a>',
		id: '',
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
