
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
	$(".fadebox-black").removeClass('fadebox-black').addClass('fadebox-hidden');
	
});