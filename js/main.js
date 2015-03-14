/************Scrolling*************/
  var $window = $(window);
var scrolling=false;
var $window=$(window); 
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
                if($("#eventContent").css("display")=="block"){
                event.preventDefault();
                	return;
                }	          
     //            var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
     //            var scrollTop = $window.scrollTop();
     //            var finalScroll = scrollTop - parseInt(delta*scrollDistance);
     //            var ratio=(finalScroll/$window.height());
					// if(delta<0&&ratio%1>.6){
					// 	finalScroll=((ratio+1)>>0)*$window.height();
					// }
					// if(delta>0&&ratio%1<.6){
					// 	finalScroll=((ratio)>>0)*$window.height();
					// }
     //          		TweenMax.to($window, scrollTime, {
     //                	scrollTo:{ y: finalScroll, autoKill:false },
     //                    ease: Power1.easeOut,
     //                    overwrite: 5							
     //               		 });
                
	
           		 });
		var controller = new ScrollMagic();
	// 	// init controller
	}
$(function (){
	
	// build scenes
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
	
 var tween_events = new TimelineMax ()
                                 .add([
                                    TweenMax.fromTo($("#event_list"), 1, {opacity:0,x:100},{opacity:1,x:0}),
                                    TweenMax.fromTo($("#events-head"), 1, {opacity:0,x:-100},{opacity:1,x:0}),
                                    TweenMax.fromTo($("#events-words-place"), 1, {opacity:0,scale:.5},{opacity:1,scale:1}),
                                    TweenMax.fromTo($("#events-sprite"), 1, {x:-100,opacity:0,scale:.5},{x:0,opacity:1,scale:1})
                                ]);
 var tween_events_reverse= new TimelineMax ()
                                 .add([
                                    TweenMax.fromTo($("#event_list"), 1, {opacity:1,x:0},{opacity:0,x:100}),
                                    TweenMax.fromTo($("#events-head"), 1, {opacity:1,x:0},{opacity:0,x:-100}),
                                    TweenMax.fromTo($("#events-words-place"), 1, {opacity:1,scale:1},{opacity:0,scale:.5}),
                                    TweenMax.fromTo($("#events-sprite"), 1, {x:0,opacity:1},{x:-100,opacity:0})
                                ]);

 // var tween_workshops = new TimelineMax ()
 //                                 .add([
 //                                    TweenMax.fromTo($("#workshops-head"), 1, {opacity:0,x:100},{opacity:1,x:0}),
 //                                    TweenMax.fromTo($("#workshops-words-place"), 1, {opacity:0,scale:.5},{opacity:1,scale:1}),
 //                                    TweenMax.fromTo($("#workshops-sprite"), 1, {x:-100,opacity:0,scale:.5},{x:0,opacity:1,scale:1}),
 //                                    TweenMax.fromTo($("#workshop_coming_soon"), 1, {x:-100,opacity:0,scale:.5},{x:0,opacity:1,scale:1}),
 //                                    // TweenMax.fromTo($("#Workshop-left"), 1, {x:-100,opacity:0},{x:0,opacity:1})
 //                                ]);
 // var tween_workshops_reverse = new TimelineMax ()
 //                                 .add([
 //                                    TweenMax.fromTo($("#workshops-head"), 1, {opacity:1,x:0},{opacity:0,x:100}),
 //                                    TweenMax.fromTo($("#workshops-words-place"), 1, {opacity:1,scale:1},{opacity:0,scale:.5}),
 //                                    TweenMax.fromTo($("#workshops-sprite"), 1, {x:0,opacity:1,scale:1},{x:-100,opacity:0,scale:.5}),
 //                                    TweenMax.fromTo($("#workshop_coming_soon"), 1, {x:0,opacity:1,scale:1},{x:-100,opacity:0,scale:.5}),
 //                                    // TweenMax.fromTo($("#Workshop-left"), 1, {x:0,opacity:1},{x:-100,opacity:0})
 //                                ]);
 // var tween_proshows = new TimelineMax ()
 //                                 .add([
                                   
 //                                    // TweenMax.fromTo($("#Workshop-left"), 1, {x:-100,opacity:0},{x:0,opacity:1})
 //                                ]);
 // var tween_proshows_reverse = new TimelineMax ()
 //                                 .add([
 //                                    TweenMax.fromTo($("#proshows-head"), 1, {opacity:1,x:0},{opacity:0,x:-100}),
 //                                    TweenMax.fromTo($(".center-attraction"), 1, {opacity:1,x:0},{opacity:0,x:-100}),
 //                                    TweenMax.fromTo($("#sprite1"), 1, {opacity:1,x:0},{opacity:0,x:-100}),
	// 								TweenMax.fromTo($("#proshows-words-place"), 1, {opacity:1,scale:1},{opacity:0,scale:.5}),
	// 								TweenMax.fromTo($("#proshow_coming_soon"), 1, {opacity:1,scale:1},{opacity:0,scale:.5})
 //                                    // TweenMax.fromTo($("#Workshop-left"), 1, {x:0,opacity:1},{x:-100,opacity:0})
 //                                ]);
                                 
 var tween_infos = new TimelineMax ()
                                 .add([
                                    TweenMax.fromTo($("#info_scroll"), 1, {opacity:0,x:-100},{opacity:1,x:0}),
                                    
                                    // TweenMax.fromTo($("#Workshop-left"), 1, {x:0,opacity:1},{x:-100,opacity:0})
                                ]);
  var tween_infos_reverse = new TimelineMax ()
                                 .add([
                                    TweenMax.fromTo($("#info_scroll"), 1, {opacity:1,x:0},{opacity:0,x:-100}),
                                    
                                    // TweenMax.fromTo($("#Workshop-left"), 1, {x:0,opacity:1},{x:-100,opacity:0})
                                ]);  
 var tween_sneharagam = new TimelineMax ()
                                 .add([
                                   
                                ]);
 var tween_sneharagam_reverse = new TimelineMax ()
                                 .add([
                                    
                                ]); 

 var tween_contacts = new TimelineMax ()
                                 .add([
                                    TweenMax.fromTo($("#contact-head"), 1, {opacity:0,x:-100},{opacity:1,x:0}),
                                    TweenMax.staggerFromTo($(".contacts-tabs"), 1, {opacity:0,x:-100},{opacity:1,x:0},.5),
                                    // TweenMax.fromTo($("#Workshop-left"), 1, {x:-100,opacity:0},{x:0,opacity:1})
                                ]);
 var tween_contacts_reverse = new TimelineMax ()
                                 .add([
                                    TweenMax.fromTo($("#contact-head"), 1, {opacity:1,x:0},{opacity:0,x:-100}),
                                    TweenMax.staggerFromTo($(".contacts-tabs"), 1, {opacity:1,x:0},{opacity:0,x:-100},.5),
                                    // TweenMax.fromTo($("#Workshop-left"), 1, {x:0,opacity:1},{x:-100,opacity:0})
                                ]);
 TweenMax.staggerFromTo($(".contacts-tabs"), .1, {opacity:1,x:0},{opacity:0,x:-100},.5);
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
	new ScrollScene({triggerElement: "#contacts"})
					.setClassToggle("#grad6", "active") // add class toggle
					.addTo(controller)

	new ScrollScene({triggerElement: "#Workshops", duration: 600})
					.addTo(controller)
					 .on("enter", function(event) {
	                console.log("Enter");
	                 TweenMax.fromTo($("#workshop_heading"), 1, {opacity:0,x:-100},{opacity:1,x:0});
                    TweenMax.staggerFromTo($(".ch-itemw"), 1, {opacity:0,scale:0},{opacity:1,scale:1},.2);
	              })
	              .on("leave", function(event) {
	                console.log("Leave");
                    TweenMax.staggerFromTo($(".ch-itemw"), 1,{opacity:1,scale:1}, {opacity:0,scale:0},.2);
	              }) // add class toggle
	// 				.addTo(controller)
	// new ScrollScene({triggerElement: "#Workshops",offset:650})
	// 				.setTween(tween_workshops_reverse) // add class toggle
	// 				.addTo(controller);
	new ScrollScene({triggerElement: "#Events"})
					.setTween(tween_events) // add class toggle
					.addTo(controller)	
	// new ScrollScene({triggerElement: "#Events",offset:650})
	// 				.setTween(tween_events_reverse) // add class toggle
	// 				.addTo(controller)	
	
	new ScrollScene({triggerElement: "#Proshows", duration: 600})
					.addTo(controller)
					 .on("enter", function(event) {
	                console.log("Enter");
	                 TweenMax.fromTo($("#proshows-head"), 1, {opacity:0,x:-100},{opacity:1,x:0});
                                    TweenMax.fromTo($(".center-attraction"), 1, {opacity:0,x:-100},{opacity:1,x:0});
                                    TweenMax.fromTo($("#sprite1"), 1, {opacity:0,x:-100},{opacity:1,x:0});
									TweenMax.fromTo($("#proshows_coming_soon"), 1, {opacity:0,scale:.5},{opacity:1,scale:1});
	              })
	              .on("leave", function(event) {
	                console.log("Leave");
	                 TweenMax.fromTo($("#proshows-head"), 1, {opacity:1,x:0},{opacity:0,x:-100});
                                    TweenMax.fromTo($(".center-attraction"), 1, {opacity:1,x:0},{opacity:0,x:-100});
                                    TweenMax.fromTo($("#sprite1"), 1, {opacity:1,x:0},{opacity:0,x:-100});
									TweenMax.fromTo($("#proshows-words-place"), 1, {opacity:1,scale:1},{opacity:0,scale:.5});
									TweenMax.fromTo($("#proshow_coming_soon"), 1, {opacity:1,scale:1},{opacity:0,scale:.5});
	              })
	// new ScrollScene({triggerElement: "#Proshows",offset:650})
	// 				.setTween(tween_proshows_reverse) // add class toggle
	// 				.addTo(controller)

	new ScrollScene({triggerElement: "#sneharagam", duration: 600})
					.addTo(controller)
					 .on("enter", function(event) {
	                console.log("Enter");
	                 TweenMax.fromTo($("#sneha-head"), 1, {opacity:0,x:-100},{opacity:1,x:0});
                                    TweenMax.fromTo($("#sneha-words-place"), 1, {opacity:0,x:100},{opacity:1,x:0});
	              })
	              .on("leave", function(event) {
	                console.log("Leave");
	                 TweenMax.fromTo($("#sneha-words-place"), 1, {opacity:1,x:0},{opacity:0,x:100});
                                    TweenMax.fromTo($("#sneha-head"), 1, {opacity:1,x:0},{opacity:0,x:-100});
	              })

	new ScrollScene({triggerElement: "#contacts"})
					.setTween(tween_contacts) // add class toggle
					.addTo(controller)
	// new ScrollScene({triggerElement: "#contacts",offset:650})
	// 				.setTween(tween_contacts_reverse) // add class toggle
	// 				.addTo(controller)

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
					.setTween(tween_infos) // add class toggle
					.addTo(controller)
    // new ScrollScene({triggerElement: "#Info",offset:650})
				// 	.setTween(tween_infos_reverse) // add class toggle
				// 	.addTo(controller)
					
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
		$(".info-tab").fadeOut();
		$("#tab-reg").slideDown();
		$(".info-but").removeClass("but-active");
		$("#but-reg").addClass("but-active");
	});
	$("#but-hosp").click(function(){
		$(".info-tab").fadeOut();
		$("#tab-hosp").slideDown();
		$(".info-but").removeClass("but-active");
		$("#but-hosp").addClass("but-active");
	});
	$("#but-reach").click(function(){
		$(".info-tab").fadeOut();
		$("#tab-reach").slideDown();
		$(".info-but").removeClass("but-active");
		$("#but-reach").addClass("but-active");
	});
	$("#but-faq").click(function(){
		$(".info-tab").fadeOut();
		$("#tab-faq").slideDown();
		$(".info-but").removeClass("but-active");
		$("#but-faq").addClass("but-active");
	});
	$(document).keyup(function(e) {
  if (e.keyCode == 27) $('#ctalk-overlay').fadeOut();   // esc
});
$(".close").click(function() {
  $('#ctalk-overlay').fadeOut();   // esc
});



