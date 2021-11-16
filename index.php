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

		<!--// Main Banner \\-->
		<div class="sportsmagazine-banner">

            <!--// Slider \\-->
            <div class="sportsmagazine-banner-one">
                <div class="sportsmagazine-banner-one-layer">
                    <img src="extra-images/1368-480.png" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
															
                                    <div class="sportsmagazine-banner-wrap">
<?php 
$url = "https://www.fifa.com/rss-feeds/news";
	
$xml=simplexml_load_file($url);

$i=$xml->channel->item[0];
	$title = $i->title;
	$link = $i->link;
	$category = $i->category;
	$content=$i->children("content", true)->strong;
	$date = $i->pubDate;
?>
                                        <h1><span><?php echo $category;?></span>  <?php echo $title;?><span><?php echo $date;?></span></h1>
                                        <p><?php echo $content;?></p>
                                        <a href="blog-grid.php" class="sportsmagazine-banner-btn">Read More <span></span></a>
                                    </div>
                                    <div class="sportsmagazine-banner-thumb"> <img src="extra-images/banner-two-thumb-1.png" alt=""> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sportsmagazine-banner-one-layer">
                    <img src="extra-images/1368-480-2.png" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sportsmagazine-banner-wrap">
									<?php 
$url = "https://www.fifa.com/rss-feeds/news";
	
$xml=simplexml_load_file($url);

$i=$xml->channel->item[1];
	$title = $i->title;
	$link = $i->link;
	$category = $i->category;
	$content=$i->children("content", true)->strong;
	$date = $i->pubDate;
?>
                                        <h1><span><?php echo $category;?></span>  <?php echo $title;?><span><?php echo $date;?></span></h1>
                                        <p><?php echo $content;?></p>
                                        <a href="blog-grid.php" class="sportsmagazine-banner-btn">Read More <span></span></a>
                                    </div>
                                    <div class="sportsmagazine-banner-thumb"> <img src="extra-images/banner-two-thumb-1.png" alt=""> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Slider \\-->
            
        </div>
		<!--// Main Banner \\-->

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">
						

                        <!--// Content \\-->
                        <div class="col-md-8">
                            <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Featured News</h2></div> <!--// Fancy Title \\-->
                            <!--// Featured Slider \\-->
                            <div class="sportsmagazine-featured-slider">
							
<?php 
$url = "https://www.fifa.com/rss-feeds/news";
	
$xml=simplexml_load_file($url);

foreach($xml->channel->item as $item) {
	$title = $item->title;
	$link = $item->link;
	$pubDate = $item->pubDate;
	$image = $item->children('media', True)->content->attributes();
	$author = $item->children("dc", true);
	$category = $item->category;
	$content=$item->children("content", true)->strong;
	
#	$image=$xml->channel->item[$i]->image->img['src'][0];
#	$image=$item->children("media", true);
#	$image="<img src=\"" . (string)$item->enclosure['url'][0] . "\">";		
?>
                                <div class="sportsmagazine-featured-slider-layer">
                                    <img src='<?php echo $image; ?>' alt="">
                                    <span class="sportsmagazine-black-transparent"></span>
                                    <div class="sportsmagazine-featured-caption">
                                        <h2><?php echo $title; ?></h2>
                                        <span class="sportsmagazine-color"><?php echo $pubDate; ?> / <?php echo $category; ?></span>
                                    </div>
                                </div>
								
<?php }?>

                            </div>
                            <!--// Featured Slider \\-->
                            <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Latest Blogs</h2></div> <!--// Fancy Title \\-->
                            <!--// Blog's \\-->
                            <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                <ul class="row">
<?php 
$url = "https://www.fifa.com/rss-feeds/news";
	
$xml=simplexml_load_file($url);
$c=0;
foreach($xml->channel->item as $item) {
	if ($c>=2){break;}
	$title = $item->title;
	$link = $item->link;
	$pubDate = $item->pubDate;
	$image = $item->children('media', True)->content->attributes();
	$author = $item->children("dc", true);
	$category = $item->category;
	$content = $item->children("content", true);
?>
                                    <li class="col-md-6">
                                        <figure>
                                            <a href="blog-detail.php"><img src='<?php echo $image;?>' alt=""></a>
                                            <figcaption>
                                                <span><small>Featured</small></span>
                                                <a href="blog-detail.php" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                            </figcaption>
                                        </figure>
                                        <section>
                                            <h2><a href="blog-detail.php"><?php echo $title;?></a></h2>
                                        </section>
                                        <div class="sportsmagazine-blog-grid-options">
                                            <a href="blog-detail.php" class="sportsmagazine-blog-grid-thumb">Read More >></a>
                                        </div>
                                    </li>
									
<?php
$c++;}
?>
                                </ul>
                            </div>
							

							
                            <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Players squad</h2></div> <!--// Fancy Title \\-->
                            <div class="sportsmagazine-player-slider">
