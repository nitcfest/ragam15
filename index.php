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
		<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	</head>
	<body>
		<div class="spmenu-push" id="mega">
			<nav class="spmenu spmenu-vertical spmenu-right" id="spmenu-s2">
				<div id="one">
				</div>
				<div id="two">
				
					<!--Login button somewhere here-->
					<h3>Menu</h3>
					<a href="#">Events</a>
					<a href="#">Workshops</a>
					<a href="#">Proshows</a>
					<a href="#">General Info</a>
					<a href="#">Sponsors</a>
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
		<script type="text/javascript">
	$(function(){
		simpleTicker();
	});
	
	function simpleTicker(){
	
		var tTime = 2000;
			tObj = $('#ticker ol');
			tClass = 'currentTick';
			
		$(tObj).children().hide();
		$(tObj).children('li:first').addClass(tClass).show();
		
		setInterval(function(){
			var tCurrentObj = $(tObj).children('.' + tClass);
				tNext = $(tCurrentObj).next();
			if (tNext.length == 0){
				$(tObj).children('li:last').removeClass().fadeOut();
				tNext = $(tObj).children('li:first');
				tNext.addClass(tClass);
			}
			else {
				tNext;
			}
			$(tNext).prev().removeClass().fadeOut();
			$(tNext).addClass(tClass).fadeIn();		
		}, tTime);
		
	}
</script>
<div id="ticker">
	<strong>Here are some news</strong>
	<ol>
		<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
		<li><a href="#">Nullam luctus vulputate elit, eget imperdiet enim tristique sed.</a></li>
		<li><a href="#">Pellentesque molestie ultrices nisl, quis tempor quam facilisis eget.</a></li>
		<li><a href="#">Duis pharetra vestibulum dui, vitae congue eros iaculis a.</a></li>
		<li><a href="#">Cras rutrum nisi nec nulla placerat vestibulum semper nisi sagittis.</a></li>
	</ol>
</div>
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
	</body>
</html>
