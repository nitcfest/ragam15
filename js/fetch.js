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
						html+=("<li>"+"<a id='"+sub_cat_events[k]["event_code"]+"' class='event-name pageload-link'>"+sub_cat_events[k]["name"]+"</a></li>");
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
		  		$("#event_title").html(data.name);
		  		$("#Prize_Money").html('<h2>Prize Money</h2><br>'+data.prizes);
		  		$("#participation").css("display","block");
		  		if(data.team_min>data.team_max)
		  			$("#participation").css("display","none");
		  		else if(data.team_min==data.team_max)
		  		{	
		  			if(data.team_min==1)
		  				$("#participation").html('Solo Event');
		  			else
		  				$("#participation").html('Teams of '+data.team_min);
		  		}
		  		else
		  			$("#participation").html('Teams of '+data.team_min+' - '+data.team_max+' participants');

		  	}
		  	else{
		  		$('.event').html('Error - No event!');
		  	}		  	
		  	loaderEvents();
			$('#eventContent').delay(1000).show(1000); /////Event loader
		},
		error: function(xhr, textStatus, errorThrown) {
			$('.event').html('Error!');
		}
		});
	});
});