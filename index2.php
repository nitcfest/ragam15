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
			<div id="grad4" class="background"></div>
			<div id="grad5" class="background"></div>
		</div>
		<div id="rest">
			<div id="sec1" class="sec">Hello</div>
			<div id="sec2" class="sec">jhbasdkjn</div>
			<div id="sec3" class="sec">ahbsiuyhd</div>
			<div id="sec4" class="sec">ahbsiuyhd</div>
			<div id="sec5" class="sec">ahbsiuyhd</div>
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
		new ScrollScene({triggerElement: "#sec4"})
						.setClassToggle("#grad4", "active") // add class toggle
						.addTo(controller)
						.addIndicators();
		new ScrollScene({triggerElement: "#sec5"})
						.setClassToggle("#grad5", "active") // add class toggle
						.addTo(controller)
						.addIndicators();

	});
</script>
</html>