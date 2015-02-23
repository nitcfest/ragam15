$(document).ready(function($) {

$(function() 
{
	var base_url = 'http://www.ragam.org.in/2015/cms/api/';
	$('.event').on('click', function(event) 
	{
		alert($(this).attr('id'));
		event.preventDefault();
		jQuery.ajax({
		  url: base_url+'event/' + $(this).attr('id'),
		  type: 'GET',
		  dataType: 'jsonp',
		  success: function(data, textStatus, xhr) 
		  {
		  	if(data.response == 'success')
		  	{
		  		alert("1");
		  		$("#event_title").html(data.name);
		  	}
		  	else
		  	{
		  		$('.event').html('Error - No event!');
		  	}		  				  		  	
		  },
		  error: function(xhr, textStatus, errorThrown)
		  {
		  	$('.event').html('Error!');
		  }
		});
	});

		});
});