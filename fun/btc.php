<?php
// API URL
$json_url = "https://index-api.bitcoin.com/api/v0/price/usd";
// get JSON data
$json = file_get_contents($json_url);
// convert json to array format
$data = json_decode($json, TRUE);

echo $data['price'] / 100 ;

?>
