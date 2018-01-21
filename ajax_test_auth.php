<?php

require_once "config/config.php";

$v="20170801";
$ll="40.7,-74";
$redirect="http://fourdquareapi.dev/redirect.php";
//$urlPath="https://api.foursquare.com/v2/venues/search?ll=$ll&client_id=$client_id&client_secret=$client_secret&v=".$v;
$url="https://foursquare.com/oauth2/authenticate?client_id=$client_id&response_type=code&redirect_uri=".$redirect;
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
