<?php

$origin = $_GET['origin'];

$destination = $_GET['destination'];

if (empty($origin) || empty($destination)) {
    ?><script> 
        alert('Must select origin and destination'); 
    </script><?php
} else {
    echo $origin . " to " . $destination;
}

// add_action("disctance_matrix_form", "distance_matrix_api");

// function distance_matrix_api() {

$ch = curl_init();

// Api Url<br>
$url = "https://maps.googleapis.com/maps/api/distancematrix/json";

// Array of options to be passed to API<br>
$options = array(
    "origins" => "$origin",
    "destinations" => "$destination",
    "units" => "imperial",
    "language" => "en-GB",
    "key" => 'AIzaSyBU4dtPkXTcKoixvug48eOAs7J3K1WmMgo'
);

$request = $url . "?" . http_build_query( $options );

curl_setopt($ch, CURLOPT_URL, $request);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$output = json_decode(curl_exec($ch), true);

echo("<br />");
echo("<br />");

$dist = $output['rows'][0]['elements'][0]['distance']['text'];
$time = $output['rows'][0]['elements'][0]['duration']['text'];

echo "Distance is: " . $dist;
echo("<br />");
echo "Time is: " . $time;

// close curl resource to free up system resources <br>
curl_close($ch);

// foreach($output['data'] as $key=>$val){ 
// }
?>