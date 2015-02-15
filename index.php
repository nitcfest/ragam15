<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Ragam 2015</title>
		<meta name="description" content="Ragam 2015, NIT Calicut's Annual Cultural Festival" />
		<meta name="keywords" content="ragam, raagam, nitc, nit calicut, tathva, raga, raaga" />
		<meta name="author" content="Ragam Creative Team" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/ticker.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
	</head>
	<body>
		<div id="fadebox"></div>
		<div class="spmenu-push" id="mega">
			<nav class="spmenu spmenu-vertical spmenu-right" id="spmenu-s2">
				<div id="one">
				</div>
				<div id="two">
				
					<!--Login button somewhere here-->
					<h3>Menu</h3>
					<a href="main.php#Events">Events</a>
					<a href="main.php#Workshops">Workshops</a>
					<a href="main.php#Proshows">Proshows</a>
					<a href="main.php#Info">General Info</a>
					<a href="main.php#Sponsors">Sponsors</a>
				</div>	
			</nav>
			<div class="container">
				<div class="main">
					<div id="main-text">
						<h1>Ragam</h1>
						<h2>Culture Personified</h2>
						<h3>March 26-29</h3>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Thanks from the Ragam team to Jquery Simple Ticker by @ignacioricci https://github.com/ignacioricci/Jquery-Newsticker -->

	
		<script src="js/modernizr.custom.js"></script>
		<script type="text/javascript" src="js/fadebox.js"></script>
		<!-- Thanks from the Ragam team to Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
		<script>
			/*works on id named "showRightPush*/
			var menuRight = document.getElementById( 'spmenu-s2' ),
				showRightPush = document.getElementById( 'spmenu-s2' ),
				body = document.getElementById('mega');
			//showRightPush.onclick = function() {
			showRightPush.onmouseenter = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'spmenu-push-toleft' );
				classie.toggle( menuRight, 'spmenu-open' );
				disableOther( 'showRightPush' );
			};
			showRightPush.onmouseleave = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'spmenu-push-toleft' );
				classie.toggle( menuRight, 'spmenu-open' );
				disableOther( 'showRightPush' );
			};
			function disableOther( button ) {
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>
		<?php include ('ticker.html'); ?>
	</body>
</html>
