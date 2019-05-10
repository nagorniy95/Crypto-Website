<?php
// API URL
$json_urlAsks = "https://api.bitfinex.com/v1/book/btcusd?limit_asks=999999999";
$json_urlBids = "https://api.bitfinex.com/v1/book/btcusd?limit_bids=999999999";
// get JSON data
$json_Asks = file_get_contents($json_urlAsks);
$json_Bids = file_get_contents($json_urlBids);
$data_Asks = json_decode($json_Asks, true);
$data_Bids = json_decode($json_Bids, true);

// Shorts
$countAsks = 0;
for ($i=0; $i < sizeof($data_Asks['asks']); $i++) { 
	$countAsks += $data_Asks['asks'][$i]['amount'];
}
// echo $countAsks;

// Longs
$countBids = 0;
for ($i=0; $i < sizeof($data_Bids['bids']); $i++) { 
	$countBids += $data_Bids['bids'][$i]['amount'];
}
// echo $countBids;

// ==================================================== BTC price
// API URL
$json_url = "https://index-api.bitcoin.com/api/v0/price/usd";
// get JSON data
$json = file_get_contents($json_url);
// convert json to array format
$data = json_decode($json, TRUE);

// ==================================================== Display result
echo "<br>";
echo "<div class='row justify-content-center'><div class='col-md-12' align='center'>";
echo "<div class='longsShortsBorder'>";

echo "<a title='Go to BitFinex' target='_blank' href='#'>
		<div class='bitfinexLogo'>
			<img alt='BitFinex' src='http://www.freelogovectors.net/wp-content/uploads/2019/01/bitfinex-logo.png' />
		</div>
	  </a>";
echo "<span class='green'>Longs: &#36;" . number_format(($countBids * $data['price']) / 100);
echo "</span><span class='strong'> " . round( ($countBids * 100) / ($countBids + $countAsks), 2 ) . "&#37;</span><br>";

echo "<span class='red'> Shorts: &#36;" . number_format(($countAsks * $data['price']) / 100) ;
echo "</span><span class='strong'> " . round( ($countAsks * 100) / ($countBids + $countAsks), 2 ) . "&#37;</span><br>";

echo "</div></div></div>";


