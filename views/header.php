<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Get title from ajax.js -->
    <title><?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <!-- Description -->
    <meta name="description" content="Top 100 cryptocurrencies; Bitcoin Shorts vs Longs; Latest Crypto News"/>
    <!-- Favicon -->
    <link rel="icon" href="../img/favicon.png" type="image/png" />
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=yes"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- For IE 9 support -->
    <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
        <script src="js/css3-mediaqueries.js"></script>
    <![endif]-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Ajax -->
    <script type="text/javascript" src="../js/ajax.js"></script>
</head>

<body>
    <!-- =================================== HEADER =================================== -->
    <header id="header">
        <div class="container header-border">
            <h1>
                <a href="../index.php" title="Go back to HOME page">
                    <img src="../img/LogoRegular.png" alt="NovaCrypto">
                </a>
            </h1>
            <!-- ============== Main Menu ============== -->
            <nav id="main-menu" class="main-menu">
                <ul>
                    <li><a href="https://www.binance.com/?ref=27666368" title="Go to Binance.com" class="trade_link btn" target="_blank">Trade</a></li>
                    <li><a href="#BitcoinShortsLongsAll" title="Go to Bitcoin Longs vs Shorts" class="longsShorts_link btn mobile_remove">Bitcoin Longs vs Shorts</a></li>
                    <li><a href="#news" title="Go to latest news" class="news_link btn">Lates News</a></li>
                </ul>
            </nav>
            <!-- Mobile menu icon -->
            <div class="hamburger-wrapper">
                <div class="hamburger"><i class="fas fa-bars"></i></div>
            </div>
            <!-- ============== Mobile Menu ============== -->
            <nav class="mobile-menu">
                <img src="../img/LogoRegular.png" alt="NovaCrypto" class="mobile-logo">
                <!-- Mobile menu icon -->
                <div class="hamburger-wrapper">
                    <div class="hamburger"><i class="fas fa-bars"></i></div>
                </div>
                <ul>
                    <li><a href="../index.php" title="Go to Home page"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="../views/coinmTop100.php" title="Top 100 Cryptocurrencies"><i class="fas fa-list-ol"></i>Top 100 Cryptocurrencies</a></li>
                    <li><a href="https://www.binance.com/?ref=27666368" title="Go to Binance.com"  target="_blank"><i class="fas fa-landmark"></i>Cryptocurrency Exchange (Binance)</a></li>
                    <li><a href="#BitcoinShortsLongsAll" title="Go to Bitcoin Longs vs Shorts" class="longsShorts_mobile_link"><i class="fas fa-chart-line"></i>Bitcoin Longs vs Shorts</a></li>
                    <li>
                        <?php if ($page_title == "NovaCrypto"){ echo "<a href='#news' title='Go to latest news' class='news_mobile_link'><i class='far fa-newspaper'></i>Lates News</a>";
                        }else{ echo "<a href='../index.php/#news' title='Go to latest news' class='news_mobile_link'><i class='far fa-newspaper'></i>Lates News</a>";} ?>
                    </li>
                    <li><a href="https://www.linkedin.com/in/artem-nahornyi/" title="Go to LinkedIn"><i class="fas fa-address-book"></i>Contact</a></li>
                </ul>
            </nav>
            <!-- BTC live price -->
            <div id="btc"></div>
        </div>
    </header>


