<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Mixtape template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
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
					<li><a href="music.php">Music</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li class="active"><a href="blog.php">Blog</a></li>
				</ul>
			</nav>
			
	<?php include 'header.php';?>
	
	<!-- Home -->

	<div class="home">
		<div class="home_inner">
			<!-- Image artist: https://unsplash.com/@yoannboyer -->
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
			<div class="home_container">
				<div class="home_content text-center">
					<div class="home_subtitle">Just us</div>
					<div class="home_title">The Blog</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				
				<!-- Blog Posts -->
				<div class="col-lg-9">
					<div class="blog_posts">
						
						<!-- Blog Post -->
						<div class="blog_post">
							<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
								<div>July</div>
								<div>26</div>
								<div>2018</div>
							</div>
							<div class="blog_post_image"><img src="images/blog_1.jpg" alt="https://unsplash.com/@stevenerixon"></div>
							<div class="blog_post_title"><h2><a href="#">How to get the best playlist</a></h2></div>
							<div class="blog_post_info">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>by <a href="#">Admin</a></li>
									<li><a href="#">2 Comments</a></li>
								</ul>
							</div>
							<div class="blog_post_text">
								<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post blog_post_audio">
							<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
								<div>July</div>
								<div>26</div>
								<div>2018</div>
							</div>

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
							<div class="blog_post_title"><h2><a href="#">Our song of the month</a></h2></div>
							<div class="blog_post_info">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>by <a href="#">Admin</a></li>
									<li><a href="#">2 Comments</a></li>
								</ul>
							</div>
							<div class="blog_post_text">
								<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>
							</div>

						</div>

						<!-- Blog Post -->
						<div class="blog_post">
							<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
								<div>July</div>
								<div>26</div>
								<div>2018</div>
							</div>
							<div class="blog_post_image"><img src="images/blog_2.jpg" alt="https://unsplash.com/@clesulie"></div>
							<div class="blog_post_title"><h2><a href="#">The best sound of 2018</a></h2></div>
							<div class="blog_post_info">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>by <a href="#">Admin</a></li>
									<li><a href="#">2 Comments</a></li>
								</ul>
							</div>
							<div class="blog_post_text">
								<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>
							</div>
						</div>

					</div>
					<div class="load_more">
						<div class="button"><a href="#">Load More</a></div>
					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-lg-3">
					<div class="sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Archive</div>
							<div class="sidebar_list">
								<ul>
									<li><a href="#">February 2017</a></li>
									<li><a href="#">September 2017</a></li>
									<li><a href="#">May 2018</a></li>
									<li><a href="#">June 2018</a></li>
								</ul>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
							<div class="sidebar_list">
								<ul>
									<li><a href="#">Audio</a></li>
									<li><a href="#">News</a></li>
									<li><a href="#">Photos</a></li>
									<li><a href="#">Releases</a></li>
									<li><a href="#">Uncategorized</a></li>
									<li><a href="#">Video</a></li>
								</ul>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_title">Latest News</div>
							<div class="latest_news_list">

								<!-- Latest News -->
								<div class="latest_news d-flex flex-row align-items-start justify-content-start">
									<div class="latest_news_image"><img src="images/latest_1.jpg" alt="https://unsplash.com/@dannykekspro"></div>
									<div class="latest_news_content">
										<div class="latest_news_date">Billboard</div>
										<div class="latest_news_title"><a href="https://www.billboard.com/news">Get The Hottest News Here</a></div>
									</div>
								</div>

								<!-- Latest News -->
								<div class="latest_news d-flex flex-row align-items-start justify-content-start">
									<div class="latest_news_image"><img src="images/latest_2.jpg" alt="https://unsplash.com/@rexcuando"></div>
									<div class="latest_news_content">
										<div class="latest_news_date">MTV</div>
										<div class="latest_news_title"><a href="http://www.mtv.com/news/music/">The Music News Yall Get To</a></div>
									</div>
								</div>

								<!-- Latest News -->
								<div class="latest_news d-flex flex-row align-items-start justify-content-start">
									<div class="latest_news_image"><img src="images/latest_3.jpg" alt="https://unsplash.com/@arstyy"></div>
									<div class="latest_news_content">
										<div class="latest_news_date">MNE</div>
										<div class="latest_news_title"><a href="https://www.nme.com/news/music">Music News To The Latest</a></div>
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
<script src="js/blog.js"></script>
</body>
</html>