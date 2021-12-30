<?php
# Get Geolocation IP Address

function getGeolocation($ip)
{
    $api = 'https://api.ipgeolocationapi.com/geolocate/' . $ip;

    // Create a new cURL resource
    $curl = curl_init($api);

    // Return response instead of outputting
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Execute request
    $api_resp = curl_exec($curl);

    if ($api_resp === false) {
        $msg = curl_error($curl);
        curl_close($curl);
        return $msg;
    }

    // Close cURL resource
    curl_close($curl);

    // Retrieve IP data from API response
    $data = json_decode($api_resp, true);

    return !empty($data) ? $data : 'IP data is not found!';
}

$ip = '111.222.333.444';

$run = getGeolocation($ip);
var_dump($run);