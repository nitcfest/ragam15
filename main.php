<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Ragam 2015</title>
		<meta name="description" content="Ragam 2015, NIT Calicut's Annual Cultural Festival" />
		<meta name="keywords" content="ragam, raagam, nitc, nit calicut, tathva, raga, raaga" />
		<meta name="author" content="Ragam Creative Team" />
		<link rel="shortcut icon" href="../favicon.ico">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/fadebox.js"></script>
		<script type="text/javascript" src="js/tweenmax.js"></script>
		<script type="text/javascript" src="js/scrollmagic.js"></script>
		<script type="text/javascript" src="js/scrollmagic.debug.js"></script>
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<link rel="stylesheet" type="text/css" href="css/ticker.css"/>
		<script type="text/javascript" src="js/ScrollToPlugin.js"></script>
		<script type="text/javascript" src="js/cssplugin.js"></script>
	</head>
	<body>
		<div id="fadebox"></div>
		<div id="backgrounds">
			<div id="grad1" class="background"></div>
			<div id="grad2" class="background"></div>
			<div id="grad3" class="background"></div>
			<div id="grad4" class="background"></div>
			<div id="grad5" class="background"></div>
		</div>
		<div id="rest">
			<div id="Events" class="sec">Events</div>
			<div id="Workshops" class="sec">Workshops</div>
			<div id="Proshows" class="sec">Proshows</div>
			<div id="Info" class="sec">General Info</div>
			<div id="Sponsors" class="sec">Sponsors</div>
		</div>
		<?php include ('ticker.html'); ?>

	</body>
	<script>
	$(document).ready(function($) {
	  var $window = $(window);
        var scrollTime = 1;
        var scrollDistance = 250;
        var iPadAgent = navigator.userAgent.match(/iPad/i) != null;
        var iPodAgent = navigator.userAgent.match(/iPhone/i) != null;
        var AndroidAgent = navigator.userAgent.match(/Android/i) != null;
        var webOSAgent = navigator.userAgent.match(/webOS/i) != null;

        
        if(iPadAgent || iPodAgent || AndroidAgent || webOSAgent){
            var controller = new ScrollMagic({container: "#scroll_wrapper"});
            $('#scroll_wrapper').height($(window).height());
            $('#scroll_wrapper').width($(window).width()); 
        }
        else{
			$window.on("mousewheel DOMMouseScroll", function(event){
	                
	                event.preventDefault();	
	                          
	                var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
	                var scrollTop = $window.scrollTop();
	                var finalScroll = scrollTop - parseInt(delta*scrollDistance);
	                
	                TweenMax.to($window, scrollTime, {
	                    scrollTo:{ y: finalScroll, autoKill:false },
	                        ease: Power1.easeOut,
	                        overwrite: 5							
	                    });
	            });
			var controller = new ScrollMagic();
		// 	// init controller
		}
		// build scenes
		new ScrollScene({triggerElement: "#Events"})
						.setClassToggle("#grad1", "active") // add class toggle
						.addTo(controller)
						.addIndicators();
		new ScrollScene({triggerElement: "#Workshops"})
						.setClassToggle("#grad2", "active") // add class toggle
						.addTo(controller)
						.addIndicators();
		new ScrollScene({triggerElement: "#Proshows"})
						.setClassToggle("#grad3", "active") // add class toggle
						.addTo(controller)
						.addIndicators();
		new ScrollScene({triggerElement: "#Info"})
						.setClassToggle("#grad4", "active") // add class toggle
						.addTo(controller)
						.addIndicators();
		new ScrollScene({triggerElement: "#Sponsors"})
						.setClassToggle("#grad5", "active") // add class toggle
						.addTo(controller)
						.addIndicators();

	});
</script>
</html>