$(document).ready(function(){

	// When the user scrolls down 1100px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
	    document.getElementById("myBtn").style.display = "block";
	  } else {
	    document.getElementById("myBtn").style.display = "none";
	  }
	}

	btcData();
	BitcoinShortsLongsAll();
	coinmData();
	newsData();
	fetch();
	fetchLong();
});

// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	  	 $('html, body').animate({
	         scrollTop: $("#header").offset().top
	     }, 1000);
	}

// default previous value (global)
var oldval = 0;

// ===================================================== Bitcoin.com Data
function btcData(){
	$.ajax({

		url: "../fun/btc.php",
		data: { value1: 25},
		success: function(data) {

			$("#btc").children().remove();

			if(data < oldval){
				result = "<span class='grey'>BTC price</span>  <span id='change' class='red'> " + data + " <i class='fas fa-arrow-down'></i></span>";
			} else if(data > oldval){
				result = "<span class='grey'>BTC price</span>  <span id='change' class='green'> " + data + " <i class='fas fa-arrow-up'></i></span>";
			}else{}

			// previous value
			oldval = data;

			$("#btc").html(result);		
			// $("#title_btc").html("NovaCrypto " + data);
		}
	});
}

// ===================================================== CoinMarketCap Data
function coinmData(){
	$.ajax({

		url: "../fun/coinm.php",
		success: function(data) {
			$("#coinm").children().remove();
			$("#coinm").html(data);			
		}
	});
}

// ===================================================== Crypto News
function newsData(){
	$.ajax({

		url: "../fun/news.php",
		success: function(data) {
			$("#news").children().remove();
			$("#news").html(data);			
		}
	});
}

// ===================================================== Order Book Bitmex
function BitcoinShortsLongsAll(){
	$.ajax({

		url: "../fun/BitcoinShortsLongsAll.php",
		success: function(data) {
			$("#BitcoinShortsLongsAll").children().remove();
			$("#BitcoinShortsLongsAll").html(data);			
		}
	});
}

// ===================================================== Update Time
function fetch(){
	setTimeout(function(){
	btcData();
	fetch();
	}, 3000); // update every 3 sec
}

function fetchLong(){
	setTimeout(function(){
	BitcoinShortsLongsAll();
	coinmData();
	newsData();
	fetchLong();
	}, 1800000); // update every 30 min
}

