<?php

function getDistance($latitude2, $longitude2) {
    $earth_radius = 6371;

    $latitude1 = $_SESSION['auth']->lati;
    $longitude1 = $_SESSION['auth']->longi;
    $dLat = deg2rad($latitude2 - $latitude1);
    $dLon = deg2rad($longitude2 - $longitude1);

    $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin($dLon/2) * sin($dLon/2);
    $c = 2 * asin(sqrt($a));
    $d = $earth_radius * $c;

    return $d;
}


// function baba(){
//     echo "----------------------";
//     // Get lat and long by address         
//     $address = "8 rue de romainville"; // Google HQ
//     // echo $address;
//     $prepAddr = str_replace(' ','+',$address);
//     // echo $prepAddr;
//     $geocode=file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
//     echo $geocode;
//     $output= json_decode($geocode);
//     $latitude = $output->results[0]->geometry->location->lat;
//     $longitude = $output->results[0]->geometry->location->lng;
// }



?>