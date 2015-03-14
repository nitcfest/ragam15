
/****************RIGHT MENU*********/
/*works on id named "showRightPush*/
var menuRight = document.getElementById( 'spmenu-s2' ),
	showRightPush = document.getElementById( 'spmenu-s2' ),
	body = document.getElementById('mega');
//showRightPush.onclick = function() {
showRightPush.onmouseenter = function() {
	classie.toggle( this, 'active' );
	//classie.toggle( body, 'spmenu-push-toleft' );
	classie.toggle( menuRight, 'spmenu-open' );
	disableOther( 'showRightPush' );
};
showRightPush.onmouseleave = function() {
	classie.toggle( this, 'active' );
	//classie.toggle( body, 'spmenu-push-toleft' );
	classie.toggle( menuRight, 'spmenu-open' );
	disableOther( 'showRightPush' );
};
function disableOther( button ) {
	if( button !== 'showRightPush' ) {
		classie.toggle( showRightPush, 'disabled' );
	}
}

$(document).ready(function() 
{

/***********top menu**************/

	$("#topdraw-content").mouseenter(function(){

		$("#topdraw").removeClass("topdraw-hover",500,"easeOutBounce");
	});
	$("#topdraw-hanger").mouseenter(function(){

		$("#topdraw").removeClass("topdraw-hover",500,"easeOutBounce");
	});

	$("#topdraw").mouseleave(function(){

		$("#topdraw").addClass("topdraw-hover",500,"easeOutBounce");
	});

});
$("#two>a, .page-exit").click(function(){
	var $that=$(this);

	$('.fadebox-hidden').removeClass('fadebox-hidden').addClass('fadebox-black');
	setTimeout(function(){
		location.href=$that.data('href');
	}, 1000);

})
$(window).load(function() 
{
	$("#preloader").fadeOut();

	music1 = new Audio('music/music1.mp3');
	music1.volume=.15;
	var music_on_ready=function(){
		music1.removeEventListener("canplaythrough", music_on_ready, false);
		if(getCookie("music")&&!isNaN(getCookie("music"))){
			music1.currentTime=getCookie("music");
		}
		music1.play();
		$("#music-icon").click(function(){
			if($("#music-icon").hasClass("playing")){
				$("#music-icon").removeClass("playing");
				music1.pause();
				setCookie("muted", "true", 1)
			}
			else{
				setCookie("muted", "false", 1)
				$("#music-icon").addClass("playing");
				music1.play();
			}
		})
		music1.play();
		if(getCookie("muted")=="true")
			$("#music-icon").click();
	}
	music1.addEventListener('canplaythrough', music_on_ready, false);

	window.onbeforeunload=function(){
		setCookie("music",music1.currentTime,1);
	}	
	$(".fadebox-black").removeClass('fadebox-black').addClass('fadebox-hidden');	
});