
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
$("#two>a").click(function(){
	var $that=$(this);
	$("#fadebox").fadeIn(1000,function(){
		location.href=$that.data('href');
	});
})
$(window).load(function() 
{
	$("#fadebox").fadeOut(1500);
	
});
$("#login_link").click(function(){
		$("#modal").fadeIn();
})