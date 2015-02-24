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
		<link rel="stylesheet" type="text/css" href="css/ticker.css"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/tweenmax.js"></script>
		<script type="text/javascript" src="js/scrollmagic.js"></script>
		<script type="text/javascript" src="js/scrollmagic.debug.js"></script>
		<script type="text/javascript" src="js/ScrollToPlugin.js"></script>
		<script type="text/javascript" src="js/cssplugin.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script src="js/snap.svg-min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/svgLoader.js"></script>
		<style>
				. {
			display: none;
		}

		..show {
			display: block;
		}

		.pageload-overlay {
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			visibility: hidden;
		}

		.pageload-overlay.show {
			visibility: visible;
		}

		.pageload-overlay svg {
			position: absolute;
			top: 0;
			left: 0;
			pointer-events: none;
		}

		.pageload-overlay svg path {
			fill: #fff;
		}

		.pageload-overlay::after,
		.pageload-overlay::before {
			content: '';
			position: fixed;
			width: 20px;
			height: 20px;
			top: 50%;
			left: 50%;
			margin: -10px 0 0 -10px;
			border-radius: 50%;
			visibility: hidden;
			opacity: 0;
			z-index: 1000;
			-webkit-transition: opacity 0.15s, visibility 0s 0.15s;
			transition: opacity 0.15s, visibility 0s 0.15s;
		}

		.pageload-overlay::after {
			background: #6cc88a;
			-webkit-transform: translateX(-20px);
			transform: translateX(-20px);
			-webkit-animation: moveRight 0.6s linear infinite alternate;
			animation: moveRight 0.6s linear infinite alternate;
		}

		.pageload-overlay::before {
			background: #4fc3f7;
			-webkit-transform: translateX(20px);
			transform: translateX(20px);
			-webkit-animation: moveLeft 0.6s linear infinite alternate;
			animation: moveLeft 0.6s linear infinite alternate;
		}

		@-webkit-keyframes moveRight {
			to { -webkit-transform: translateX(20px); }
		}

		@keyframes moveRight {
			to { transform: translateX(20px); }
		}

		@-webkit-keyframes moveLeft {
			to { -webkit-transform: translateX(-20px); }
		}

		@keyframes moveLeft {
			to { transform: translateX(-20px); }
		}

		.pageload-loading.pageload-overlay::after,
		.pageload-loading.pageload-overlay::before {
			opacity: 1;
			visibility: visible;
			-webkit-transition: opacity 0.3s;
			transition: opacity 0.3s;
		}
		</style>
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

<!--**********************************************1EVENTS START*******************-->				
			<div id="Events" class="sec">
				<div style="height:98%;width:28%;float:left;">
					Competitions
					</br>
					</br>
					</br>
					</br>
					</br>Rekindle the hero within you. 
					</br>
					Fight in the battle of your life. 
					</br>
					Emerge triumphant, and the trophy shall be waiting for you.

				</div>
				<div id="pagewrap">
					<div style="height:100%;width:70%;float:left" class="">
						<ul id="elist"></ul>
					</div>

					<div id="eventContent" style="position:absolute;left:30%;height:100%;width:70%;background:red;float:left;display:none">
						<div id="content_wrap" style="background-image: none; background-color: rgb(243, 156, 18);">
							<div id="event_wrap">
								<div id="event_head">
							    	<span id="event_title"></span>
							    	<span id="reg_response"></span>
							  	</div>
							  	<div id="event_main">
							    	<div id="event_text">
							      		<span id="event_text_left">
							      			<span id="cat_bg" style="background-color: rgb(241, 196, 15);"></span>
							      			<span id="participation" min="1" max="12" style="background-color: rgb(241, 196, 15);">
							      			</span>
							      			<span id="Prize_Money" style="background-color: rgb(241, 196, 15);"></span>
							      			<span id="Contacts" style="background-color: rgb(241, 196, 15);">
							      				<h2>Contacts</h2>
							      				<p>Tom Sebastian<br>9037102360<br>acoustics@ragam.org.in<br><br></p>
							      				<p>Nirmal Sabu<br>9895420189<br>acoustics@ragam.org.in<br><br></p>
							      			</span>
							      		</span>
							      		<span id="event_text_right" style="background-color: rgb(241, 196, 15);">
							        		<div id="event_register">
							        			<div id="close"></div>
							        	  		<span class="arrow"></span>
							        	  	</div>        
							      			<span id="Introduction" style="background-color: rgb(241, 196, 15);">
							      				<h2>Introduction</h2>
							      				<p>
							      					Perfect rhythm, powerful chords and rockstar style; bring these three together to conquer the Acoustics stage this Ragam '14. Own the stage and captivate our hearts as your instruments take centre stage. So bring out your coolest guitars, pack those drums, and let your music reverberate in our minds. Impress these crowds and you walk away with hundreds of dedicated fans, a handsome cash prize and an incredible experience.
												</p>
											</span>
											<span id="Rules_and Regulations" style="background-color: rgb(241, 196, 15);">
												<h2>Rules and Regulations</h2>
												<p></p>
												<ul>
													<li>Maximum of 12 participants per team.</li>
													<li>Time limit: 15 minutes + 3 minutes set-up time.</li>
													<li>Participating teams should upload a video of any of their performance on YouTube and send its URL to acoustics@ragam.org.in along with the following details:
														<ul>
															<li>College/Band Name</li>
															<li>Name and Contact Info of the Team Leader</li>
															<li>List of Team members</li>
														</ul>
													</li>
													<li>Finalists will be screened based on the video sent. Registration will be confirmed only after receiving the confirmation letter.</li>
													<li>There is no On the Spot Registration.</li>
													<li>Teams are permitted to perform in the language of their choice.</li>
													<li>No electric instruments permitted apart from bass and electric guitar (clean).</li>
													<li>Keyboards are permitted only on piano patch.</li>
													<li>Points: (40, 30, 20)</li>
													<li></li>
												</ul>
													<p></p>
											</span>
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
				<div style="height:100%;width:70%;float:left">
					<ul id="wlist">
		    			<?php echo $wks_lis; ?>
		  			</ul>
				</div>
				<div style="height:100%;width:30%;float:left">Workshops</div>
			</div>
<!--**********************************************WORKSHOPS END*******************-->				
<!--**********************************************3PROSHOWS START*******************-->				
		
		<div id="Proshows" class="sec">
			<div style="height:100%;width:30%;float:left">
				Proshows
			</div>
			<div style="height:100%;width:70%;float:left">
				<iframe width="100%" height="100%" src="https://www.youtube.com/embed/ghb6eDopW8I" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div id="Info" class="sec">General Info</div>
		<div id="Sponsors" class="sec">Sponsors</div>
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

	<script type="text/javascript" src="js/commonscript.js"></script>
	<script type="text/javascript" src="js/fetch.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</html>