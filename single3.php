<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Artist: Billie Ellish</title>
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
					<div class="home_title">Billie Ellish</div>
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
						<div class="single_image"><img src="images/billie.jpg" alt=""></div>
						<div class="single_info_list">
							<ul>
								<li><span>Release date: </span>25 August, 2017</li>
								<li><span>Tags: </span>chill, techno, electronic</li>
								<li><span>Producers: </span>Michael Smith, Jenna Williams</li>
								<li><span>No of songs: </span>12</li>
							</ul>
						</div>
						<div class="logo_list d-flex flex-row align-items-center justify-content-start flex-wrap">
							<div><a href="https://www.amazon.com/Billie-Eilish/e/B01EO1G2IE/ref=ntt_art_sim_8_1"><img src="images/logo_1.png" alt=""></a></div>
							<div><a href="https://soundcloud.com/billieeilish"><img src="images/logo_2.png" alt=""></a></div>
							<div><a href="https://music.apple.com/us/artist/billie-eilish/1065981054"><img src="images/logo_3.png" alt=""></a></div>
							<div><a href="https://open.spotify.com/artist/6qqNVTkY8uBg9cP3Jd7DAH"><img src="images/logo_4.png" alt=""></a></div>
						</div>
					</div>
				</div>

				<!-- Single Content -->
				<div class="col-lg-7 single_content_col">
					<div class="single_content">
						<div class="single_text">
							<p>Billie Eilish is an American singer and songwriter. She first gained attention in 2015 when she uploaded the song "Ocean Eyes" to SoundCloud, which was subsequently released by the Interscope Records subsidiary Darkroom. The song was written and produced by her brother Finneas, with whom she collaborates on music and live shows. Her debut EP, Don't Smile at Me (2017), reached the top 15 in the US, UK, Canada, and Australia. <br><br>

Eilish's debut studio album, When We All Fall Asleep, Where Do We Go? (2019), debuted atop the Billboard 200 and became the best-performing album of 2019 in the US.[2] It also reached No. 1 in the UK. The album contains six Billboard Hot 100 top 40 singles: "When the Party's Over", "Bury a Friend", "Wish You Were Gay", "Xanny", "Everything I Wanted",[a] and "Bad Guy", the last of which became her first No. 1 single in the US. In 2020, she performed the theme song "No Time to Die" for the James Bond film of the same name, which became her first to peak at No. 1 in the UK. <br><br>

Her accolades include five Grammy Awards, two American Music Awards, two Guinness World Records, three MTV Video Music Awards, and one Brit Award. She is the youngest person and second person ever to win the four main Grammy categories – Best New Artist, Record of the Year, Song of the Year and Album of the Year – in the same year. In 2019, Time placed her on their inaugural "Time 100 Next" list. Additionally, Eilish is the 23rd biggest artist of the digital singles era, according to RIAA, selling 37.5 million singles in the US alone.</p></div>
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
						<iframe width="560" height="315" src="https://www.youtube.com/embed//DyDfgMOUjCI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
