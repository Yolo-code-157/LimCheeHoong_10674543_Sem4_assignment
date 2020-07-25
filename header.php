
			<div class="hamburger ml-auto">
				<div class="d-flex flex-column align-items-end justify-content-between">
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
		</div>
		
		<div style="width: 100%; display: table;">
			<div style="display: table-row">
				<div style="padding-left: 50px; width: 800px; display: table-cell;">
					  <p id="time"></p>
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
							<script type="text/javascript">
							var timestamp = '<?=time();?>';
							function updateTime(){
							$('#time').html(Date(timestamp));
							timestamp++;
							}
							$(function(){
							setInterval(updateTime, 1000);
							});
						</script>
				</div>
				<div align="right" style="padding-right: 50px; display: table-cell;">	
				<?php
					if(isset($_SESSION['userId'])){
						echo '<div class="featured_album_link ml-auto">
						<a href="includes/logout.inc.php">Logout</a></div>';
						echo '<p style="color:green">You are logged in</p>';
					}
					else{
						echo '
						
						<form action="includes/login.inc.php" method="post">
							<input type="text" name="mailuid" placeholder="Username/Email...">
							<input type="password" name="pwd" placeholder="Password...">
							<button style="color:white" class="show_shop trans_200" " type="submit" name="login-submit">Login</button>
							</form>';
							
						echo '<p style="color:red">You are logged out</p>';
					}
				?>
				</div>
			</div>
		</div>
	</header>
	<!-- Menu -->

	<div class="menu">
		<div>
			<div class="menu_overlay"></div>
			<div class="menu_container d-flex flex-column align-items-start justify-content-center">
				<div class="menu_log_reg">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li><a href="#">Login</a></li>
					</ul>
				</div>
				<nav class="menu_nav">
					<ul class="d-flex flex-column align-items-start justify-content-start">
						<li><a href="index.php">Home</a></li>
						<li><a href="music.php">Music</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>