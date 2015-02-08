<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=500" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/tweenmax.js"></script>
		<script type="text/javascript" src="js/scrollmagic.js"></script>
		<script type="text/javascript" src="js/scrollmagic.debug.js"></script>
		<link rel="stylesheet" type="text/css" href="css/index2.css"/>
	</head>
	<body>
		<div id="backgrounds">
			<div id="grad1" class="background"></div>
			<div id="grad2" class="background"></div>
			<div id="grad3" class="background"></div>
		</div>
		<div id="rest">
			<div id="sec1" class="sec"></div>
			<div id="sec2" class="sec"></div>
			<div id="sec3" class="sec"></div>
		</div>
	</body>
	<script>
	$(document).ready(function($) {
		// init controller
		var controller = new ScrollMagic();

		// build scenes
		new ScrollScene({triggerElement: "#sec1"})
						.setClassToggle("#grad1", "active") // add class toggle
						.addTo(controller)
						.addIndicators();
		new ScrollScene({triggerElement: "#sec2"})
						.setClassToggle("#grad2", "active") // add class toggle
						.addTo(controller)
						.addIndicators();
		new ScrollScene({triggerElement: "#sec3"})
						.setClassToggle("#grad3", "active") // add class toggle
						.addTo(controller)
						.addIndicators();
	});
</script>
</html>