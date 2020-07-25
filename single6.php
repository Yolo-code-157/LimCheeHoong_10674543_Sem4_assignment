<!DOCTYPE html>
<html lang="en">
<head>
<title>Artist: Shawn Mendes</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Mixtape template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/single.css">
<link rel="stylesheet" type="text/css" href="styles/single_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->
	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-center">
			<div class="logo"><a href="index.php">Mixtape</a></div>
			<div class="log_reg">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="signup.php">Register</a></li>
				</ul>
				
			</div>
			
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="index.php">Home</a></li>
					<li class="active"><a href="music.php">Music</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
			
	<?php include 'header.php';?>
	
	<!-- Home -->

	<div class="home">
		<div class="home_inner">
			<!-- Image artist: https://unsplash.com/@yoannboyer -->
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/single.jpg" data-speed="0.8"></div>
			<div class="home_container">
				<div class="home_content text-center">
					<div class="home_subtitle">Just us</div>
					<div class="home_title">Shawn Mendes</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Single -->

	<div class="single">
		<div class="container">
			<div class="row">
				
				<!-- Single Info -->
				<div class="col-lg-5">
					<div class="single_info">
						<div class="single_image"><img src="images/shawn.jpg" alt=""></div>
						<div class="single_info_list">
							<ul>
								<li><span>Release date: </span>25 August, 2017</li>
								<li><span>Tags: </span>chill, techno, electronic</li>
								<li><span>Producers: </span>Michael Smith, Jenna Williams</li>
								<li><span>No of songs: </span>12</li>
							</ul>
						</div>
						<div class="logo_list d-flex flex-row align-items-center justify-content-start flex-wrap">
							<div><a href="https://www.amazon.com/Shawn-Mendes/e/B00M79FELW/ref=ntt_art_sim_3_1"><img src="images/logo_1.png" alt=""></a></div>
							<div><a href="https://soundcloud.com/officialshawnmendes"><img src="images/logo_2.png" alt=""></a></div>
							<div><a href="https://music.apple.com/us/artist/shawn-mendes/890403665"><img src="images/logo_3.png" alt=""></a></div>
							<div><a href="https://open.spotify.com/artist/7n2wHs1TKAczGzO7Dd2rGr"><img src="images/logo_4.png" alt=""></a></div>
						</div>
					</div>
				</div>

				<!-- Single Content -->
				<div class="col-lg-7 single_content_col">
					<div class="single_content">
						<div class="single_text">
							<p>Shawn Mendes is a Canadian singer and songwriter. He gained a following in 2013, posting song covers on the video-sharing application Vine. The following year, he caught the attention of artist manager Andrew Gertler and Island Records A&R Ziggy Chareton, which led to him signing a deal with the record label. He has since released three studio albums, headlined three world tours, and received several awards.<br><br>
Mendes released his self-titled debut EP (2014) and his debut studio album Handwritten (2015), whose single "Stitches" reached number one in the United Kingdom and the top 10 in the United States and Canada. He then released his second studio album Illuminate (2016), whose singles "Treat You Better" and "There's Nothing Holdin' Me Back" reached the top 10 in several countries. His self-titled third studio album (2018) was supported by the lead single "In My Blood". 
All three albums debuted atop the US Billboard 200, with the first one making Mendes one of five artists ever to debut at number one before the age of 18 and the third one making him the third-youngest artist to achieve three number one albums. In 2017, Mendes became the first artist to land three number-one singles on the Billboard Adult Contemporary chart before turning 20 years old. In 2018, he became the first artist to achieve four number-one singles on the Adult Pop Songs chart before the age of 20 as well. 
In 2019, he released the hit singles "If I Can't Have You" and "Señorita", with the latter peaking at number one on the US Billboard Hot 100.<br><br>
Among his accolades, Mendes has won 13 SOCAN awards, 10 MTV Europe Music Awards, eight Juno Awards, eight iHeartRadio MMVAs, two American Music Awards, and received three Grammy Award nominations. 
In 2018, Time named Mendes as one of the 100 most influential people in the world on their annual list.</p></div>
						<div class="single_players">
							
							<!-- Single Player -->
							<div class="single_player_container d-flex flex-column align-items-start justify-content-center">
								<div class="single_player">
									<div id="jplayer_1" class="jp-jplayer"></div>
									<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
										<div class="jp-type-single">
											<div class="player_details d-flex flex-row align-items-center justify-content-start">
												<div class="jp-details">
													<div>playing</div>
													<div class="jp-title" aria-label="title">&nbsp;</div>
												</div>
												<div class="jp-controls-holder ml-auto">
													<button class="jp-play" tabindex="0"></button>
												</div>
											</div>
											<div class="player_controls">
												<div class="jp-gui jp-interface d-flex flex-row align-items-center justify-content-start">
													<div class="jp-controls-holder time_controls d-flex flex-row align-items-center justify-content-start">
														<div><div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div></div>
														<div class="jp-progress">
															<div class="jp-seek-bar">
																<div class="jp-play-bar"></div>
															</div>
														</div>
														<div><div class="jp-duration ml-auto" role="timer" aria-label="duration">&nbsp;</div></div>
													</div>
													<div class="jp-volume-controls d-flex flex-row align-items-center justify-content-start ml-auto">
														<button class="jp-mute" tabindex="0"></button>
														<div class="jp-volume-bar">
															<div class="jp-volume-bar-value"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="jp-no-solution">
												<span>Update Required</span>
												To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Video -->

	<div class="video">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="video_container">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/Pkh8UtuejGw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php include 'footer.php';?>
	
	</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="plugins/jPlayer/jplayer.playlist.min.js"></script>
<script src="plugins/fit-vids/jquery.fitvids.js"></script>
<script src="js/single.js"></script>
</body>
</html>