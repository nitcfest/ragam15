<?php
if(isset($_GET["events"]))
$event_code=$_GET["events"];
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Ragam 2015</title>
		<meta name="description" content="Ragam 2015, NIT Calicut's Annual Cultural Festival" />
		<meta name="keywords" content="ragam, raagam, nitc, nit calicut, tathva, raga, raaga" />
		<meta name="author" content="Ragam Creative Team" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<link rel="stylesheet" type="text/css" href="css/modalload.css"/>
		<link rel="stylesheet" type="text/css" href="css/ticker.css"/>
		<link rel="stylesheet" type="text/css" href="css/celebtalk.css"/>
		
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>


		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Registration -->
		<link rel="stylesheet" type="text/css" href="css/registration/select2.min.css">
		<link rel="stylesheet" type="text/css" href="css/registration/jquery.remodal.css">		
		<link rel="stylesheet" type="text/css" href="css/registration/pure-nr-min.css">		
		<link rel="stylesheet" type="text/css" href="css/registration/registration.css">


	</head>
	<body>
		<div id="fadebox"></div>
		<div id="backgrounds">
			<div id="grad1" class="background"></div>
			<div id="grad2" class="background"></div>
			<div id="grad3" class="background"></div>
			<div id="grad4" class="background"></div>
			<div id="grad5" class="background"></div>
			<div id="grad6" class="background"></div>
		</div>


		<div id="rest">


			<div class="registration-bar">			
				<button id="registration-action-login" type="button" class="pure-button button-xsmall button-success" style="display:none;">LOGIN</button>
				<button id="registration-action-register" type="button" class="pure-button button-xsmall" style="display:none;">REGISTER</button>
				<button id="registration-action-user" type="button" class="pure-button button-xsmall button-secondary" style="display:none;">VIEW PROFILE</button>
				<button id="registration-action-logout" type="button" class="pure-button button-xsmall button-warning" style="display:none;">LOG OUT</button>
				<span id="registration-current-status">&nbsp;</span>
			</div>


			<div class="remodal" data-remodal-id="show-registration-login" data-remodal-options="hashTracking: false">
				<div class="pure-g">
				    <div class="pure-u-1">
				    	<form action="" id="form-login" method="POST" role="form" class="pure-form">
				    		<h3>Have an account? Login.</h3><br>
				    		<a href="http://www.ragam.org.in/2015/cms/api/user/fb_login"><img src="img/fb_login.png"></a><br><br>
				    		<input class="pure-input-1" type="email" name="email" placeholder="Your email address" required>
				    		<br><br>
				    		<input class="pure-input-1" type="password" name="password" placeholder="Your password" required>
				    		<br><br>
				    		<button type="submit" class="pure-button button-success">Log in</button>
				    		<button type="button" id="registration-action-new-user" class="pure-button button-secondary">New User</button>

				    		<span id="login-messages"></span>
				    	</form>
				    </div>
				</div>
			</div>
			<div class="remodal" data-remodal-id="show-registration-register" data-remodal-options="hashTracking: false">
				<div class="pure-g">
				    <div class="pure-u-1">
				    	<h3>Create a new account.</h3>
				    	<br>
				    	<a href="http://www.ragam.org.in/2015/cms/api/user/fb_login"><img src="img/fb_login.png"></a><br><br>
						<p>Note that if you have already logged in with Facebook, you cannot use the same email to register another account.</p>
						<form action="" id="form-signup" method="POST" role="form" class="pure-form">
							<input class="pure-input-1" type="text" name="name" placeholder="Full name">
							<br><br>
							<input class="pure-input-1" type="text" name="email" placeholder="Email address">
							<br><br>
							<input class="pure-input-1" type="password" name="password" placeholder="Password">
							<br><br>
							<input class="pure-input-1" type="password" name="password_confirmation" placeholder="Confirm password">
							<br><br>
							<input class="pure-input-1" type="text" name="phone" placeholder="Phone number">
							<br><br>
							<select name="college" id="college_select" style="width:100%;">
								<option value="0">Loading...</option>
							</select>
							<br><br><br>
							Don't see your college? <a href="#" id="action-show-add-college">Add it here</a>. 
							<div id="div-add-college" style="display:none;">
								<small>You'll be able to register only after your college is verified by the Ragam team.</small><br><br>
								<input type="text" id="name_new_college" placeholder="Full college name" style="width:100%;">
								<br><br>
								<button type="button" id="action-add-college" class="pure-button">Add College</button>
								<span id="add-college-messages"></span>
							</div>

							<br><br>

							Do you need hospitality services during Ragam '15?
							<label class="pure-radio">
								<input type="radio" name="hospitality_type" value="0" checked="checked">
								I do not require accomodation.
							</label>
							<label class="pure-radio">
								<input type="radio" name="hospitality_type" value="1">
								I would like accomodation.
							</label>

							<button type="submit" class="pure-button button-success">Register </button>
							
							<span id="signup-messages"></span>
						</form>
					</div>
				</div>
			</div>

			<div class="remodal" data-remodal-id="show-registration-user" data-remodal-options="hashTracking: false">
				<div class="pure-g">
				    <div class="pure-u-1">
			    		<h3>Your Profile</h3>

			    		<table class="pure-table table-unbordered">
			    		    <tbody>
			    		        <tr>
			    		            <td>Name</td>
			    		            <td>:</td>
			    		            <td id="registration-data-name"></td>
			    		        </tr>
			    		        <tr>
			    		            <td>Ragam ID</td>
			    		            <td>:</td>
			    		            <td id="registration-data-id"></td>
			    		        </tr>
			    		        <tr>
			    		            <td>Email</td>
			    		            <td>:</td>
			    		            <td id="registration-data-email"></td>
			    		        </tr>
			    		        <tr>
			    		            <td>Phone</td>
			    		            <td>:</td>
			    		            <td id="registration-data-phone"></td>
			    		        </tr>
			    		        <tr>
			    		            <td>College</td>
			    		            <td>:</td>
			    		            <td id="registration-data-college"></td>
			    		        </tr>
			    		    </tbody>
			    		</table>

			    		<h3>Events Registered</h3>
			    		<table class="pure-table">
			    		    <thead>
			    		        <tr>
			    		            <th>Event Name</th>
			    		            <th>Team Code</th>
			    		            <th>Team Members</th>
			    		            <th>Action <span id="registration-action-loading"></span></th>
			    		        </tr>
			    		    </thead>
			    		    <tbody id="registration-table-events">
			    		    </tbody>
			    		</table>

				    </div>
				</div>
			</div>
			<div class="remodal" data-remodal-id="show-registration-event" data-remodal-options="hashTracking: false">
				<div class="pure-g">
				    <div class="pure-u-1">
				    	<h3>Register for an event</h3>

				    	<form action="" id="form-event-register" method="POST" role="form">		

				    		<table class="pure-table pure-table-bordered">
				    		    <tbody>
				    		    	<tr>
				    		    		<td>Event Name</td>
				    		    		<td id="registration-data-event-name">..</td>
				    		    	</tr>
				    		    	<tr>
				    		    		<td>Team Size (Min/Max)</td>
				    		    		<td id="registration-data-team-size">..</td>
				    		    	</tr>
				    		    </tbody>
				    		</table>
				    		<input type="hidden" name="event_code" id="registration-event-code" value="">

				    		<div id="registration-select-team">
					    		<label><strong>Add your team members</strong></label>
					    		<select name="team_members" id="team_members_select" style="width:100%;">
					    		</select>
					    		<br><br>
					    		<ul>
					    			<li>Click inside the text field below.</li>
					    			<li>Type in your Team Member's name or Ragam ID (The user should already be registered on the website) to search for the user.</li>
					    			<li>Click on the name to select as your team member. Similarly, add other team members. (You don't have to add yourself again)</li>
					    		</ul>
					    	</div>
				    		<br><br>
				    		<button type="submit" class="pure-button button-success">Confim Registration</button>

				    		<span id="event-register-messages"></span>
				    	</form>
				    </div>
				</div>
			</div>


			<a href="./" style="position:fixed;z-index:400;top:10px;right:10px;">
				<div id="home-button" style="width:40px;height:40px;border-radius:20px;">
				<div id="asd" style="margin-top: 37px;position: absolute;color: white;font-size:14px;"> HOME</div>
				</div>
			</a>
			<div id="mute-button" class="not_muted" style="position:fixed;z-index:400;left:10px;bottom:10px;width:40px;height:40px;border-radius:20px;">
			</div>
<!--**********************************************1EVENTS START*******************-->				
			<div id="Events" class="sec">
				<div style="height:98%;width:28%;float:left;">
					<div id="events-head-place" class="head-place3">
						<div id="events-head" class="head">
							Competitions
						</div>
					</div>
					<div id="events-words-place" class="words-place3">
						Rekindle the hero within you. 
						</br>Fight in the battle of your life. 
						</br>Emerge triumphant, and the trophy shall be waiting for you.
					</div>
					<div id="events-sprite" class="sprite">
						<img src="img/events.jpg" style="width: 200%;">
					</div>
				</div>
				<div id="pagewrap">
					<div id="event_list" style="height:100%;width:70%;float:left">
						<ul id="elist"></ul>
					</div>
					<div id="eventContent" class="container" id="page-2" style="position:fixed;z-index:500;">
						<div id="content_wrap" style="background-image: none; background-color: rgb(33, 155, 220);">
							<div id="close">
								<div id="closein">
								</div>
							</div>
							<div id="event_wrap">
								<div id="event_head-place">
							    	<span-place id="event_title"></span>
							    	<span id="reg_response"></span>
							  	</div>
							  	<div id="event_main">
							    	<div id="event_text">
							      		<span id="event_text_left">
							      			<!-- <span id="cat_bg"></span> -->
							      			<span id="register-button-space" style="display:none;"><button type="button" id="action-register-button" class="pure-button button-secondary">Register for Event</button></span>
							      			<span id="register-message-space" style="display:none;">You have registered for this event.</span>

							      			<span id="participation"></span>
							      			<span id="Prize_Money"></span>
							      			<span id="Contacts"></span>
							      		</span>
							      		<span id="event_text_right">
							      			<span id="Introduction" style="background-color:rgb(33, 155, 220);"></span>
							      			<span id="Rules and Regulations" style="background-color:rgb(33, 155, 220);"></span>
										</span>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			

<!--**********************************************EVENTS END*******************-->				
<!--**********************************************2WORKSHOPS START*******************-->				

			<div id="Workshops" class="sec">
				<div id="Workshop-left" style="height:100%;width:50%;float:left">
					<div id="workshop_coming_soon" class="comingsoon">COMING SOON</div>
					<ul id="wlist">
		  			</ul>
				</div>
				<div style="height:100%;width:50%;float:left">
					<div id="workshops-head-place" class="head-place">
						<div id="workshops-head" class="head">
							Workshops
						</div>
					</div>
					<div id="workshops-words-place" class="words-place">
						Hone your skills to get that edge.<br/>
						Learn from the best and beat the rest.
					</div>
					<div id="workshops-sprite" class="sprite">
						<img src="img/Workshops.png"/>
					</div>
					<div id="workshop-text-space"></div>
				</div>

			</div>
<!--**********************************************WORKSHOPS END*******************-->				
<!--**********************************************3PROSHOWS START*******************-->				
			
			<div id="Proshows" class="sec">
				<div style="height:100%;width:50%;float:left">
					<div id="proshows-head-place" class="head-place2">
						<div id="proshows-head" class="head">
							Proshows
						</div>
					</div>
					<div id="proshows-words-place" class="words-place2">
					</div>
					<div id="sprite1" class="sprite2">
					</div>
				</div>
				<div style="height:100%;width:50%;float:left">
					<div class="center-attraction">
						Too anxious to know about all the major events?<br/>
						Expect a few surprises in the coming days..<br/>
						Stay tuned for updates.
					</div>
					<div id="proshow_coming_soon" class="comingsoon2">COMING SOON</div>
				</div>
			</div>
<!--**********************************************3PROSHOWS END*******************-->
<!--**********************************************SNEHARAGAM*******************-->								
			<div id="sneharagam" class="sec">
				<div style="height:100%;width:50%;float:left">
					<div id="sneha-head-place" class="head-place">
						<div id="sneha-head" class="head">
							Sneharagam
						</div>
					</div>
					<div id="sneha-words-place" class="words-place">
						
					</div>
					<div id="sneha-sprite" class="sprite"></div>
				</div>
				<div style="height:100%;width:50%;float:left">
					<div id="sneha_coming_soon" class="comingsoon3">COMING SOON</div>
				</div>
			</div>
<!--**********************************************SNEHARAGAM ENDS*******************-->	
<!--**********************************************4INFO START*******************-->		
			<div id="CelebTalks" class="sec">
				<div id="ctalk-overlay">
					<div id="ctalk-box">
					<div id="lbox"></div>
					<div id="rbox">
						<div id="ctalk-header">
						<h3>Jagadish</h3>
						<h5>Actor | Screen writer</h5>
						</div>
						<span class="close rounded black"></span>
						<div id="ctalk-container">
						<p style="color:#67919c;text-align:justify;font-size:.7em;width:89%;padding-top:20px;">
						
						
						Shri Jagadish , renowned film actor and screenwriter is no stranger to the Kerala film industry. His talent is immortalised in the Malayalam film industry through his memorable performances in films like In Harihar Nagar, Godfather, His Highness Abdullah, No 20 Madras Mail, Aye Auto, Sethurama Iyer CBI ,Mantrikacheppu, and Hitler. He has starred in more than 300 films and has established for himself the image of a comic hero who evokes spontaneous laughter with his own brand of humour.
						</p>
						</div>
						
					</div>
					</div>
				</div>
				<div style="height:100%;width:30%;float:left">
					<div id="Highlights-head-place" class="head-place">
						<div id="Highlights-head" class="head">
							Celebrity Talks
						</div>
					</div>
					<div id="Highlights-words-place" class="words-place">
						
					</div>
					<div id="Highlights-sprite" class="sprite"></div>
				</div>
				<div style="height:100%;width:70%;float:left;margin-top:8%;">
				
					<ul class="ch-grid">
						<li>
							<div class="ch-item ch-img-2">
								<div class="ch-info md-trigger" data-modal="modal-11">
									<h3>Jagadish</h3>
									<p>Actor | Screenwriter</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="Info" class="sec">
				<div id="info_scroll" style="height:100%;width:70%;float:left;position:absolute">
					<div id="info-container">
						<div id="info-menu">
							<button class="info-but" id="but-reg">Registration</button>
							<button class="info-but" id="but-hosp">Hospitality</button>
							<button class="info-but" id="but-reach">Reach Us</button>
							<button class="info-but" id="but-faq">FAQ</button>
						</div>
						<div class= "info-tab" id="tab-reg">
							<h2>	TO BE UPDATED SOON...</h2>
						</div>
						<div class= "info-tab" id="tab-hosp">
							<h2>	TO BE UPDATED SOON... </h2>
						</div>
						<div class= "info-tab" id="tab-reach">
							<h2>How To Reach NIT Calicut</h2>
							<h3>
								By Road:
							</h3>
							
							Just follow the yellow brick road. Just kidding! You can reach NIT Calicut by taxi 
							from the Kozhikode (Calicut) bus station (KSRTC or private bus station) and the 
							taxi fare is approximately Rs. 400/- You can reach NIT Calicut by autoriksha from 
							the Kozhikode (Calicut) bus station (KSRTC or private bus station) and the fare is 
							approximately Rs. 300/-
							</br>
							OR
							</br>
							You can reach NIT Calicut by bus from Kozhikode (Calicut) bus station (KSRTC or 
							private bus station). From these bus stations go to Palayam Bus station by taking 
							an Autoriksha (fare :Rs.15/ ) and take a bus to NIT Calicut (buses to Mukkam, 
							Areekkode, etc. via Kunnamangalam) and get down at NIT Calicut bus stop.
							<br/>
							<br/>
							<h3>
								By Rail
							</h3>

							Direct trains/ coaches are available from Calicut to the major centres in India which 
							include New Delhi, Jammu Tawi, Gorakhpur, Bombay, Calcutta, Gowhatti, 
							Hyderabad, Bangalore, Madras, Ahmedabad, Indore, Trichy, Mangalore, 
							Trivandrum and Varanasi. The Calicut bound trains take deviation from the main 
							Madras-Cochin route from Palghat Junction or Shornur Junction. You can reach 
							NIT Calicut by taxi from the Kozhikode (Calicut) Railway station and the taxi fare is 
							approximately Rs. 400/- OR You can reach NIT Calicut by autorikshaw from the 
							Kozhikode (Calicut) Railway station and the fare is approximately Rs. 300/-
							</br>
							<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7824.467159110062!2d75.93262136303221!3d11.317630530845543!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424820583878" width="100%" height="100%" frameborder="0" style="border:0"></iframe>	

						</div>
						<div class= "info-tab" id="tab-faq">
						<ol>
							<li>What to do at Ragam '14?</li>
							With over 7 lakhs to be won in 50+ events and with contestants from all over the country, this is 
							the platform to showcase your talents. Various workshops and exhibitions on art and art forms will 
							be conducted throughout the 3 days. Informals, Adventure Sports and various other fun events 
							will also be organised to keep you occupied.<br><br>
							<li>Where to register for Ragam '14?</li>
							Online registration will start soon.<br><br> 
							<li>Where to collect your prizes?</li>
							You can collect your prizes and certificates at the registration desk after the announcement 
							of results. Participation certificates will also be provided.<br><br>
							<li>How to avail rooms for outsiders?</li>
							We have a dedicated set of team that will ensure your pleasant stay. A Hospitality Desk will be 
							working 24 hours a day during Ragam.<br><br> 
							<li>To eat or not to eat?</li>
							Calicut is famous for its delicious food. There will be array of food stalls that showcase Malabar 
							as well as other type of cuisines. In addition to all that, we have the Main Canteen which is right 
							outside the Main Gate and also the Mini Canteen. Apart from these, one could also try out the 
							various restaurants in Kattangal, the nearest junction.<br><br>
							<li>Availability of ATMs?</li>
							There are 4 ATMs within the campus. There is one ATM near the centre circle, within the college; 
							another ATM next to the Main Ladies Hostel Gate; a Punjab National Bank ATM in the School of 
							Management Studies campus and the farthest one is right next to SBI which is a 5 minutes' walk 
							from the main gate.<br><br> 
							<li>Queries regarding events?</li>
							The event description and rules are given in the Events section of the website. For any queries 
							regarding individual events, feel free to contact the event co-ordinators which has been listed. It is 
							highly recommended that you keep the contact numbers of the respective event co-ordinators so 
							that any doubts regarding clash of events, schedule, etc. can be sorted out. An exclusive PC Room 
							will be set up, for further clarifications.<br><br>
							<li>Entries for proshow?</li>
							For non-NIT students, tickets for the proshow will be sold during the 3 days of Ragam at the MB 
							Lobby. This ticket along with your respective college ID card will be adequate. For NIT-C students, 
							the college ID card and the Hostel ID card (or slip from Hostel Ofiice if you are a day scholar) will 
							suffice.<br><br> 
							<li>Acronyms used that you can familiarise with?</li>
							Every college has its own set of names that it associates with its buildings/spots. Here are our 
							famous few: ELHC - Electronics Lecture Hall Complex;EBLHC - East Block Lecture Hall Complex; NLHC - New Lecture Hall Complex; MB - Main 
							Building; DB - Department Building; CC - Central Computing Centre (yes, one C is missing); MC - Main 
							Canteen; Pits - the steps in front of the ELHC; MBDH - MB Drawing Hall; AB - Academic Building, 
							apart from the common few like the OAT - Open Air Theatre; Audi - Auditorium etc.<br><br> 
							<li>Places to see in and around Calicut?</li>
							Since it is an opportunity you get to visit Calicut, why not make it a tour to remember? There are 
							a lot of places one could visit- Calicut Beach, Kappad Beach (THE Vasco da Gama beach), Beypore, 
							Sarovaram Bio-Park and you can even stopover at Wayanad which is a 1.5 hour drive from campus.<br><br> 
							<li>For further details?</li>
							You can contact us at info@ragam.org.in, and even approach the Help Desk which will be located in 
							the MB Lobby during Ragam.<br><br>
							</ol>
						</div>
					</div>
				</div>
				<div style="height:100%;width:30%;right:0%;;position:absolute">
					<div id="info-head-place" class="head-place">
						<div id="info-head" class="head">
							General Info
						</div>
					</div>
					<div id="info-words-place" class="words-place">
					</div>
					<div id="info-sprite" class="sprite">
					</div>
				</div>

			</div>
			<div id="contacts" class="sec">
				

				<div style="height:100%;width:80%;float:left;margin-top:8%;padding-left:10%">
					
					<div id="contact-head-place" class="head-place" style="margin-top:0;padding-left:38%">
						<div id="contact-head" class="head"style="font-size:0.8em" >
							Contact Us
						</div>
					</div>

							<div class="contacts-tabs">
								<h3>General Secretary</h3>
								<h4>Dilber Shahul</h4>
								<h4>+91 95676 70916</h4>
								<h4>dilber@ragam.org.in</h4>
							</div>
							<div class="contacts-tabs">
								<h3>Convenor</h3>
								<h4>Abdul Wasih</h4>
								<h4>+91 85475 62834</h4>
								<h4>wasih@ragam.org.in</h4>
							</div>
							<div class="contacts-tabs">
								<h3>Faculty In Charge</h3>
								<h4>Sunil Mathew</h4>
								<h4>+91 93497 69083</h4>
								<h4>sunilmathew@ragam.org.in</h4>
							</div>
							<div class="contacts-tabs">
								<h3>Events Co-ordinator</h3>
								<h4>Hafiz Muhammed</h4>
								<h4>+91 80892 19732</h4>
								<h4>hafiz@ragam.org.in</h4>
							</div>
							<div class="contacts-tabs">
								<h3>Events Co-ordinator
								</h3>
								<h4>Nandagopal R</h4>
								<h4>+91 95670 35935</h4>
								<h4>nandagopal@ragam.org.in</h4>
							</div>
							<div class="contacts-tabs">
								<h3>Marketing Co-ordinator</h3>
								<h4>Christopher Jacob</h4>
								<h4>+91 98460 95751</h4>
								<h4>christopher@ragam.org.in</h4>
							</div>
							<div class="contacts-tabs">
								<h3>Public Relations</h3>
								<h4>Kiran Ananth</h4>
								<h4>+91 99477 86864</h4>
								<h4>kiranananth@ragam.org.in</h4>
							</div>
							<div class="contacts-tabs">
								<h3>Public Relations</h3>
								<h4>Shamil Puthukkot</h4>
								<h4>+91 96334 25202</h4>
								<h4>shamil@ragam.org.in</h4>
							</div>
							<div class="contacts-tabs">
								<h3>Registrations</h3>
								<h4>Harikrishnan Subash</h4>
								<h4>+91 94005 75471</h4>
								<h4>registration@ragam.org.in</h4>
							</div>
							<div class="contacts-tabs">
								<h3>Hospitality</h3>
								<h4>Flemill Jose</h4>
								<h4>+91 94974 16791</h4>
								<h4>hospitality@ragam.org.in</h4>
							</div>
							<div class="contacts-tabs">
								<h3>Hospitality</h3>
								<h4>Haritha U R</h4>
								<h4>+91 85905 17653</h4>
								<h4>hospitality@ragam.org.in</h4>
							</div>
							<div class="contacts-tabs">
								<h3>Workshops</h3>
								<h4>Aby Anil John</h4>
								<h4>+91 97464 79909</h4>
								<h4>workshop@ragam.org.in</h4>
							</div>
				</div>
			</div>
<!--**********************************************4INFO END*******************-->				
<!--**********************************************5Highlights START*******************-->				
	
<!--**********************************************5Highlights END*******************-->				
			


			<div id="footer">
				<div id="footer-wrapper">
					<div id="footer-top">
						<div id="footer-content">
							<h1>Ragam 2015</h1>
							<h3>March 26 - 29, 2015</h3>
							<h3>Culture Personified | Awesomeness Festified</h3>
						</div>
						
						<div id="footer-column1">
						</div>
						
						<div id="footer-column2">
						</div>
					</div>
						
					<div id="footer-line"></div>
					
					<div id="footer-bottom">
						All Rights Reserved | Ragam 2015
					</div>
				</div>
			</div>
<!-- Footer End-->
<!-- End-->
		</div>
		<div id="loader" class="pageload-overlay" data-opening="M 0,60 80,60 80,50 0,40 0,60;M 0,60 80,60 80,25 0,40 0,60;M 0,60 80,60 80,25 0,10 0,60;M 0,60 80,60 80,0 0,0 0,60" data-closing="M 0,60 80,60 80,20 0,0 0,60;M 0,60 80,60 80,20 0,40 0,60;m 0,60 80,0 0,0 -80,0">
				<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
					<path d="m 0,60 80,0 0,0 -80,0"/>
				</svg>
			</div><!-- /pageload-overlay -->
	</body>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/tweenmax.js"></script>
	<script type="text/javascript" src="js/scrollmagic.js"></script>
	<script type="text/javascript" src="js/scrollmagic.debug.js"></script>
	<script type="text/javascript" src="js/ScrollToPlugin.js"></script>
	<script type="text/javascript" src="js/cssplugin.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/snap.svg-min.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/svgLoader.js"></script>
	<script type="text/javascript" src="js/fetch.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/loadereve.js"></script>
	<script type="text/javascript" src="js/TimelineMax.min.js"></script>]
	


	<!-- Registration -->
	<script src="js/registration/select2.min.js"></script>
	<script src="js/registration/jquery.remodal.js"></script>
	<script src="js/registration/registration-common.js"></script>

	
	
</html>