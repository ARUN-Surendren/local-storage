<?php session_start();
	 if(isset($_SESSION['userName']))
	 {
	 
		echo '<html><head>
		<title>Cloud_CEC file sharing!</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">


			<!-- Header -->
				<header id="header" class="reveal">
					<h1>Cloud_CEC!</h1>
					<nav id="nav">
						<ul>
                                                                                                                                  <li style="white-space: nowrap;"><a href="#upl" class="button">File upload</a></li>
						                  <li style="white-space: nowrap;"><a href="./uploads" class="button">Files</a></li>
                                                                                                                            	<li style="white-space: nowrap;"><a href="logout.php" class="button">Log out</a></li>
							
							
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2>Cloud_CEC</h2>
					<p>A new file sharing platform!</p>
					<ul class="actions">
						<li><a href="#upl" class="button special">File upload</a></li>
						<li><a href="#lrnmre" class="button">Learn More</a></li>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Introducing the ultimate Online<br>Cloud storage!</h2>
							<p>The new cloud storage is just a prototype cloud system.<br>This cloud is just experimental.</p>
						</header>
						<span class="image featured"><img src="images/pic01.jpg" alt=""></span>
					</section>
<a name ="lrnmre"></a>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon major fa-bolt accent2"></span>
								<h3>Reliable</h3>
								<p>Our Cloud system is completely reliable</p>
							</section>
							<section>
								<span class="icon major fa-area-chart accent3"></span>
								<h3>90% Uptime</h3>
								<p>Our cloud is online 90% of the time</p>
							</section>
						</div>
						<div class="features-row">
							<section>
								<span class="icon major fa-cloud accent4"></span>
								<h3>Free of cost cloud support</h3>
								<p>Our Cloud is completely cost free!</p>
							</section>
							<section>
								<span class="icon major fa-lock accent5"></span>
								<h3>Secure</h3>
								<p>Our cloud is completely Secure.</p>
							</section>
						</div>
					</section>

					<div class="row">
						
						
					</div>

				</section>

			<!-- CTA -->
<a name ="upl"></a>
				<section id="cta">

					<h2>Upload</h2>
					<p>Upload your files to the server.</p>

					<form action="upload.php" method="post" enctype="multipart/form-data">
						<div class="row uniform 50%">
							<div class="20u 12u(mobilep)">
								<input type="file" name="fileToUpload" id="fileToUpload">
							</div>
<br>
							<div class="20u 12u(mobilep)">
								<input type="submit" value="Upload file" class="fit" name="submit" />
							</div>
						</div>
					</form>

				</section>

			<!-- Footer -->
				<footer id="footer">
					
					<ul class="copyright">
						<li>Cloud_CEC. All rights reserved.</li>
					</ul>
				</footer>


		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	
<ul class="dropotron level-0 right" style="user-select: none; position: absolute; z-index: 1000; left: 1006.02px; top: 47px; opacity: 1; display: none;">
									<li style="white-space: nowrap;"><a href="generic.html" style="display: block;">Generic</a></li>
									<li style="white-space: nowrap;"><a href="contact.html" style="display: block;">Contact</a></li>
									<li style="white-space: nowrap;"><a href="elements.html" style="display: block;">Elements</a></li>
									<li class="opener" style="user-select: none; cursor: pointer; white-space: nowrap;">
										<a href="#" style="display: block;">Submenu</a>
										<ul style="user-select: none; display: none; position: absolute; z-index: 1001;" class="dropotron level-1">
											<li style="white-space: nowrap;"><a href="#" style="display: block;">Option One</a></li>
											<li style="white-space: nowrap;"><a href="#" style="display: block;">Option Two</a></li>
											<li style="white-space: nowrap;"><a href="#" style="display: block;">Option Three</a></li>
											<li style="white-space: nowrap;"><a href="#" style="display: block;">Option Four</a></li>
										</ul>
									</li>
								</ul><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Layouts</a><a class="link depth-1" href="generic.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Generic</a><a class="link depth-1" href="contact.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Contact</a><a class="link depth-1" href="elements.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Elements</a><a class="link depth-1" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Submenu</a><a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Option One</a><a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Option Two</a><a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Option Three</a><a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Option Four</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Sign Up</a></nav></div><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Check account</a></nav></div><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Check account</a></nav></div><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Check account</a></nav></div><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Check account</a></nav></div><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Check account</a></nav></div><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Check account</a></nav></div><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Check account</a></nav></div></body></html>

';
		
	 } 
	 else
	 {
	 	echo '<script>window.location.replace("./index.php");</script>';
		
	 }
?>