<?php
//--- Config info
require_once "config/config.php";

$v="20170801";
$ll="40.7,-74";
$urlPath="https://api.foursquare.com/v2/venues/search?ll=$ll&client_id=$client_id&client_secret=$client_secret&v=".$v;
$ch = curl_init($urlPath);

curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