<?php
include "players.php";
?>
                                <div class="sportsmagazine-player-slider-image">
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Mendy_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p1"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p1"]["name"];?></a></h6>
                                                <small><?php echo $players["p1"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Lunin_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p2"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p2"]["name"];?></a></h6>
                                                <small><?php echo $players["p2"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Carvajal_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p3"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p3"]["name"];?></a></h6>
                                                <small><?php echo $players["p3"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Militao_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p4"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p4"]["name"];?></a></h6>
                                                <small><?php echo $players["p4"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Lucas_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p5"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p5"]["name"];?></a></h6>
                                                <small><?php echo $players["p5"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Vinicius_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p6"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p6"]["name"];?></a></h6>
                                                <small><?php echo $players["p6"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Mariano_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p7"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p7"]["name"];?></a></h6>
                                                <small><?php echo $players["p7"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Rodrygo_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p8"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p8"]["name"];?></a></h6>
                                                <small><?php echo $players["p8"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Asensio_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p9"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p9"]["name"];?></a></h6>
                                                <small><?php echo $players["p9"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Benzema_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p10"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p10"]["name"];?></a></h6>
                                                <small><?php echo $players["p10"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Hazard_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p11"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p11"]["name"];?></a></h6>
                                                <small><?php echo $players["p11"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Ramos_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p12"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p12"]["name"];?></a></h6>
                                                <small><?php echo $players["p12"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Valverde_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p13"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p13"]["name"];?></a></h6>
                                                <small><?php echo $players["p13"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Casemiro_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p14"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p14"]["name"];?></a></h6>
                                                <small><?php echo $players["p14"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Lucas_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p15"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p15"]["name"];?></a></h6>
                                                <small><?php echo $players["p15"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Kroos_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p16"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p16"]["name"];?></a></h6>
                                                <small><?php echo $players["p16"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Odriozola_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p18"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p18"]["name"];?></a></h6>
                                                <small><?php echo $players["p18"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="players/Marcelo_550x650.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span><?php echo $players["p19"]["plays"];?></span>
                                            <section>
                                                <h6><a href="player-detail.php"><?php echo $players["p19"]["name"];?></a></h6>
                                                <small><?php echo $players["p19"]["position"];?></small>
                                            </section>
                                        </div>
                                    </div>
                                </div>

                                <div class="sportsmagazine-player-slider-nav">
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span><?php echo $players["p1"]["plays"];?></span>
                                        <section>
                                            <h6><?php echo $players["p1"]["name"];?></h6>
                                            <small><?php echo $players["p1"]["position"];?></small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span><?php echo $players["p2"]["plays"];?></span>
                                        <section>
                                            <h6><?php echo $players["p2"]["name"];?></h6>
                                            <small><?php echo $players["p2"]["position"];?></small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span><?php echo $players["p3"]["plays"];?></span>
                                        <section>
                                            <h6><?php echo $players["p3"]["name"];?></h6>
                                            <small><?php echo $players["p3"]["position"];?></small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span><?php echo $players["p4"]["plays"];?></span>
                                        <section>
                                            <h6><?php echo $players["p4"]["name"];?></h6>
                                            <small><?php echo $players["p4"]["position"];?></small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span><?php echo $players["p5"]["plays"];?></span>
                                        <section>
                                            <h6><?php echo $players["p5"]["name"];?></h6>
                                            <small><?php echo $players["p5"]["position"];?></small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span><?php echo $players["p6"]["plays"];?></span>
                                        <section>
                                            <h6><?php echo $players["p6"]["name"];?></h6>
                                            <small><?php echo $players["p6"]["position"];?></small>
                                        </section>
                                    </div>
                                </div>

                            </div>

                            <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Club Media</h2></div> <!--// Fancy Title \\-->
                            <div class="sportsmagazine-gallery sportsmagazine-fixture-gallery">
                                <ul>
								
<?php 
$url = "https://www.fifa.com/rss-feeds/galleries";

$xml=simplexml_load_file($url);
$c=0;
foreach($xml->channel->item as $item) {
	if ($c>=2){break;}
	$title = $item->title;
	$link = $item->link;
	$pubDate = $item->pubDate;
	$des = $item->description;
	$image = $item->children('media', True)->content->attributes();
	$category = $item->category;
	$content = $item->children("content", true);
	$gallerie = $item->children('media', True)->group;
#	$gallerie = $item->children("media")->group->content;
    foreach($gallerie as $g) {
        $sep = $g->content->attributes()['url'];
?>
								
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="<?php echo $sep;?>" class="fancybox"><img src="<?php echo $sep;?>" alt=""><i class="icon-signs23"></i></a>
											<figcaption>
                                                <h6 style="color:white;"><?php echo $title;?></h6>
                                            </figcaption>
                                        </figure>
                                    </li>
									
<?php
}
}
?>
                                </ul>
                            </div>

                        </div>
                        <!--// Content \\-->

                        <!--// SideBaar \\-->
                        <aside class="col-md-4">
                            
                            <!--// Widget Popular News \\-->
                            <div class="widget widget_popular_news">
                                <div class="sportsmagazine-fancy-title"><h2>Popular News</h2></div>
                                <ul>
<?php 
$url = "https://www.fifa.com/rss-feeds/news";
	
$xml=simplexml_load_file($url);
$c=0;
foreach($xml->channel->item as $item) {
	if ($c>=20)break;
	$title = $item->title;
	$link = $item->link;
	$pubDate = $item->pubDate;
	$image = $item->children('media', True)->content->attributes();
	$author = $item->children("dc", true);
	$category = $item->category;
	$content = $item->children("content", true);
?>
                                    <li>
                                        <span><?php echo ++$c;?></span>
                                        <div class="popular_news_text">
                                            <small><?php echo $category;?></small>
                                            <a href="blog-detail.php"><?php echo $title;?></a>
                                            <time datetime="2008-02-14 20:00"><?php echo $pubDate;?></time>
                                        </div>
                                    </li>
<?php }?>
                                </ul>
                            </div>
                            <!--// Widget Popular News \\-->


                        </aside>
                        <!--// SideBaar \\-->

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->


	<!-- jQuery (necessary for JavaScript plugins) -->
	<script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/slick.slider.min.js"></script>
    <script type="text/javascript" src="script/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="script/fancybox.pack.js"></script>
    <script type="text/javascript" src="script/isotope.min.js"></script>
    <script type="text/javascript" src="script/progressbar.js"></script>
    <script type="text/javascript" src="script/counter.js"></script>
    <script type="text/javascript" src="script/functions.js"></script>

  </body>

</html>