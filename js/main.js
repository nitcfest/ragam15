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
	var workshop_heading=TweenMax.fromTo($("#workshops-head"), 1, {opacity:0,x:100},{opacity:1,x:0});
	var workshop_text=TweenMax.fromTo($("#workshops-words-place"), 1, {opacity:0,scale:.5},{opacity:1,scale:1});
	var event_heading=TweenMax.fromTo($("#events-head"), 1, {opacity:0,x:-100},{opacity:1,x:0});
	var event_text=TweenMax.fromTo($("#events-words-place"), 1, {opacity:0,scale:.5},{opacity:1,scale:1});
	var proshow_heading=TweenMax.fromTo($("#proshows-head"), 1, {opacity:0,x:-100},{opacity:1,x:0});
	var proshow_text=TweenMax.fromTo($("#proshows-words-place"), 1, {opacity:0,scale:.5},{opacity:1,scale:1});
	var info_heading=TweenMax.fromTo($("#info-head"), 1, {opacity:0,x:100},{opacity:1,x:0});
	var info_text=TweenMax.fromTo($("#info-words-place"), 1, {opacity:0,scale:.5},{opacity:1,scale:1});
	var highlight_heading=TweenMax.fromTo($("#Highlights-head"), 1, {opacity:0,x:-100},{opacity:1,x:0});
	var highlight_text=TweenMax.fromTo($("#Highlights-words-place"), 1, {opacity:0,scale:.5},{opacity:1,scale:1});
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
	new ScrollScene({triggerElement: "#Workshops"})
					.setTween(workshop_heading) // add class toggle
					.addTo(controller)
					.addIndicators();
	new ScrollScene({triggerElement: "#Workshops"})
					.setTween(workshop_text) // add class toggle
					.addTo(controller)
					.addIndicators();
	new ScrollScene({triggerElement: "#Events"})
					.setTween(event_heading) // add class toggle
					.addTo(controller)
					.addIndicators();
	new ScrollScene({triggerElement: "#Events"})
					.setTween(event_text) // add class toggle
					.addTo(controller)
					.addIndicators();
	new ScrollScene({triggerElement: "#Proshows"})
					.setTween(proshow_heading) // add class toggle
					.addTo(controller)
					.addIndicators();
	new ScrollScene({triggerElement: "#Proshows"})
					.setTween(proshow_text) // add class toggle
					.addTo(controller)
					.addIndicators();
	new ScrollScene({triggerElement: "#Highlights"})
					.setTween(highlight_heading) // add class toggle
					.addTo(controller)
					.addIndicators();
	new ScrollScene({triggerElement: "#Highlights"})
					.setTween(highlight_text) // add class toggle
					.addTo(controller)
					.addIndicators();
	new ScrollScene({triggerElement: "#Info"})
					.setTween(info_heading) // add class toggle
					.addTo(controller)
					.addIndicators();
	new ScrollScene({triggerElement: "#Info"})
					.setTween(info_text) // add class toggle
					.addTo(controller)
					.addIndicators();
});