var fix=function(){
	var ratio=($window.scrollTop()/$window.height());
	if(ratio%1>.6){
			$window.scrollTop(((ratio+1)>>0)*$window.height());
	}
}
function setCookie(cname, cvalue, exdays) {
		    var d = new Date();
		    d.setTime(d.getTime() + (exdays*24*60*60*1000));
		    var expires = "expires="+d.toUTCString();
		    document.cookie = cname + "=" + cvalue + "; " + expires;
		}
		function getCookie(cname) {
		    var name = cname + "=";
		    var ca = document.cookie.split(';');
		    for(var i=0; i<ca.length; i++) {
		        var c = ca[i];
		        while (c.charAt(0)==' ') c = c.substring(1);
		        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
		    }
		    return "";
		}
				music1 = new Audio('music/music1.mp3');
				music1.volume=.15;
				console.log(document.cookie);
			var music_on_ready=function(){
				music1.removeEventListener("canplaythrough", music_on_ready, false);
				if(getCookie("music")&&!isNaN(getCookie("music"))){
					music1.currentTime=getCookie("music");
				}
					$("#mute-button").click(function(){
					if($("#mute-button").hasClass("not_muted")){
						$("#mute-button").removeClass("not_muted");
						music1.pause();
						setCookie("muted", "true", 1)
					}
					else{
						setCookie("muted", "false", 1)
						$("#mute-button").addClass("not_muted");
						music1.play();
					}
				})
					music1.play();
					if(getCookie("muted")=="true")
						$("#mute-button").click();
			}
				music1.addEventListener('canplaythrough', music_on_ready, false);
				window.onbeforeunload=function(){
					setCookie("music",music1.currentTime,1);
				}
});