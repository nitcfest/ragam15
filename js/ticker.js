$(function()
{
	var tTime = 4000;
		tObj = $('#ticker ol');
		tClass = 'currentTick';
		
	$(tObj).children().hide();
	$(tObj).children('li:first').addClass(tClass).show();
	
	setInterval(function()
	{
		var tCurrentObj = $(tObj).children('.' + tClass);
			tNext = $(tCurrentObj).next();
		if (tNext.length == 0)
		{
			$(tObj).children('li:last').removeClass().fadeOut();
			tNext = $(tObj).children('li:first');
			tNext.addClass(tClass);
		}
		else {
			tNext;
		}
		$(tNext).prev().removeClass().fadeOut();
		$(tNext).addClass(tClass).fadeIn();		
	}, tTime);
	
	var base_url = 'http://www.ragam.org.in/2015/cms/api/';
	jQuery.ajax({
		url: base_url,
		type: 'GET',
		dataType: 'jsonp',
		success: function(data, textStatus, xhr) 
		{
			var i=0;
			var entry = "";
			var news=data.updates;
		  	while(i<news.length)
		  	{
				entry=entry+"<li class=\"news\">"+news[i]+"</li>";
				i++;
		  	}
			$("ol").html(entry);
		},
		error: function(xhr, textStatus, errorThrown) 
		{
		  	$("ol").html('<li>Ticker updates here</li>');
		}
	});
});
