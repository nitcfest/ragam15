/************Scrolling*************/
  var $window = $(window);
       var scrollTime = 1;
       var scrollDistance = 150;
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
	var bat_width=400,bat_height=100/39,bat_num_pics=39,bat_repeat_num=4,bat_speed=5;
	var steppedEase = new SteppedEase(bat_num_pics-1);
	var steppedEase2 = new SteppedEase(bat_repeat_num-1);
	$("#sprite1").css({"width":"60%","height": "60%",  "background-image":"url('batman.png')","background-size": "100% 3900%","background-repeat": "no-repeat"})
	var start_repeat_batman=function(){
		TweenMax.fromTo('#sprite1', bat_speed/bat_num_pics*bat_repeat_num, {backgroundPosition: '0px '+(bat_num_pics)*bat_height+'%'},{backgroundPosition: '0px '+(bat_num_pics- bat_repeat_num)*(100/(bat_num_pics-1))+'%', ease:steppedEase2,repeat:-1});
	}
	var bat_sprite=TweenMax.to('#sprite1', 6, {backgroundPosition: '0px '+(bat_num_pics)*bat_height+'%', ease:steppedEase,onComplete:start_repeat_batman});
	new ScrollScene({triggerElement: "#Events"})
					.setClassToggle("#grad1", "active") // add class toggle
					.addTo(controller)
	new ScrollScene({triggerElement: "#Workshops"})
					.setClassToggle("#grad2", "active") // add class toggle
					.addTo(controller)
	new ScrollScene({triggerElement: "#Proshows"})
					.setClassToggle("#grad3", "active") // add class toggle
					.addTo(controller)
	new ScrollScene({triggerElement: "#Info"})
					.setClassToggle("#grad4", "active") // add class toggle
					.addTo(controller)
	new ScrollScene({triggerElement: "#CelebTalks"})
					.setClassToggle("#grad5", "active") // add class toggle
					.addTo(controller)
	new ScrollScene({triggerElement: "#Workshops"})
					.setTween(workshop_heading) // add class toggle
					.addTo(controller)
	new ScrollScene({triggerElement: "#Workshops"})
					.setTween(workshop_text) // add class toggle
					.addTo(controller)
	new ScrollScene({triggerElement: "#Events"})
					.setTween(event_heading) // add class toggle
					.addTo(controller)
	new ScrollScene({triggerElement: "#Events"})
					.setTween(event_text) // add class toggle
					.addTo(controller)
	new ScrollScene({triggerElement: "#Proshows"})
					.setTween(bat_sprite) // add class toggle
					.addTo(controller)
	new ScrollScene({triggerElement: "#Proshows"})
					.setTween(proshow_text) // add class toggle
					.addTo(controller)
	new ScrollScene({triggerElement: "#Proshows"})
					.setTween(proshow_text) // add class toggle
					.addTo(controller)
	new ScrollScene({triggerElement: "#CelebTalks"})
					.setTween(highlight_heading) // add class toggle
					.addTo(controller)
	new ScrollScene({triggerElement: "#CelebTalks"})
					.setTween(highlight_text) // add class toggle
					.addTo(controller)
	new ScrollScene({triggerElement: "#Info"})
					.setTween(info_heading) // add class toggle
					.addTo(controller)
	new ScrollScene({triggerElement: "#Info"})
					.setTween(info_text) // add class toggle
					.addTo(controller)

	$("#ctalk-overlay").hide();
	$(".ch-info").click(function()
	{
		$("#ctalk-overlay").fadeIn();

	});
	$(".info-tab").hide();
	$("#tab-reg").show();
	$(".info-but").removeClass("but-active");
	$("#but-reg").addClass("but-active");
	$("#but-reg").click(function(){
		$(".info-tab").hide();
		$("#tab-reg").show();
		$(".info-but").removeClass("but-active");
		$("#but-reg").addClass("but-active");
	});
	$("#but-hosp").click(function(){
		$(".info-tab").hide();
		$("#tab-hosp").show();
		$(".info-but").removeClass("but-active");
		$("#but-hosp").addClass("but-active");
	});
	$("#but-reach").click(function(){
		$(".info-tab").hide();
		$("#tab-reach").show();
		$(".info-but").removeClass("but-active");
		$("#but-reach").addClass("but-active");
	});
	$("#but-faq").click(function(){
		$(".info-tab").hide();
		$("#tab-faq").show();
		$(".info-but").removeClass("but-active");
		$("#but-faq").addClass("but-active");
	});
	$("#but-contacts").click(function(){
		$(".info-tab").hide();
		$("#tab-contacts").show();
		$(".info-but").removeClass("but-active");
		$("#but-contacts").addClass("but-active");
	});
	$(document).keyup(function(e) {
  if (e.keyCode == 27) $('#ctalk-overlay').fadeOut();   // esc
});
$(".close").click(function() {
  $('#ctalk-overlay').fadeOut();   // esc
});

});