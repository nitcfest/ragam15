$(document).ready(function($) {
	$(function() 
	{
		var base_url = 'http://www.ragam.org.in/2015/cms/api/';
		$('.event').on('click', function(event) 
		{
			event.preventDefault();
			jQuery.ajax({
			  url: base_url+'event/' + $(this).attr('id'),
			  type: 'GET',
			  dataType: 'jsonp',
			  success: function(data, textStatus, xhr) 
			  {
			  	if(data.response == 'success')
			  	{
					alert($(this).attr('id'));
			  		$("#event_title").html(data.name);
			  		$("#Prize_money").html(data.prizes);
			  	}
			  	else
			  	{
					alert("1");
			  		$('.event').html('Error - No event!');
			  	}		  				  		  	
			  },
			  error: function(xhr, textStatus, errorThrown)
			  {
					alert("no");
			  	$('.event').html('Error!');
			  }
			});
		});
	});
});