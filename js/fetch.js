$(function() 
{
	var load=0;
	var base_url = 'http://www.ragam.org.in/2015/cms/api/';
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
				var html='<ul class="ech-grid">';
				var pic_num=1;
				for(i=0;i<competitions.sub_categories.length;i++){
					sub_cat=competitions.sub_categories[i];
					html+=('<li><div class="ech-item"><div class="ech-info-wrap"><div class="ech-info"><div class="ech-info-front ech-img-'+pic_num+'"></div><div class="ech-info-back">');
					html+="<div style='display:table;width: 100%;height: 100%;'><div style='display:table-cell;vertical-align:middle;'><ul>";
					pic_num++;
								
												
					sub_cat_events=sub_cat["events"];
					for(k=0;sub_cat_events&&k<sub_cat_events.length;k++){
						html+=("<li style='height:auto !important;width:auto !important;margin:0;display:block;' class='event_name_li'>"+"<a id='"+sub_cat_events[k]["event_code"]+"' title='"+sub_cat_events[k]["short_description"]+"' class='event-name pageload-link'>"+sub_cat_events[k]["name"]+"</a></li>");
					}
					html+="</ul>";
					html+="</div></div></div></div></div></li>";
				}	
				html+="</div></ul>";
				$("#elist").html(html);
			}				  	
		},
		error: function(xhr, textStatus, errorThrown) 
		{
		  	$('.categories').html('Error!');
		}
	});
	
	$("#fadebox").fadeOut(1500);


	var fetch_event = function(event_code){
		jQuery.ajax(
		{
			url: base_url+'event/' + event_code,
			type: 'GET',
			dataType: 'jsonp',
		success: function(data, textStatus, xhr) 
		{
		  	if(data.response == 'success')
		  	{
		  		//Set up registration essentials.
		  		$('#registration-team-size-container').show();
		  		$('#registration-data-event-name').html(data.name);
				$('#registration-data-team-size').html(data.team_min+'/'+data.team_max);
				$('#registration-event-code').val(data.event_code);
				$('#event-register-messages').html('');

				if(data.registration.status == 'registered'){
					$('#register-message-space').html('You have registered for this event.');
					$('#register-button-space').hide();
					$('#register-message-space').show();
				}else if(data.registration.status == 'not_logged_in'){
					$('#register-message-space').html('Please login to register.');
					$('#register-button-space').hide();
					$('#register-message-space').show();
				}else{
					$('#register-button-space').show();
					$('#register-message-space').hide();
				}


		  		//Event Title
		  		$("#event_title").html(data.name);
		  		//Prize Money
		  		$("#Prize_Money").html('<h2>Prize Money</h2><br>'+data.prizes);
		  		//Participation
		  		$("#participation").css("display","block");
		  		

		  		if( parseInt(data.team_max) == 99){
		  			//No limit for maximum
		  			$("#participation").css("display","none");
		  			$('#registration-team-size-container').hide();
		  			$('#registration-select-team').show();
		  		}else if( parseInt(data.team_min) == 0 && parseInt(data.team_max) ==0){
		  			//Disable registration for these events.
		  			//These are supposed to be informational events OR on spot registration.
		  			$('#register-button-space').hide();
		  			$('#register-message-space').hide();
		  			$("#participation").hide();

		  		}else if(parseInt(data.team_min) > parseInt(data.team_max) ){
		  			//Some mismatch in event details.
		  			//Disable registration too.

		  			$('#register-button-space').hide();
		  			$('#register-message-space').hide();
		  			$("#participation").hide();

	  				$('#registration-select-team').hide();

		  		}else if( parseInt(data.team_min) == parseInt(data.team_max) ) {	
		  			if( parseInt(data.team_min) ==1){
		  				$("#participation").html('Solo Event');
		  				$('#registration-select-team').hide();
		  			}else{
		  				$("#participation").html('Teams of '+data.team_min);
		  				$('#registration-select-team').show();
		  			}
		  		}else{
		  			$("#participation").html('Teams of '+data.team_min+' - '+data.team_max+' participants');
		  			$('#registration-select-team').show();
		  		}


		  		

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

	}
	$('#elist,#wlist').on('click', '.event-name', function(event) {
		// event.preventDefault();
		fetch_event(this.id);
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