<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Artist: Camila Cabello</title>
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
					<div class="home_title">Camila Cabello</div>
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
						<div class="single_image"><img src="images/camila.jpg" alt=""></div>
						<div class="single_info_list">
							<ul>
								<li><span>Release date: </span>25 August, 2017</li>
								<li><span>Tags: </span>chill, techno, electronic</li>
								<li><span>Producers: </span>Michael Smith, Jenna Williams</li>
								<li><span>No of songs: </span>12</li>
							</ul>
						</div>
						<div class="logo_list d-flex flex-row align-items-center justify-content-start flex-wrap">
							<div><a href="https://www.amazon.com/Camila-Cabello/e/B078MLYLY3/ref=ntt_art_sim_1_1"><img src="images/logo_1.png" alt=""></a></div>
							<div><a href="https://soundcloud.com/camilacabello"><img src="images/logo_2.png" alt=""></a></div>
							<div><a href="https://music.apple.com/us/artist/camila-cabello/935727853"><img src="images/logo_3.png" alt=""></a></div>
							<div><a href="https://open.spotify.com/artist/4nDoRrQiYLoBzwC5BhVJzF"><img src="images/logo_4.png" alt=""></a></div>
						</div>
					</div>
				</div>

				<!-- Single Content -->
				<div class="col-lg-7 single_content_col">
					<div class="single_content">
						<div class="single_text">
							<p>Camila Cabello is a Cuban-American singer and songwriter. She rose to prominence as a member of the girl group Fifth Harmony, formed on The X Factor USA in 2012, signing a joint record deal with Syco Music and Epic Records. While in Fifth Harmony, Cabello began to establish herself as a solo artist with the release of the collaborations "I Know What You Did Last Summer" with Shawn Mendes, and "Bad Things" with Machine Gun Kelly, the latter reaching number four on the US Billboard Hot 100. After leaving the group in late 2016, Cabello released several other collaborations, including "Hey Ma" by Pitbull and J Balvin for The Fate of the Furious soundtrack, and her debut solo single "Crying in the Club". <br><br>

Cabello's debut studio album, Camila (2018), reached number one on the Billboard 200 chart. The Latin music-influenced pop album was well received by critics, and received a Platinum certification by the Recording Industry Association of America (RIAA). Its lead single "Havana" topped the charts in several countries including the US and UK, and follow-up single "Never Be the Same" reached the top 10 in multiple countries. Cabello's 2019 duet with Mendes, "Señorita", became her second single to top the Billboard Hot 100. Her second studio album, Romance (2019), peaked at number three on the Billboard 200 chart and number one in Canada. Cabello is set to star in an upcoming film adaptation of Cinderella (2021), for Sony Pictures. <br><br>

Cabello has amassed billions of streams on music platforms. She has the best-selling digital single of 2018 according to International Federation of the Phonographic Industry (IFPI). Cabello has won many awards throughout her career, including two Latin Grammy Awards, five American Music Awards, and one Billboard Music Award. She has also received three Grammy Award nominations.</p></div>
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
						<iframe width="560" height="315" src="https://www.youtube.com/embed/BQ0mxQXmLsk" 
						frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
