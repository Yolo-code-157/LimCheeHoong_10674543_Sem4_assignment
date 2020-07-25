<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Music</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Mixtape template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
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
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
			<div class="home_container">
				<div class="home_content text-center">
					<div class="home_subtitle">Just us</div>
					<div class="home_title">Discography</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Discs -->

	<div class="discs">
		<div class="container">
			<div class="row discs_row">
				
				<!-- Disc -->
				<div class="col-xl-4 col-md-6">
					<div class="disc">
						<a href="single1.php">
							<div class="disc_image"><img src="images/camila1.jpg" alt="https://unsplash.com/@tanelah"></div>
							<div class="disc_container">
								<div>
									<div class="disc_content_1">
										<div class="disc_title">Calima Cabello</div>
										<div class="disc_subtitle">Mixtape</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<!-- Disc -->
				<div class="col-xl-4 col-md-6">
					<div class="disc">
						<a href="single2.php">
							<div class="disc_image"><img src="images/lipa1.jpg" alt="https://unsplash.com/@kasperrasmussen"></div>
							<div class="disc_container">
								<div>
									<div class="disc_content_2 d-flex flex-column align-items-center justify-content-center">
										<div>
											<div class="disc_title">Dua Lipa</div>
											<div class="disc_subtitle">Mixtape</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<!-- Disc -->
				<div class="col-xl-4 col-md-6">
					<div class="disc">
						<a href="single3.php">
							<div class="disc_image"><img src="images/billie1.jpg" alt="https://unsplash.com/@photones11"></div>
							<div class="disc_container">
								<div>
									<div class="disc_content_3">
										<div>
											<div class="disc_title">Billie Ellish</div>
											<div class="disc_subtitle">Mixtape</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<!-- Disc -->
				<div class="col-xl-4 col-md-6">
					<div class="disc">
						<a href="single4.php">
							<div class="disc_image"><img src="images/khalid1.jpg" alt="https://unsplash.com/@rexcuando"></div>
							<div class="disc_container">
								<div>
									<div class="disc_content_4 d-flex flex-column align-items-start justify-content-end">
										<div class="text-left">
											<div class="disc_title">Mixtape</div>
											<div class="disc_subtitle">Khalid</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<!-- Disc -->
				<div class="col-xl-4 col-md-6">
					<div class="disc">
						<a href="single5.php">
							<div class="disc_image"><img src="images/mello1.jpg" alt="https://unsplash.com/@alicemoore"></div>
							<div class="disc_container">
								<div>
									<div class="disc_content_5">
										<div class="disc_title">Alone</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<!-- Disc -->
				<div class="col-xl-4 col-md-6">
					<div class="disc">
						<a href="single6.php">
							<div class="disc_image"><img src="images/shawn1.jpg" alt="https://unsplash.com/@arstyy"></div>
							<div class="disc_container">
								<div>
									<div class="disc_content_6">
										<div class="disc_title">Shawn Mendes</div>
										<div class="disc_subtitle">Mixtape</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Artist -->

	<div class="artist">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/avril.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">

				<!-- Artist Content -->
				<div class="col-lg-7 offset-lg-5">
					<div class="artist_content">
						<div class="section_title_container">
							<div class="section_subtitle">Album: Head Above Water</div>
							<div class="section_title"><h1>Avril Lavigne</h1></div>
						</div>
						<div class="artist_text">
							<p>Avril Lavigne has released a new single: an emotionally raw piano ballad called "Head Above Water."<br>
							The singer revealed she wrote the song during her scary battle with Lyme disease and said that the lyrics are basically a prayer to God asking for help as she tries to get through a difficult time in her life.
							<br><br>"God, keep my head above water/Don't let me drown, it gets harder/I'll meet you there at the altar/As I fall down to my knee, don't let me drown," Lavigne sings on the chorus.
							The singer explained the story behind the lyrics in a statement: "One night I thought I was dying, and I had accepted that I was going to die. My mom laid with me in bed and held me. I felt like I was drowning. 
							Under my breath, I prayed, 'God, please help to keep my head above the water.' In that moment, the songwriting of this album began."
							</p>
						</div>
						<div class="artist_sig"><img src="images/sig.png" alt=""></div>
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

	<!-- Milestones -->

	<div class="milestones">
		<div class="milestones_container">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/milestones.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row milestones_row">
					
					<!-- Milestone -->
					<div class="col-xl-3 col-md-6 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon"><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="298" data-sign-after="k">0</div>
								<div class="milestone_text">Albums sold</div>
							</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-xl-3 col-md-6 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon"><img src="images/icon_2.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="183">0</div>
								<div class="milestone_text">Live Concerts</div>
							</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-xl-3 col-md-6 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="37">0</div>
								<div class="milestone_text">Awards won</div>
							</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-xl-3 col-md-6 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon"><img src="images/icon_4.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="14">0</div>
								<div class="milestone_text">New Singles</div>
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
<script src="js/about.js"></script>
</body>
</html>