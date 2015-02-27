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
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/blur.js"></script>

	</head>
	<body>
		<div id="fadebox"></div>
		<div class="spmenu-push" id="mega">
			<!--<div id="topdraw" class="topdraw-hover">
				<div id="topdraw-content">

				</div>
				<div id="topdraw-hanger">
					Tarun :)
				</div>
			</div>-->
			<nav class="spmenu spmenu-vertical spmenu-right" id="spmenu-s2">
				<div id="two" class="target">
				    <a href=""><span class="icon-menu"></span><span class="align-mid">Menu<span></a>
					<!--Login button somewhere here-->
					<a data-href="main.php#Events"><span class="icon-drawer"></span><span class="align-mid">Events<span></a>
					<a data-href="main.php#Workshops"><span class="icon-hammer2"></span><span class="align-mid">Workshops</span></a>
					<a data-href="main.php#Proshows"><span class="icon-film"></span><span class="align-mid">Proshows</span></a>
					<a data-href="main.php#Info"><span class="icon-compass"></span><span class="align-mid">General Info</span></a>
					<a data-href="main.php#CelebTalks"><span class="icon-user-tie"></span><span class="align-mid">Celebrity Talks</span></a>
				</div>	
			</nav>
			<div class="container">
				<a href="#" data-toggle="modal" data-target="#callback" class="cbh-phone gray show static" id="contact-icon">
					<div class="cbh-ph-circle"></div>
					<div class="cbh-ph-circle-fill"></div>
					<div class="cbh-ph-img-circle"></div>
				</a>
				<a href="#" data-toggle="modal" data-target="#callback" class="cbh-phone gray show static playing" id="music-icon">
					<div class="cbh-ph-circle"></div>
					<div class="cbh-ph-circle-fill"></div>
					<div class="cbh-ph-img-circle"></div>
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
			</div>
		</div>
	
	
		<script type="text/javascript" src="js/modernizr.custom.js"></script>
		<!-- Thanks from the Ragam team to Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
		<script>
			$('#two').blurjs({
		source: 'body',
		overlay: 'rgba(255,255,255,0.4)'
	});
				music1 = new Audio('music/music1.mp3');
			var music_on_ready=function(){
					music1.play();
					$("#music-icon").click(function(){
					if($("#music-icon").hasClass("playing")){
						$("#music-icon").removeClass("playing");
						music1.pause();
					}
					else{
						$("#music-icon").addClass("playing");
						music1.play();
					}
				})
			}
				music1.addEventListener('canplaythrough', music_on_ready, false);
		</script>
		<script type="text/javascript" src="js/commonscript.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>
