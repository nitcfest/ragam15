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
		<script type="text/javascript" src="js/ScrollToPlugin.js"></script>
		<script type="text/javascript" src="js/cssplugin.js"></script>
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