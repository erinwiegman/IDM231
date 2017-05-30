<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
	<title>CONTACT | ERIN MICHELLE</title>
	<?php echo "<link rel='stylesheet' type='text/css' href='../css/normalize.css'>"?>
	<?php echo "<link rel='stylesheet' type='text/css' href='../css/stylesheet.css'>"?>
</head>

<body>

	<div class="container">
	
		<header class="header">

			<div class="logo ff-bold"><a href="index.html">erin michelle</a></div>

			<img id="hamburger" src="../graphics/hamburger.png" alt="menu">	

		</header>

		<main>
			
				<div id="nav-list" class="visually-hidden nav ff-bold">
					<ul>						
						<li class="unactive"><a href="portfolio.html">portfolio</a>
						<div class="subnav"> 
									<ul>
										<li><a href="graphic.html">graphic</a></li>
										<li><a href="web.html">web</a></li>
										<li><a href="photography.html">photography</a></li>
										<li><a href="art.html">art</a></li>
									</ul>
							</div></li>
							<li class="unactive"><a href="about.html">about</a></li>
						<li class="current-page"><a href="contact.html">contact</a></li>
					</ul>
				</div>

				<div class="thanks ff-regular">
					<?php 
						$name = $_POST['name']; ?>
					<p class="thanks-text">Thank you, <?php echo $name; ?><br>
					Your message has been sent! I'll get back to you shortly.</p>			
				</div>

	</main>

		<footer>

			<div class="footer-info">
				<div class="social">
					<a href="https://www.facebook.com/erin.wiegman"><img src="../graphics/fb.png" alt="social"></a>
					<a href="https://www.linkedin.com/in/erinwiegman/"><img src="../graphics/li.png" alt="social"></a>
				</div>

				<p class="ff-regular">&copy; 2017 ERIN WIEGMAN</p>
			</div>

			<picture class="footer-design">
				<source media="(min-width: 450px)"
								srcset="../graphics/footer-550.png 550w,
								../graphics/footer-650.png 650w,
								../graphics/footer-768.png 768w,
								../graphics/footer-900.png 900w,
								../graphics/footer-1500.png 1500w"
								sizes="100vw">
		    <img srcset="../graphics/footer-320.png 320w"
		         sizes="100vw"
		         src="../graphics/footer-320.png"
		         alt="footer">
			</picture>

		</footer>

	</div>

	<script src="../js/main.js" type="text/javascript"></script>
	
</body>

</html>
