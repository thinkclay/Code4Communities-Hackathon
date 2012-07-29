<?php

$address = urlencode($_GET['address']);

$url = 'http://maps.google.com/maps/geo?q='.$address.'&output=csv&sensor=false';
$get = file_get_contents($url);
$records = explode(",", $get);
$lat = $records['2'];
$lng = $records['3'];

$data[] = array(
	'lat' => $lat,
	'lng' => $lng
);

echo json_encode($data);
?>