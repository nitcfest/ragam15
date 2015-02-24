$(function() 
{
	var base_url = 'http://www.ragam.org.in/2015/cms/api/';
	event.preventDefault();
	jQuery.ajax({
		url: base_url+'events',
		type: 'GET',
		dataType: 'jsonp',
		success: function(data, textStatus, xhr) 
		{
			if(data.length>0)
			{
				var events=data;
				var competitions=events[0];
				var html="";
				for(i=0;i<competitions.sub_categories.length;i++){
					html+="<li>";
					sub_cat=competitions.sub_categories[i];
					html+=("<h4>"+sub_cat['name']+"</h4>");
					html+="<ul>";
					sub_cat_events=sub_cat["events"];
					for(k=0;sub_cat_events&&k<sub_cat_events.length;k++){
						html+=("<li>"+"<a id='"+sub_cat_events[k]["event_code"]+"' class='event-name'>"+sub_cat_events[k]["name"]+"</a></li>");
					}
					html+="</ul>";
					html+="</li>";
				}	
				$("#elist").html(html);
				
			}				  	
		},
		error: function(xhr, textStatus, errorThrown) 
		{
		  	$('.categories').html('Error!');
		}
	});

	$('#elist').on('click', '.event-name', function(event) {
		event.preventDefault();
		jQuery.ajax(
		{
			url: base_url+'event/' + this.id,
			type: 'GET',
			dataType: 'jsonp',
		success: function(data, textStatus, xhr) 
		{
		  	if(data.response == 'success')
		  	{
		  		alert("working");
		  	}
		  	else{
		  		$('.event').html('Error - No event!');
		  	}		  	
			$('#eventContent').show('slide', {direction: 'right'}, 1000);
		},
		error: function(xhr, textStatus, errorThrown) {
			$('.event').html('Error!');
		}
		});
	});
});