<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Ragam 2015</title>
		<meta name="description" content="Ragam 2015, NIT Calicut's Annual Cultural Festival">
		<meta name="keywords" content="ragam, raagam, nitc, nit calicut, tathva, raga, raaga">
		<meta name="google-site-verification" content="OguuMK3kMTqLJsjIlgyCWciCHLn99B2OECdmL4RfX1Y" />
		<meta name="author" content="Ragam Creative Team">	

		<link rel="icon" href="http://www.ragam.org.in/2015/img/favicon.png">
		<link rel="shortcut icon" href="http://www.ragam.org.in/2015/img/favicon.png">

		
		<link rel="stylesheet" type="text/css" href="css/default.css">
		<link rel="stylesheet" type="text/css" href="css/component.css">
		<link rel="stylesheet" type="text/css" href="css/ticker.css">
		<link rel="stylesheet" type="text/css" href="css/mine.css">
		<!-- include the core styles -->
		<link rel="stylesheet" href="css/alertify.core.css" />
		<!-- include a theme, can be included into the core instead of 2 separate files -->
		<link rel="stylesheet" href="css/alertify.default.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Registration -->
		<link rel="stylesheet" type="text/css" href="css/registration/select2.min.css">
		<link rel="stylesheet" type="text/css" href="css/registration/jquery.remodal.css">		
		<link rel="stylesheet" type="text/css" href="css/registration/pure-nr-min.css">		
		<link rel="stylesheet" type="text/css" href="css/registration/registration.css">

	</head>
	<body>
		<div id="preloader"></div>
		<div class="fadebox-black"></div>
		<div class="spmenu-push" id="mega">
			<!--<div id="topdraw" class="topdraw-hover">
				<div id="topdraw-content">

				</div>
				<div id="topdraw-hanger">
				</div>
			</div>-->


			<div class="registration-bar">	
				<span id="registration-current-status">&nbsp;</span>		
				<button id="registration-action-login" type="button" class="pure-button button-xsmall button-success" style="display:none;">LOGIN</button>
				<button id="registration-action-register" type="button" class="pure-button button-xsmall" style="display:none;">REGISTER</button>
				<button id="registration-action-user" type="button" class="pure-button button-xsmall button-secondary" style="display:none;">VIEW PROFILE</button>
				<button id="registration-action-logout" type="button" class="pure-button button-xsmall button-warning" style="display:none;">LOG OUT</button>
				
			</div>


			<div class="remodal" data-remodal-id="show-registration-login" data-remodal-options="hashTracking: false">
				<div class="pure-g">
				    <div class="pure-u-1">
				    	<form action="" id="form-login" method="POST" role="form" class="pure-form">
				    		<h3>Have an account? Login.</h3>
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
				    	<a href="http://www.ragam.org.in/2015/cms/api/user/fb_login"><img src="img/fb_login.png"></a><br><br>
						<p>Note that if you have already logged in with Facebook, you cannot use the same email to register another account.</p>
						<form action="" id="form-signup" method="POST" role="form" class="pure-form">
							<input class="pure-input-1" id="data-registration-name" type="text" name="name" placeholder="Full name">
							<br><br>
							<input class="pure-input-1" id="data-registration-email" type="text" name="email" placeholder="Email address">
							<br><br>
							<input class="pure-input-1" type="password" name="password" placeholder="Password">
							<br><br>
							<input class="pure-input-1" type="password" name="password_confirmation" placeholder="Confirm password">
							<br><br>
							<input class="pure-input-1" id="data-registration-phone" type="text" name="phone" placeholder="Phone number" style="width:100%;">
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
								I would require accomodation (Male)
							</label>
							<label class="pure-radio">
								<input type="radio" name="hospitality_type" value="2">
								I would require accomodation (Female)
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

			<nav class="spmenu spmenu-vertical spmenu-right" id="spmenu-s2">

				<div id="two" class="target">
					<a data-href="Events"><span class="icon-drawer"></span><span class="align-mid">Competitions<span></a>
					<a data-href="Workshops"><span class="icon-hammer2"></span><span class="align-mid">Workshops</span></a>
					<a data-href="Proshows"><span class="icon-film"></span><span class="align-mid">Proshows</span></a>
					<a data-href="sneharagam"><span class="icon-hammer2"></span><span class="align-mid">Sneharagam</span></a>
					<a data-href="Prodezza"><span class="icon-user-tie"></span><span class="align-mid">Prodezza</span></a>
					<a data-href="Info"><span class="icon-compass"></span><span class="align-mid">General Info</span></a>
					<a data-href="http://app.ragam.org.in"><span class="icon-mobile"></span><span class="align-mid">Mobile Apps</span></a>
					<a data-href="http://ragam.org.in/2015/marketing"><span class="icon-user-tie"></span><span class="align-mid">Sponsor Us</span></a>
				</div>	
			</nav>
			<div class="container">
				<a href="Contacts" data-toggle="modal" data-target="#callback" class="cbh-phone gray show static page-exit" id="contact-icon">
					<div class="cbh-ph-circle"></div>
					<div class="cbh-ph-circle-fill"></div>
					<div class="cbh-ph-img-circle"></div>
				</a>
				<a href="#" data-toggle="modal" data-target="#callback" class="cbh-phone gray show static playing" id="music-icon">
					<div class="cbh-ph-circle"></div>
					<div class="cbh-ph-circle-fill"></div>
					<div class="cbh-ph-img-circle"></div>
				</a>
				<a target="_blank" href="https://www.facebook.com/Ragam.nitc" data-toggle="modal" data-target="#callback" class="cbh-phone cbh-contact gray show static playing" id="fb-icon">
					<div class="cbh-ph-img-circle cbh-ph-img-circle-logo"></div>
				</a>
				<a target="_blank" href="https://twitter.com/ragamnitc" data-toggle="modal" data-target="#callback" class="cbh-phone cbh-contact gray show static playing" id="twitter-icon">
					<div class="cbh-ph-img-circle cbh-ph-img-circle-logo"></div>
				</a>
				<a target="_blank" href="https://instagram.com/Ragam_nitc" data-toggle="modal" data-target="#callback" class="cbh-phone cbh-contact gray show static playing" id="instagram-icon">
					<div class="cbh-ph-img-circle cbh-ph-img-circle-logo"></div>
				</a>
				<a target="_blank" href="https://www.youtube.com/user/RagamCulfest" data-toggle="modal" data-target="#callback" class="cbh-phone cbh-contact gray show static playing" id="youtube-icon">
					<div class="cbh-ph-img-circle cbh-ph-img-circle-logo"></div>
				</a>
				<div class="main">
					<div id="main-text" class="path-container">
					<ul class="ulstyled">
  						<li class="barboth styled">
  							<div class="bar"><span class="w70"></span></div>
  						</li>
  
  						<li class="styled"><img id="logo1" src="img/ragam1.png"></li>
 
  						<li style="margin-left:-24px;" class="barboth styled">
  							<div class="skill-bar"> <span class="w70"></span></div>
  						</li>
  					</ul>
  					<img id="logo" src="img/ragam.png">
					<ul class="ulstyled" style="margin-top:-20px;">
  						<li class="barboth2 styled">
  							<div class="bar"><span class="w70"></span></div>
  						</li>
  
  						<li style="margin-left:-24px;" class="barboth2 styled">
  							<div class="skill-bar"> <span class="w70"></span></div>
  						</li>
  					</ul>
					</div>
				</div>
				<div style="color:white;position:absolute;width:100%;top:5px;font-size:1.2em;"><center><a href="schedule.pdf" style="color:white;">Download Schedule</a></center></div>
				<div style="position:absolute;bottom:10%;height:10%;width:100%;font-size:2em;color:#fff"><center>March 26<sup>th</sup> - 29<sup>th</sup> </center></div>
			</div>
		</div>
		
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/blur.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/alertify.js"></script>
		<script>

			// $('#two').blurjs({
			// 	source: 'body',
			// 	overlay: 'rgba(255,255,255,0.4)',
			// });
			function setCookie(cname, cvalue, exdays) {
				var d = new Date();
				d.setTime(d.getTime() + (exdays*24*60*60*1000));
				var expires = "expires="+d.toUTCString();
				document.cookie = cname + "=" + cvalue + "; " + expires;
			}

			function getCookie(cname) {
				var name = cname + "=";
				var ca = document.cookie.split(';');
				for(var i=0; i<ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0)==' ') c = c.substring(1);
					if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
				}
				return "";
			}
		</script>
		<script src="js/index.js"></script>
		
		<!-- Registration -->
		<script src="js/registration/select2.min.js"></script>
		<script src="js/registration/jquery.remodal.js"></script>
		<script src="js/registration/registration-common.js"></script>

	</body>
</html>
