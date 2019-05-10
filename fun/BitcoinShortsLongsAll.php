<?php
// ===================================================== include BitMex data (for ajax)
include 'orderBookBitmex.php';
// ===================================================== include BitFinex data(for ajax)
include 'orderBookBitfinex.php';

echo "<br>";

// ===================================================== Display Total shorts vs longs
echo "<div class='row justify-content-center'><div class='col-md-12' align='center'>";
echo "<div class='longsShortsBorder'>";

echo "<h3>TOTAL <i class='fas fa-chart-line'></i></h3>"; // Title
$bids = ($countBids * $data['price']) / 100;
echo "<div class='orderBook'><span class='green'>Longs: &#36;" . number_format(($countBuy + $bids)) . "</span> "; // Total Longs
// percentage
echo "<span class='strong'> " . round( ( ($countBuy + $bids) * 100) / ($count + ( ($countBids + $countAsks) * $data['price'] ) / 100 ), 2 ) . "&#37;</span><br>"; 

$asks = ($countAsks * $data['price']) / 100;
echo "<div class='orderBook'><span class='red'>Shorts: &#36;" . number_format(($countSell + $asks)) . "</span> "; // Total Shorts
// percentage
echo "<span class='strong'> " . round( (($countSell + $asks ) * 100) / ($count + ( ($countBids + $countAsks) * $data['price'] ) / 100 ), 2 ) . "&#37;</span></div>";

echo "</div></div></div>";


?>