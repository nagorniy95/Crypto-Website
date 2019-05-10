<?php
# This example requires curl is enabled in php.ini
$url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters = [
    'start' => '1',
    'limit' => '20',
    'convert'=> 'USD',
];

$headers = [
    'Accepts: application/json',
    'X-CMC_PRO_API_KEY: 3d9f735c-7119-4ffe-9af5-6c6183a90373'
];
$qs = http_build_query($parameters);
$request = "{$url}?{$qs}"; // create the request URL


$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
    CURLOPT_URL => $request,            // set the request URL
    CURLOPT_HTTPHEADER => $headers,     // set the headers 
    CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
));

$response = curl_exec($curl); // Send the request, save the response
$jsonObject = json_decode($response);

// echo gettype($response) . "<hr>";
// echo gettype($jsonObject) . "<hr>";

?>
<h2 class="coinm_h2"><a href="../views/coinmTop100.php" title="Top 100 Cryptocurrencies">Cryptocurrencies by Market Capitalization</a></h2>
<table id="coinm_table">
  <tr>
    <th>&#35;</th>
    <th>Name</th>
    <th class="mobile_remove">Market Cap</th>
    <th>Price</th>
    <th class="mobile_remove">Circulating Supply</th>
    <th>Change(24h)</th>
    <th class="mobile_380_remove">Change(7d)</th>
  </tr>

<?php 
// Loop through Object
for ($x = 0; $x < 20; $x++) {
    echo "<tr>";
        echo "<td>" . ($x + 1) . "</td>";
        echo "<td class='symbol' title='" . $jsonObject->data[$x]->symbol .  "'>" . $jsonObject->data[$x]->name . "</td>";
        echo "<td class='mobile_remove'>&#36;" . number_format($jsonObject->data[$x]->quote->USD->market_cap) . "</td>";
        echo "<td>&#36;" . round( ( $jsonObject->data[$x]->quote->USD->price ), 2 ) . "</td>";
        echo "<td class='mobile_remove'>" . number_format($jsonObject->data[$x]->circulating_supply) . "</td>";

        // next one 24 hours
        echo "<td><span id='color' ";

    	    if(( $jsonObject->data[$x]->quote->USD->percent_change_24h) < 0){
    	    	echo " class='red' ";
    	   
    	    }else{ 
    	    	echo " class='green' ";
    	    }

        echo " >" . round( $jsonObject->data[$x]->quote->USD->percent_change_24h, 2 ) . "&#37;</span></td>" ;

        // next one 7 days
        echo "<td class='mobile_380_remove'><span id='color' ";

            if(( $jsonObject->data[$x]->quote->USD->percent_change_7d) < 0){
                echo " class='red' ";
           
            }else{ 
                echo " class='green' ";
            }

       echo " >" . round( $jsonObject->data[$x]->quote->USD->percent_change_7d, 2 ) . "&#37;</span></td>" ;
   echo "</tr>";
} 
?>
</table>
<div align="center"><a href="../views/coinmTop100.php" title="Top 100 Cryptocurrencies" class="btn btn-default show-more">Show More</a></div>

<?php

curl_close($curl); // Close request
