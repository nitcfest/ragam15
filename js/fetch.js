$(function() 
{
	var load=0;
	var base_url = 'http://ragam.org.in/2015/cms/api/';
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
				$("#fadebox").fadeOut(1500);

	$('#elist').on('click', '.event-name', function(event) {
		// event.preventDefault();
		jQuery.ajax(
		{
			url: base_url+'event/' + this.id,
			type: 'GET',
			dataType: 'jsonp',
		success: function(data, textStatus, xhr) 
		{
		  	if(data.response == 'success')
		  	{
		  		console.log(data.event_code);
		  		//Event Title
		  		$("#event_title").html(data.name);
		  		//Prize Money
		  		$("#Prize_Money").html('<h2>Prize Money</h2><br>'+data.prizes);
		  		//Participation
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
		  		//Contacts
		  		var i=0;
		  		var cont=data.contacts
		  		var entry="<h2>Contacts</h2><br>";
		  		while(i<cont.length)
		  		{
					entry=entry+cont[i].name+"<br>";
					entry=entry+cont[i].phone+"<br>";
					if(cont[i].email)
						entry=entry+cont[i].email+"<br>";
					entry=entry+"<br>";
					i++;
		  		}
		  		$("#Contacts").html(entry);
		  		//Sections 
		  		i=0;
		  		sect=data.sections
		  		entry="";
		  		while(i<sect.length)
		  		{
					entry=entry+"<span id=\""+sect[i].title+"\" style=\"background-color: rgb(33, 155, 220);\">"
					entry=entry+"<h2>"+sect[i].title+"<\/h2><br>";
					entry=entry+sect[i].text+"<\/span>";
					i++;
		  		}
		  		$("#event_text_right").html(entry);


		  	}
		  	else{
		  		$('.event').html('Error - No event!');
		  	}		  	
		  	loaderEvents();
			$('#eventContent').delay(1000).show(1000); /////Event loader
			$( "#close" ).click(function() {
  				$( "#eventContent" ).fadeOut();
  				$("body").removeClass("noscroll");
			});
		},
		error: function(xhr, textStatus, errorThrown) {
			$('#elist').html('Error!');
		}
		});
	});
	$('#wlist').on('click', '.event-name', function(event) {
			// event.preventDefault();
			jQuery.ajax(
			{
				url: base_url+'event/' + this.id,
				type: 'GET',
				dataType: 'jsonp',
			success: function(data, textStatus, xhr) 
			{
			  	if(data.response == 'success')
			  	{
			  		console.log(data.event_code);
			  		//Event Title
			  		$("#event_title").html(data.name);
			  		//Prize Money
			  		$("#Prize_Money").html('<h2>Prize Money</h2><br>'+data.prizes);
			  		//Participation
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
			  		//Contacts
			  		var i=0;
			  		var cont=data.contacts
			  		var entry="<h2>Contacts</h2><br>";
			  		while(i<cont.length)
			  		{
						entry=entry+cont[i].name+"<br>";
						entry=entry+cont[i].phone+"<br>";
						if(cont[i].email)
							entry=entry+cont[i].email+"<br>";
						entry=entry+"<br>";
						i++;
			  		}
			  		$("#Contacts").html(entry);
			  		//Sections 
			  		i=0;
			  		sect=data.sections
			  		entry="";
			  		while(i<sect.length)
			  		{
						entry=entry+"<span id=\""+sect[i].title+"\" style=\"background-color: rgb(33, 155, 220);\">"
						entry=entry+"<h2>"+sect[i].title+"<\/h2><br>";
						entry=entry+sect[i].text+"<\/span>";
						i++;
			  		}
			  		$("#event_text_right").html(entry);


			  	}
			  	else{
			  		$('.event').html('Error - No event!');
			  	}		  	
			  	loaderEvents();
				$('#eventContent').delay(1000).show(1000); /////Event loader
				$( "#close" ).click(function() {
	  				$( "#eventContent" ).fadeOut();
	  				$("body").removeClass("noscroll");
				});
			},
			error: function(xhr, textStatus, errorThrown) {
				$('#elist').html('Error!');
			}
			});
		});

/*******Workshops List*********
jQuery.ajax({
		url: base_url+'events',
		type: 'GET',
		dataType: 'jsonp',
		success: function(data, textStatus, xhr) 
		{
			if(data.length>0)
			{
				var events=data;
				var competitions=events[1];
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
				$("#wlist").html(html);
			}				  	
		},
		error: function(xhr, textStatus, errorThrown) 
		{
		  	$('.categories').html('Error!');
		}
	});*/


});
function insertParam(key, value)
{
    key = encodeURI(key); value = encodeURI(value);

    var kvp = document.location.search.substr(1).split('&');

    var i=kvp.length; var x; while(i--) 
    {
        x = kvp[i].split('=');

        if (x[0]==key)
        {
            x[1] = value;
            kvp[i] = x.join('=');
            break;
        }
    }

    if(i<0) {kvp[kvp.length] = [key,value].join('=');}

    //this will reload the page, it's likely better to store this until finished
    document.location.search = kvp.join('&'); 
}
// insertParam("Asd","asd");