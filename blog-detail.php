<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealMadrid FC</title>

    <!-- Css Files -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/slick-slider.css" rel="stylesheet">
    <link href="css/fancybox.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--/!--[if lte IE 9]--> <link rel="stylesheet" href="../../css/chosen.html"> <!--[endif]--//-->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
    <!--// Main Wrapper \\-->
    <div class="sportsmagazine-main-wrapper">

        <!--// Header \\-->
        <header id="sportsmagazine-header" class="sportsmagazine-header-one">
            

            <!--// MainSection \\-->
            <div class="sportsmagazine-main-header">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-2"><a href="index.php" class="sportsmagazine-logo"><img src="images/logo-2.png" alt=""></a></aside>
                        <div class="col-md-10">
                            <div class="sportsmagazine-right-section">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                      </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                      <ul class="nav navbar-nav">
                                        <li class="active"><a href="index.php">Home</a>
                                        </li>
                                        <li><a href="player-grid.php">PLAYERS SQUAD</a>
                                            <ul class="sportsmagazine-dropdown-menu">
                                                <li><a href="player-grid.php">Players Squad</a>
                                                </li>
                                                <li><a href="player-detail.php">Player Detail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-grid.php">CLUB NEWS</a>
                                            <ul class="sportsmagazine-dropdown-menu">
                                                <li><a href="blog-grid.php">News Blog</a>
                                                </li>
                                                <li><a href="blog-detail.php">Blog Detail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="gallery.php">GALLERY</a>
                                        </li>
                                        </li>
                                      </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainSection \\-->

        </header>
        <!--// Header \\-->

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content sportsmagazine-main-contentminus">
            
            <!--// Main Section \\-->
            <div class="sportsmagazine-main-section sportsmagazine-thumb">
                <span class="thumb-transparent"></span>
                <div class="sportsmagazine-thumb-text">

                    <div class="container">
                        <div class="row">
<?php 
$url = "https://www.fifa.com/rss-feeds/news";
	
$xml=simplexml_load_file($url);

$item=$xml->channel->item[1];
	$title = $item->title;
	$link = $item->link;
	$pubDate = $item->pubDate;
	$image = $item->children('media', True)->content->attributes();
	$author = $item->children("dc", true);
	$category = $item->category;
	$content = $item->children("content", true);
?>

                            <div class="col-md-12">
                                <h2><?php echo $title;?></h2>
                                <ul class="sportsmagazine-thumb-option">
                                    <li><i class="fa fa-calendar-o"></i> <?php echo $pubDate;?></li>
                                    <li><i class="fa fa-user"></i> <?php echo $category;?></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">

                        <div class="col-md-9">
                            <div class="sportsmagazine-rich-editor">
                                <p><?php echo $content;?></p>
                            </div>

                        </div>
                        

					</div>
				</div>
			</div>
			<!--// Main Section \\-->
                            </ul>
                            <ul class="sportsmagazine-info-list">


	<!-- jQuery (necessary for JavaScript plugins) -->
	<script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/slick.slider.min.js"></script>
    <script type="text/javascript" src="script/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="script/fancybox.pack.js"></script>
    <script type="text/javascript" src="script/isotope.min.js"></script>
    <script type="text/javascript" src="script/progressbar.js"></script>
    <script type="text/javascript" src="script/counter.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="script/functions.js"></script>

  </body>

</html>