<?php session_start();
if(isset($_SESSION['userName']))
	 {
  echo '<script>window.location.replace("./home.php");</script>';

          }
          else
	  {
            }
 ?>



<html><head>
		<title>New cloud file sharing!</title>
		<meta charset="utf-8">
                                       
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1>New Cloud!</h1>
					<nav id="nav">
						
					</nav>
				</header>

			<!-- Main -->

				<section id="main" class="container">
<center><h1><font size="5">Log in</font></h1> </center>

					
						<form  action="login.php" autocomplete="on" method="post"> 
                                
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" name="login" value="Login" /> 
								</p>
                               
                            </form>
					
					
				</section>

			<!-- Footer -->
				<footer id="footer">
					
					<ul class="copyright">
						<li>New cloud. All rights reserved.</li>
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

	
<ul class="dropotron level-0 right" style="user-select: none; position: absolute; z-index: 1000; left: 692.016px; top: 47px; opacity: 1; display: none;">
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
								</ul><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Layouts</a><a class="link depth-1" href="generic.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Generic</a><a class="link depth-1" href="contact.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Contact</a><a class="link depth-1" href="elements.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Elements</a><a class="link depth-1" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Submenu</a><a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Option One</a><a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Option Two</a><a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Option Three</a><a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Option Four</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Sign Up</a></nav></div><div id="navButton"><a href="#navPanel" class="toggle"></a></div><div id="navPanel"><nav><a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a><a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Check account</a></nav></div></body></html>