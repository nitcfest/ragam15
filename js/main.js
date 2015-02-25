/************Scrolling*************/
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
$(function (){
	//$(".head").hide();
	// build scenes
	TweenMax.to($(".come-from-right"), 20, {backgroundColor: "green", scale: 1,"left":"100%"});
	new ScrollScene({triggerElement: "#Events"})
					.setClassToggle("#grad1", "active") // add class toggle
					.addTo(controller)
					.addIndicators();
	new ScrollScene({triggerElement: "#Workshops",duration: 300})
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
	new ScrollScene({triggerElement: "#Highlights"})
					.setClassToggle("#grad5", "active") // add class toggle
					.addTo(controller)
					.addIndicators();
});