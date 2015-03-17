$(function() {

	// Using pureforms. Read documentation to style them.
	// http://purecss.io/forms/

	$('#registration-action-login').click(function(event) {
		event.preventDefault();

		$.remodal.lookup[$('[data-remodal-id=show-registration-login]').data('remodal')].open();
	});

	$('#registration-action-register').click(function(event) {
		event.preventDefault();

		$.remodal.lookup[$('[data-remodal-id=show-registration-register]').data('remodal')].open();
	});

	$('#registration-action-user').click(function(event) {
		event.preventDefault();
		checkLoginStatus();

		$.remodal.lookup[$('[data-remodal-id=show-registration-user]').data('remodal')].open();
	});

	$('#registration-action-new-user').click(function(event) {
		event.preventDefault();

		$.remodal.lookup[$('[data-remodal-id=show-registration-login]').data('remodal')].close();
		$.remodal.lookup[$('[data-remodal-id=show-registration-register]').data('remodal')].open();
	});


	// For event register

	$('#action-register-button').click(function(event) {
		event.preventDefault();

		$.remodal.lookup[$('[data-remodal-id=show-registration-event]').data('remodal')].open();
	});


	var base_url = 'http://www.ragam.org.in/2015/cms/api/';
	
	var checkLoginStatus = function() {
		
		$.ajax({
		  url: base_url + 'user',
		  type: 'GET',
		  dataType: 'jsonp',
		  success: function(data, textStatus, xhr) {
		  	if(data.status == 'logged_in'){
		  		loggedInActions(data.user);			  		
		  	}else{
		  		loggedOutActions();
		  	}

		  },
		  error: function(xhr, textStatus, errorThrown) {
		  	console.log('Could not load status! Please reload page.');
		  }
		});

	};

	var loggedInActions = function(user) {
		$('#registration-action-login').hide();

		$('#registration-action-register').hide();
		$('#registration-action-user').show();
		$('#registration-action-logout').show();

		$('#registration-current-status').html('Welcome, '+user.name);

		$('#registration-data-name').html(user.name);
		$('#registration-data-id').html('RAG'+user.id);
		$('#registration-data-phone').html(user.phone);
		$('#registration-data-email').html(user.email);
		$('#registration-data-college').html(user.college);

		// Clear team members field on login.
		$('#team_members_select').val(null).trigger("change");
		
		//Change the code appropriately.
		var event_data = '';

		var has_event=false;
		user.events.forEach(function(this_event){
			has_event=true;

			event_data+='<tr>';

			event_data+= '<td>'+this_event.name+'</td>'+
						 '<td>'+this_event.team_code+'</td>';

			var team_members = '';
			var flag = 0;
			this_event.team_members.forEach(function(team_member){
				if(flag==1)
					team_members+=', ';
				flag = 1;
				team_members+= team_member.name + ' (RAG'+team_member.id+')';
			});

			event_data+= '<td>'+team_members+'</td>';

			if(this_event.owner_id == user.id)
				event_data+='<td><a href="#" class="pure-button button-error action-event-deregister" data-event_code="'+this_event.event_code+'">Delete Entire Team</a></td>';
			else
				event_data+='<td><a href="#" class="pure-button button-error action-event-deregister" data-event_code="'+this_event.event_code+'">Leave Team</a></td>';

			event_data+='</tr>';
		});

		if(!has_event)
			event_data+='<tr><td colspan="4">Not registered for any events.</td></tr>';

		$('#registration-table-events').html(event_data);
		$( "#close" ).trigger("click");
	};

	var loggedOutActions = function(){
		$('#registration-action-login').show();
		$( "#close" ).trigger("click");
		$('#registration-action-register').show();
		$('#registration-action-user').hide();
		$('#registration-action-logout').hide();

		$('#registration-current-status').html('You are not logged in yet.');			
	}

	
	//Check the status
	checkLoginStatus();

	//For logout
	$('#registration-action-logout').click(function(event) {
		event.preventDefault();

		$('#registration-current-status').html('<img src="img/loading.gif">');

		$.ajax({
		  url: base_url + 'user/logout',
		  type: 'GET',
		  dataType: 'jsonp',
		  success: function(data, textStatus, xhr) {
		  	loggedOutActions();
		  },
		  error: function(xhr, textStatus, errorThrown) {
		  	console.log('Error trying to log out.');
		  	$('#registration-current-status').html('');
		  }
		});

	});

	$('#form-login').submit(function(event) {
		//Handle login form submit.
		$('#login-messages').html('<img src="img/loading.gif">');
		$.ajax({
		  url: base_url + 'user/login',
		  type: 'GET',
		  dataType: 'jsonp',
		  data: $('#form-login').serialize(),
		  success: function(data, textStatus, xhr) {
		  	if(data.result == 'success'){

		  		//If success, clear the form.
		  		$('#form-login input[name="email"]').val('');
		  		$('#form-login input[name="password"]').val('');

		  		$('#login-messages').html('');

		  		loggedInActions(data.user);


		  		$.remodal.lookup[$('[data-remodal-id=show-registration-login]').data('remodal')].close();

		  	}else{
		  		$('#login-messages').html('Invalid email address/password.');
		  		$('#form-login input[name="password"]').val('');
		  	}
		  },
		  error: function(xhr, textStatus, errorThrown) {
		  	console.log('Error trying to login.');
		  	$('#login-messages').html('');
		  }
		});


		//Return false disables page reload as we are working with ajax.
		return false;
	});


	// Uses Select2 for loading college name. 
	//Refer https://select2.github.io/

	function formatCollege (college) {
	    if (college.loading) return 'Loading...';

	    var markup =  '<div>'+college.name+'</div>';

	    return markup;
	  }

	  function formatCollegeSelection (college) {
	    return '<div style="height:28px;">'+ (college.name || '<span style="color:#787878">Select your college...</span>') +'</div>';
	  }

	//initialize the college select box
	$("#college_select").select2({
		ajax: {
			url: base_url + "colleges",
			dataType: 'jsonp',
			delay: 250,
			data: function (params) {
				return {
			        q: params.term,
			        page: params.page
			    	};
			},
			processResults: function (data, params) {

			    params.page = params.page || 1;
			    return {
			        results: data.colleges,
			        pagination: {
			          more: (params.page * 30) < data.total_count
			        }
			    };
			},
		  	cache: true
		},
		escapeMarkup: function (markup) { return markup; },
		minimumInputLength: 2,
		templateResult: formatCollege,
		templateSelection: formatCollegeSelection,
	});


	//Handle adding colleges
	$("#action-show-add-college").on('click', function(event) {
		event.preventDefault();
        $('#div-add-college').slideToggle();
	});

	$('#action-add-college').on('click', function(event) {
		event.preventDefault();

        var college_name = $('#name_new_college').val();
        var email = $('#data-registration-email').val();
        var name = $('#data-registration-name').val();
        var phone = $('#data-registration-phone').val();

        $('#add-college-messages').html('<img src="img/loading.gif">');


        $.ajax({
          url: base_url + 'colleges/new',
          type: 'GET',
          dataType: 'jsonp',
          data: { college_name: college_name, email: email, name: name, phone: phone },
          success: function(data, textStatus, xhr) {
          	if(data.result == 'success'){
          		$('#add-college-messages').html('<br>Your college has been added and is pending validation.');
          	}else if(data.reason == 'invalid_name'){
          		$('#add-college-messages').html('<br>Invalid college name.');
          	}else if(data.reason == 'name_exists'){
          		$('#add-college-messages').html('<br>The college name you entered already exists, or is too generic. Try entering the complete college name. If this name has just been added, it might be pending validation.');
          	}
          },
          error: function(xhr, textStatus, errorThrown) {
          	$('#add-college-messages').html('');
          	console.log('Error adding college. Try again.');
          }
        });
	});




	// On Signup form submit
	$('#form-signup').submit(function(event) {
		$('#signup-messages').html('<img src="img/loading.gif">');

		$.ajax({
		  url: base_url + 'user/signup',
		  type: 'GET',
		  dataType: 'jsonp',
		  data: $('#form-signup').serialize(),
		  success: function(data, textStatus, xhr) {
		  	if(data.result == 'success'){
				alertify.alert('Signup complete.<br>Please note down your Ragam ID: RAG'+data.user.id+'.<br> You may register for events.');

		  		//If success, the user will be automatically logged in.
		  		loggedInActions(data.user);

		  		$.remodal.lookup[$('[data-remodal-id=show-registration-register]').data('remodal')].close();
		  	}else{
		  		alertify.alert('Error signing up.<br>'+data.error_messages);
		  	}
		  },
		  error: function(xhr, textStatus, errorThrown) {
		  	$('#signup-messages').html('');

		  	console.log('Error signing up. Try again.');
		  }
		});

		//Return false disables page reload as we are working with ajax.
		return false;
	});



	$('#registration-table-events').on('click', '.action-event-deregister', function(event) {
		event.preventDefault();

		var event_code = $(this).data('event_code');

		var this_parent = $(this).parents('tr');

		$('#registration-action-loading').html('<img src="img/loading.gif">');

		$.ajax({
		  url: base_url + 'event_deregister',
		  type: 'GET',
		  dataType: 'jsonp',
		  data: {
		  	'event_code' : event_code,
		  },
		  success: function(data, textStatus, xhr) {
			//This function updates the user profile with new event details.
		  	if(data.result == 'success'){
		  		setTimeout(checkLoginStatus, 1500);

		  		this_parent.html('<td colspan="4">Event Deregistered.</td>');
		  	}else if(data.result == 'fail' && data.reason == 'not_logged_in'){
		  		this_parent.html('<td colspan="4">Please log in again..</td>');
		  		loggedOutActions();
		  	}else if(data.result == 'fail' && data.reason == 'no_event'){
		  		this_parent.html('<td colspan="4">An error occured.</td>');
		  	}else if(data.result == 'fail' && data.reason == 'not_registered'){
		  		this_parent.html('<td colspan="4">Already deregistered.</td>');
		  	}

		  	$('#registration-action-loading').html('');
		  },
		  error: function(xhr, textStatus, errorThrown) {
		  	$('#registration-action-loading').html('');
		  	this_parent.html('<td colspan="4">An error occured.</td>');
		  }
		});
	});

	



	// Uses Select2 for loading TEAM MEMBERS
	//Refer https://select2.github.io/

	function formatTeamMembers (user) {
	    if (user.loading) return 'Loading...';

	    var markup =  '<div>('+user.full_id+') '+user.name+'</div>';

	    return markup;
	  }

	  function formatTeamMembersSelection (user) {
	    return user.name;
	  }

	//initialize the team member select box.
	$("#team_members_select").select2({
		ajax: {
			url: base_url + "users",
			dataType: 'jsonp',
			delay: 250,
			data: function (params) {
				return {
			        q: params.term,
			        page: params.page
			    	};
			},
			processResults: function (data, page) {
		      return {
		      	results: data.users
		      };
		  },
		  cache: true
		},
		escapeMarkup: function (markup) { return markup; },
		minimumInputLength: 2,
		templateResult: formatTeamMembers,
		templateSelection: formatTeamMembersSelection,

		placeholder : 'Team',
		multiple:true,		
		maxSelectionLength : 20//Maximum number of team members that can be selected.
							 //Change this depending on team size!!!
	});





	// On Event Register form submit
	$('#form-event-register').submit(function(event) {

		$('#event-register-messages').html('<img src="img/loading.gif">');

		$.ajax({
		  url: base_url + 'event_register',
		  type: 'GET',
		  dataType: 'jsonp',
		  data:  {
		  	'event_code' : $('#registration-event-code').val(),
		  	'team_members' : $('#team_members_select').val(),
		  },
		  success: function(data, textStatus, xhr) {
			//This function updates the user profile with new event details.
			checkLoginStatus();

		  	if(data.result == 'success'){
		  		$('#event-register-messages').html('<br>Event registration successfull. Your team ID is <strong>'+data.team_code+'</strong>');
		  		
		  		// Clear team members field.
		  		$('#team_members_select').val(null).trigger("change");

		  		$('#register-button-space').hide();
		  		$('#register-message-space').show();

		  	}else if(data.result == 'fail' && data.reason == 'not_logged_in'){
		  		$('#event-register-messages').html('<br>Please login before you register for events.');
		  		//User may have logged out in another tab.
		  		
		  		loggedOutActions();
		  	}else if(data.result == 'fail' && data.reason == 'no_event'){
		  		$('#event-register-messages').html('<br>An error occured.');
				//The event is not valid OR it has been invalidated.			  		
		  	}else if(data.result == 'fail' && data.reason == 'already_registered'){
		  		$('#event-register-messages').html('<br>You are already registered for this event.');
		  		//The current user is already registered.
		  	}else if(data.result == 'fail' && data.reason == 'team_member_already_registered'){
		  		//A team member in the selected team has already registered.
		  		//The ID of the member is returned in data.existing_member
		  		$('#event-register-messages').html('<br>'+data.existing_member+' is already registered for this event.');
		  	}else if(data.result == 'fail' && data.reason == 'team_too_big'){
		  		$('#event-register-messages').html('<br>Your team size is too big.');
		  	}else if(data.result == 'fail' && data.reason == 'team_too_small'){
		  		$('#event-register-messages').html('<br>Your team size is too small.');
		  	}


		  },
		  error: function(xhr, textStatus, errorThrown) {
		  	console.log('Error during registration. Try again.');
		  	$('#event-register-messages').html('');
		  }
		});

		//Return false disables page reload as we are working with ajax.
		return false;
	});



});	