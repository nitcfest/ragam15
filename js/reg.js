$(function() {

		// var base_url = 'http://localhost/www/elegant-ragam/public/api/';
		var base_url = 'http://www.ragam.org.in/2015/cms/api/';

		
		//This code should run everytime page is reloaded. It checks if the user is logged in.
		var checkLoginStatus = function() {
			
			$.ajax({
			  url: base_url + 'user',
			  type: 'GET',
			  dataType: 'jsonp',
			  success: function(data, textStatus, xhr) {
			  	if(data.status == 'logged_in'){

			  		//Once logged in, a user object is returned.
			  		//console.log the object for better understanding.
			  		loggedInActions(data.user);			  		
			  	}else{
			  		//User is not logged in. Show login form.
			  		loggedOutActions();
			  	}

			  },
			  error: function(xhr, textStatus, errorThrown) {
			  	console.log('Could not load status! Show some error and ask user to try reloading the page.');
			  }
			});

		};


		var loggedInActions = function(user) {
			//Called only if user is logged in, and after successful logins/signups.

			//Hide the login/signup features.
			$('#div-login').hide();
			$('#div-signup').hide();

			$('#div-event-register').show();


			// Clear team members field on login.
			$('#team_members_select').val(null).trigger("change");
			
			//Change the code appropriately.
			var event_data = '';

			var start=true;
			user.events.forEach(function(this_event){
				
				if(!start)
					event_data+='<br>';

				start=false;

				event_data+=this_event.name + ' ('+this_event.team_members.length+' member(s) )';

				if(this_event.owner_id == user.id)
					event_data+=' || <a href="#" class="action-event-deregister" data-event_code="'+this_event.event_code+'">Delete Team (Deletes entire team)</a>';
				else
					event_data+=' || <a href="#" class="action-event-deregister" data-event_code="'+this_event.event_code+'">Leave Team (Does not delete team)</a>';
			});


			$('#div-user-details').html(
				'Name: '+user.name+'<br>'+
				'Email: '+user.email+'<br>'+
				'Ragam ID: RAG'+user.id+'<br>'+
				'Events Details: <br>'+event_data);

			$('#div-user-details').slideDown();
		};

		var loggedOutActions = function(){
			$('#div-event-register').hide();
			$('#div-signup').hide();
			$('#div-user-details').slideUp();

			$('#div-login').show();
		}

		checkLoginStatus();


		//On trying to login.
		$('#form-login').submit(function(event) {
			//Handle login form submit.

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

			  		//Once logged in, a user object is returned.
			  		//console.log the object for better understanding.
			  		loggedInActions(data.user);
			  	}else{
			  		$('#login-messages').html('Invalid email address/password.');
			  		$('#form-login input[name="password"]').val('');
			  	}
			  },
			  error: function(xhr, textStatus, errorThrown) {
			  	console.log('Error trying to login. Ask user to try again.');
			  }
			});


			//Return false disables page reload as we are working with ajax.
			return false;
		});


		//For logout
		$('#action-logout').click(function(event) {
			event.preventDefault();

			$.ajax({
			  url: base_url + 'user/logout',
			  type: 'GET',
			  dataType: 'jsonp',
			  success: function(data, textStatus, xhr) {
			  	loggedOutActions();
			  },
			  error: function(xhr, textStatus, errorThrown) {
			  	console.log('Error trying to log out.');
			  }
			});

		});



		//On clicking signup link
		$('#action-signup').click(function(event) {
			event.preventDefault();

			$('#div-signup').slideDown();
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
				processResults: function (data, page) {
			      return {
			      	results: data.colleges
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
            $('#div-add-college').slideDown();
		});


		$('#action-add-college').on('click', function(event) {
			event.preventDefault();

            var college_name = $('#name_new_college').val();

            $.ajax({
              url: base_url + 'colleges/new',
              type: 'GET',
              dataType: 'jsonp',
              data: { college_name: college_name },
              success: function(data, textStatus, xhr) {
              	if(data.result == 'success'){
              		$('#add-college-messages').html('Your college has been added and is pending validation.');
              	}else if(data.reason == 'invalid_name'){
              		$('#add-college-messages').html('Invalid college name.');
              	}else if(data.reason == 'name_exists'){
              		$('#add-college-messages').html('The college name you entered already exists OR is too generic. Try entering the specific college name. If this name has just been added, it might be pending validation.');
              	}
              },
              error: function(xhr, textStatus, errorThrown) {
              	console.log('Error adding college. Try again.');
              }
            });
		});







		// On Signup form submit
		$('#form-signup').submit(function(event) {

			$.ajax({
			  url: base_url + 'user/signup',
			  type: 'GET',
			  dataType: 'jsonp',
			  data: $('#form-signup').serialize(),
			  success: function(data, textStatus, xhr) {
			  	if(data.result == 'success'){
			  		$('#signup-messages').html('Signup complete. You may register for events.');

			  		//If success, the user will be automatically logged in.
			  		loggedInActions(data.user);
			  	}else{
			  		$('#signup-messages').html('Error signing up.<br>'+data.error_messages);
			  	}
			  },
			  error: function(xhr, textStatus, errorThrown) {
			  	console.log('Error signing up. Try again.');
			  }
			});

			//Return false disables page reload as we are working with ajax.
			return false;
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
			$.ajax({
			  url: base_url + 'event_register',
			  type: 'GET',
			  dataType: 'jsonp',
			  data: {
			  	'event_code' : 'WSO',
			  	'team_members' : $('#team_members_select').val(),
			  },
			  success: function(data, textStatus, xhr) {
				//This function updates the user profile with new event details.
				checkLoginStatus();

			  	if(data.result == 'success'){
			  		$('#event-register-messages').html('Event registration successfull. Your team ID is '+data.team_code);
			  		
			  		// Clear team members field.
			  		$('#team_members_select').val(null).trigger("change");

			  	}else if(data.result == 'fail' && data.reason == 'not_logged_in'){
			  		$('#event-register-messages').html('Please login before you register for events.');
			  		//User may have logged out in another tab.
			  		alert('Please login before you register for events.');
			  		loggedOutActions();
			  	}else if(data.result == 'fail' && data.reason == 'no_event'){
			  		$('#event-register-messages').html('Cannot register for this event.');
					//The event is not valid OR it has been invalidated.			  		
			  	}else if(data.result == 'fail' && data.reason == 'already_registered'){
			  		$('#event-register-messages').html('You are already registered for this event.');
			  		//The current user is already registered.
			  	}else if(data.result == 'fail' && data.reason == 'team_member_already_registered'){
			  		//A team member in the selected team has already registered.
			  		//The ID of the member is returned in data.existing_member
			  		$('#event-register-messages').html(data.existing_member+' is already registered for this event.');
			  	}else if(data.result == 'fail' && data.reason == 'team_too_big'){
			  		$('#event-register-messages').html('Your team size is too big.');
			  	}else if(data.result == 'fail' && data.reason == 'team_too_small'){
			  		$('#event-register-messages').html('Your team size is too small.');
			  	}



			  },
			  error: function(xhr, textStatus, errorThrown) {
			  	console.log('Error during registration. Try again.');
			  }
			});

			//Return false disables page reload as we are working with ajax.
			return false;
		});


		$('#div-user-details').on('click', '.action-event-deregister', function(event) {
			event.preventDefault();

			var event_code = $(this).data('event_code');

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
			  		checkLoginStatus();
			  		$('#user-messages').html('Event de-registered!');
			  	}else if(data.result == 'fail' && data.reason == 'not_logged_in'){
			  		$('#user-messages').html('Please login before you de-register events.');
			  		//User may have logged out in another tab.
			  		alert('Please login before you de-register events.');
			  		loggedOutActions();
			  	}else if(data.result == 'fail' && data.reason == 'no_event'){
			  		$('#user-messages').html('Cannot deregister this event.');
			  	}else if(data.result == 'fail' && data.reason == 'not_registered'){
			  		$('#user-messages').html('Not registered for this event.');
			  	}

			  },
			  error: function(xhr, textStatus, errorThrown) {
			  	console.log('Error during de-registering. Try again.');
			  }
			});

		});

	





	});	