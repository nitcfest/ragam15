<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Ragam 2015</title>
		<meta name="description" content="Ragam 2015, NIT Calicut's Annual Cultural Festival">
		<meta name="keywords" content="ragam, raagam, nitc, nit calicut, tathva, raga, raaga">
		<meta name="author" content="Ragam Creative Team">	
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css">
		<link rel="stylesheet" type="text/css" href="css/component.css">
		<link rel="stylesheet" type="text/css" href="css/ticker.css">
		<link rel="stylesheet" type="text/css" href="css/mine.css">
		<link rel="stylesheet" type="text/css" href="css/select2.min.css">

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/blur.js"></script>

	</head>
	<body>
		<div class="fadebox-black"></div>
		<div class="spmenu-push" id="mega">
			<!--<div id="topdraw" class="topdraw-hover">
				<div id="topdraw-content">

				</div>
				<div id="topdraw-hanger">
					Tarun :)
				</div>
			</div>-->
			<div id="login_link">LOGIN/REGISTER</div>
			<div id="modal">
				<div id="div-login" style="display:none;">
					<form action="" id="form-login" method="POST" role="form" class="af-form">
						<h3>Have an account? Login.</h3>
						<input type="email" name="email" placeholder="Your email address" required>
						<br><br/>
						<input type="password" name="password" placeholder="Your password" required>
						<br><br/>		
						<input type="submit" class="btn btn-primary" placeholder="Submit">
						<br>
						<span id="login-messages"></span>
					</form>
					<h3>New user? <a href="#" id="action-signup">Register now</a>.</h3>				
				</div>

				<div id="div-signup" style="display:none; width:300px;">
					<form action="" id="form-signup" method="POST" role="form" class="af-form">
						<input type="text" name="name" placeholder="Full name" style="width:100%;">
						<br><br>
						<input type="text" name="email" placeholder="Email address" style="width:100%;">
						<br><br>
						<input type="password" name="password" placeholder="Password" style="width:100%;">
						<br><br>
						<input type="password" name="password_confirmation" placeholder="Confirm password" style="width:100%;">
						<br>	
						<br>

						<input type="text" name="phone" placeholder="Phone number" style="width:100%;">
						<br><br>

						<select name="college" id="college_select" style="width:100%;">
							<option value="0">Loading...</option>
						</select>
						<br>
						<br>
						<br>
						Don't see your college? <a href="#" id="action-show-add-college">Add it here</a>. 
						<div id="div-add-college" style="display:none;">
							(You'll be able to register only after your college is verified by the Ragam team.)<br>
							<input type="text" id="name_new_college" placeholder="Full college name" style="width:100%;">
							<button type="button" id="action-add-college">Add College</button>

							<br>
							<span id="add-college-messages"></span>
						</div>

						<br><br>

						Do you need hospitality services during Ragam '15?<br><br>
						<label>
							<input type="radio" name="hospitality_type" value="0" checked="checked">
							I do not require accomodation.
						</label>

						<br>

						<label>
							<input type="radio" name="hospitality_type" value="1">
							I would like accomodation Type 1. (Sleeping mat)
						</label>

						<br>

						<label>
							<input type="radio" name="hospitality_type" value="2">
							I would like accomodation Type 2. (Mattress)
						</label>
						<br>


						<input type="submit" class="btn btn-primary" placeholder="Submit">
					</form>
				</div>

				<div id="div-user-details" style="background:#CACFF7; border: 1px solid #000; display:none;"></div>

				<div id="div-user-logout" style="display:none;">
					<h3><a href="#" id="action-logout">Log out</a></h3>
				</div>
				<span id="user-messages"></span>


			</div>
			<nav class="spmenu spmenu-vertical spmenu-right" id="spmenu-s2">

				<div id="two" class="target">
					<!--Login button somewhere here-->
					<a data-href="main.php#Events"><span class="icon-drawer"></span><span class="align-mid">Competitions<span></a>
					<a data-href="main.php#Workshops"><span class="icon-hammer2"></span><span class="align-mid">Workshops</span></a>
					<a data-href="main.php#Proshows"><span class="icon-film"></span><span class="align-mid">Proshows</span></a>
					<a data-href="main.php#sneharagam"><span class="icon-hammer2"></span><span class="align-mid">Sneharagam</span></a>
					<a data-href="main.php#CelebTalks"><span class="icon-user-tie"></span><span class="align-mid">Celebrity Talks</span></a>
					<a data-href="main.php#Info"><span class="icon-compass"></span><span class="align-mid">General Info</span></a>
					<a data-href="http://ragam.org.in/2015/marketing"><span class="icon-user-tie"></span><span class="align-mid">Sponsor Us</span></a>
				</div>	
			</nav>
			<div class="container">
				<a href="main.php#contacts" data-toggle="modal" data-target="#callback" class="cbh-phone gray show static page-exit" id="contact-icon">
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
					<ul>
  						<li class="barboth">
  							<div class="bar"><span class="w70"></span></div>
  						</li>
  
  						<li><img id="logo1" src="img/ragam1.png"></li>
 
  						<li style="margin-left:-24px;" class="barboth">
  							<div class="skill-bar"> <span class="w70"></span></div>
  						</li>
  					</ul>
  					<img id="logo" src="img/ragam.png">
						<ul style="margin-top:-20px;">
  						<li class="barboth2">
  							<div class="bar"><span class="w70"></span></div>
  						</li>
  
 
  						<li style="margin-left:-24px;" class="barboth2">
  							<div class="skill-bar"> <span class="w70"></span></div>
  						</li>
  					</ul>
					</div>
				</div>
				<div style="position:absolute;bottom:10%;height:10%;width:100%;font-size:2em;color:#fff"><center>March 26<sup>th</sup> - 29<sup>th</sup> </center></div>
			</div>
		</div>
	
	
		<script src="js/modernizr.custom.js"></script>
		<script src="js/classie.js"></script>
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

			music1 = new Audio('music/music1.mp3');
			music1.volume=.15;
			// console.log(document.cookie);
			var music_on_ready=function(){
				music1.removeEventListener("canplaythrough", music_on_ready, false);
				if(getCookie("music")&&!isNaN(getCookie("music"))){
					music1.currentTime=getCookie("music");
				}
				music1.play();
				$("#music-icon").click(function(){
					if($("#music-icon").hasClass("playing")){
						$("#music-icon").removeClass("playing");
						music1.pause();
						setCookie("muted", "true", 1)
					}
					else{
						setCookie("muted", "false", 1)
						$("#music-icon").addClass("playing");
						music1.play();
					}
				})
				music1.play();
				if(getCookie("muted")=="true")
					$("#music-icon").click();
			}
			music1.addEventListener('canplaythrough', music_on_ready, false);

			window.onbeforeunload=function(){
				setCookie("music",music1.currentTime,1);
			}

		</script>
		<script src="js/index.js"></script>
		<script src="js/select2.min.js"></script>
		<script src="js/reg.js"></script>
	</body>
</html>
