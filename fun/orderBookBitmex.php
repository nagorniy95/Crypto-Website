<?php
// API URL
$json_url = "https://www.bitmex.com/api/v1/orderBook/L2?symbol=XBTUSD&depth=0";
// get JSON data
$json = file_get_contents($json_url);
// convert json to array format
$data = json_decode($json, TRUE);

// ======================================= Order book total
$count = 0;
foreach ($data as $key => $value) {
	$count += $data[$key]['size'];
}

// ======================================= Order book Buy

$countBuy = 0;

foreach ($data as $key => $value) {
	if ($data[$key]['side'] == "Buy") {
		$countBuy += $data[$key]['size'];
	}
}

// ======================================= Order book Sell

$countSell = 0;

foreach ($data as $key => $value) {
	if ($data[$key]['side'] == "Sell") {
		$countSell += $data[$key]['size'];
	}
}
// display data
echo "<h2><span class='underline'>Bitcoin Longs vs Shorts<span></h2>";
echo "<div class='row justify-content-center'><div class='col-md-12' align='center'>";
echo "<div class='longsShortsBorder'>";

echo "<span class='BitmexTradeLink'>
		<a title='Go to BitMex' target='_blank' href='https://www.bitmex.com/register/pIDb2V'>Trade Now</a>
	  </span>";
	  
echo "<a title='Go to BitMex' target='_blank' href='https://www.bitmex.com/register/pIDb2V'>
		<div class='bitmexLogo'>
			<img alt='BitMex' src='https://www.bitmex.com/img/bitmex-logo-alt.png' />
		</div>
	 </a>";
echo "<div class='orderBook'><span class='green'>Longs: &#36;" . number_format($countBuy) . "</span> ";
echo "<span class='strong'> " . round( ($countBuy * 100) / $count, 2 ) . "&#37;</span><br>";

echo "<span class='red'>Shorts: &#36;" . number_format($countSell) . "</span> ";
echo "<span class='strong'> " . round( ($countSell * 100) / $count, 2 ) . "&#37;</span></div>";

echo "</div></div></div>";


?>