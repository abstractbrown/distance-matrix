<?php

global $wpdb;

$origin = $_GET['origin'];
$destination = $_GET['destination'];

$make = $_GET['make'];
$model = $_GET['model'];

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
    "key" => 'AIzaSyCpOLc5AR8y3aUpZLE53ocYKcgXyTDyNEI'
);

$request = $url . "?" . http_build_query( $options );

curl_setopt($ch, CURLOPT_URL, $request);

// curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output = json_decode(curl_exec($ch), true);

if (curl_exec($ch) === false) {
    echo 'Curl error: ' . curl_error($ch);
}
else {
    echo("<br />");
    echo("<br />");

    $dist = $output['rows'][0]['elements'][0]['distance']['text'];
    $time = $output['rows'][0]['elements'][0]['duration']['text'];

    echo "Distance is: " . $dist;
    echo("<br />");
    echo "Time is: " . $time;

    if ($make == 'Audi') {
        $motosport = (0 * $dist) + 599;
        $chopper = (0 * $dist) + 799;
        $trike = (0*$dist) + 799;
        $atv = (0 * $dist) + 599;
        $auto = 466+(1.14 * $dist) + ((-0.000142) * ($dist^2));
    }
}

// $wpdb->query($wpdb->prepare("UPDATE $table_name SET time='$current_timestamp' WHERE userid=$userid"));


echo " This is the make: " . $make;
echo " This is the model: " . $model;

// close curl resource to free up system resources <br>
curl_close($ch);

// foreach($output['data'] as $key=>$val){ 
// }
?>