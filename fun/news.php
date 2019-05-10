<?php
// API URL
$json_url = "https://min-api.cryptocompare.com/data/v2/news/?lang=EN";
// get JSON data
$json = file_get_contents($json_url);
// convert json to array format
$data = json_decode($json);


echo "<h2><span class='underline'>Latest Crypto News<span></h2>";
echo "<div class='row'>";
for ($x = 0; $x < 12; $x++) {
	echo "<div class='col-md-4 col-sm-6 col-12'><div class='article col-8 justify-content-center'>";
		echo "<h3> <a href=' " . $data->Data[$x]->url  . " ' target='_blank' > " . $data->Data[$x]->title . "</a></h3>";
		echo "<p>" . $data->Data[$x]->body . "</p>";
		echo "<img src=' " . $data->Data[$x]->imageurl  . " ' >";
		// echo $data->Data[$x]->published_on . "<br>";
	echo "</div></div>";
}
echo "</div>";

?>
