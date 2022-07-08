<?php

$config = parse_ini_file("hosts.ini", true);

include('header.php');


?>
<div id="mapid"></div>
<script>

	var mymap = L.map('mapid').setView([39.100108495062166, -94.57162622176607], 5);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=<?php echo $config['global']['access_token']; ?>', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery &copy; <a href="https://www.mapbox.com/">Mapbox</a>',
		id: '<?php echo $config['global']['id']; ?>',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);

	<?php echo $pins; ?>

</script>
</body>
</html>
