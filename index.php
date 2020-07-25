<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Mixtape</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Mixtape template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="music.php">Music</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>

	<?php include 'header.php';?>

	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/gravity.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<div class="home_content text-center">
								<div class="home_subtitle">New Album Release</div>
								<div class="home_title"><h1>Gravity</h1></div>
								<div class="home_link"><a href="https://www.youtube.com/watch?v=xUy3eWYBbKo">Listen on YouTube</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/ascend.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<div class="home_content text-center">
								<div class="home_subtitle">New Album Release</div>
								<div class="home_title"><h1>ASCEND</h1></div>
								<div class="home_link"><a href="https://www.youtube.com/watch?v=iInP56S3mb8&list=OLAK5uy_l0EQmItW0hIlXpMG-ZB7N3t5CHFmkjnbQ">Listen on YouTube</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/avicii.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<div class="home_content text-center">
								<div class="home_subtitle" style="color:black;">New Album Release</div>
								<div class="home_title" style="color:black;"><h1>Avīci (01)</h1></div>
								<div class="home_link"><a href="https://www.youtube.com/watch?v=WRz2MxhAdJo&list=PLAADAiKP7p2Mlibl6Z4xk1c59_CZsi2rR">Listen on YouTube</a></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Featured Album -->

	<div class="featured_album">
		<div class="background_image featured_background" style="background-image:url(images/featured.png)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6">
					<div class="section_title_container">
						<div class="section_subtitle">Events</div>
						<div class="section_title"><h1>Featured Album</h1></div>
					</div>
				</div>
			</div>
			<div class="row featured_row row-lg-eq-height">

				<!-- Featured Album Image -->
				<div class="col-md-6">
					<div class="featured_album_image">
						<div class="image_overlay"></div>
						<div class="background_image" style="background-image:url(images/featured_album.jpg)"></div>
						<!-- <img src="images/featured_album.jpg" alt=""> -->
					</div>
				</div>

				<!-- Featured Album Player -->
				<div class="col-md-6 featured_album_col">
					<div class="featured_album_player_container d-flex flex-column align-items-start justify-content-center">
						<div class="featured_album_player">
							<div class="featured_album_title_bar d-flex flex-row align-items-center justify-content-start">
								<div class="featured_album_title_container">
									<div class="featured_album_artist">No Copyright Songs</div>
									<div class="featured_album_title">NCR Nostalgic</div>
								</div>
								<div class="featured_album_link ml-auto"><a href="https://www.youtube.com/user/NoCopyrightSounds">Check more here</a></div>
							</div>
							<div id="jplayer_1" class="jp-jplayer"></div>
							<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
								<div class="jp-type-playlist">
									<div class="jp-playlist">
										<ul>
											<li></li>
										</ul>
									</div>
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

	<!-- Shows -->

	<div class="shows">
		<div class="container">
			<div class="row" style="z-index:10;">
				<div class="col">
					<div class="section_title_container">
						<div class="section_subtitle">Events</div>
						<div class="section_title"><h1>Upcoming Shows</h1></div>
					</div>
				</div>
			</div>
			<div class="row shows_row">
				
				<!-- Shows List -->
				<div class="col-lg-8 order-lg-1 order-2 shows_list_col">
					<div class="shows_list_container">
						<ul class="shows_list">

							<!-- Show -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div><div class="show_date">18/07</div></div>
								<div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
									<div class="show_name"><a href="https://electriccastle.ro/">Electric Castle Festival</a></div>
									<div class="show_location">Cluj, Romania</div>
								</div>
								<div class="ml-auto"><div class="show_shop trans_200"><a href="https://electriccastle.ro/">Buy Tickets</a></div></div>
							</li>

							<!-- Show -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div><div class="show_date">20/07</div></div>
								<div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
									<div class="show_name"><a href="https://ultramusicfestival.com/">Ultra Music Festival</a></div>
									<div class="show_location">Miami, USA</div>
								</div>
								<div class="ml-auto"><div class="show_shop trans_200"><a href="https://ultramusicfestival.com/">Buy Tickets</a></div></div>
							</li>

							<!-- Show -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div><div class="show_date">03/08</div></div>
								<div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
									<div class="show_name"><a href="#">Untold Festival</a></div>
									<div class="show_location">Cluj, Romania</div>
								</div>
								<div class="ml-auto"><div class="show_shop trans_200"><a href="https://untold.com/">Buy Tickets</a></div></div>
							</li>

							<!-- Show -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div><div class="show_date">11/08</div></div>
								<div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
									<div class="show_name"><a href="http://sunkissedfresno.com">Sun Kissed Festival</a></div>
									<div class="show_location">Paris, France</div>
								</div>
								<div class="ml-auto"><div class="show_shop trans_200"><a href="http://sunkissedfresno.com">Buy Tickets</a></div></div>
							</li>

							<!-- Show -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div><div class="show_date">18/08</div></div>
								<div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
									<div class="show_name"><a href="#">Spanish Festival</a></div>
									<div class="show_location">Madrid, Spain</div>
								</div>
								<div class="ml-auto"><div class="show_shop trans_200"><a href="https://www.festicket.com/magazine/discover/best-music-festivals-spain/">Buy Tickets</a></div></div>
							</li>

							<!-- Show -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div><div class="show_date">25/08</div></div>
								<div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
									<div class="show_name"><a href="#">Vikings Festival</a></div>
									<div class="show_location">Oslo, Norway</div>
								</div>
								<div class="ml-auto"><div class="show_shop trans_200"><a href="https://jorvikvikingfestival.co.uk/">Buy Tickets</a></div></div>
							</li>

						</ul>
					</div>
				</div>

				<!-- Shows Image -->
				<div class="col-lg-4 order-lg-2 order-1">
					<div class="shows_image">
						<div class="image_overlay"></div>
						<img src="images/shows.jpg" alt="https://unsplash.com/@anthonydelanoix">
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Artist -->

	<div class="artist">
		<div class="container">
			<div class="row">

				<!-- Artist Image -->
				<div class="col-lg-4 artist_image_col">
					<div class="artist_image">
						<img src="images/tim.jpg" alt="">
					</div>
				</div>

				<!-- Artist Content -->
				<div class="col-lg-7 offset-lg-1">
					<div class="artist_content">
						<div class="section_title_container">
							<div class="section_subtitle">Artist</div>
							<div class="section_title"><h1>Avicii (Tim Bergling)</h1></div>
						</div>
						<div class="artist_text">
							<p>Today marks the two year anniversary since the iconic Swedish DJ and producer Avicii passed away. 
							It's been two years since the EDM industry woke up to the saddest news they've heard in years. 
							The dance music legend Tim Bergling, better known by his stage name Avicii, passed away at just 28 years of age.</p>
							</div>
						<div class="artist_sig"><img src="images/aviciiSig.jpg" alt="" width="200px" height="200px"></div>
						<div class="single_player_container d-flex flex-column align-items-start justify-content-center">
							<div class="single_player">
								<div id="jplayer_2" class="jp-jplayer"></div>
								<div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
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
<script src="js/custom.js"></script>
</body>
</html>