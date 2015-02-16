<?php
  require_once('connect.php');
  $query1="SELECT name,cat_id FROM `event_cats` WHERE `par_cat`='1' ORDER BY FIELD(cat_id, 10, 9, 8, 7, 5) DESC";
  $result1=$mysqli->query($query1);
  $cat_lis="";
  while($row1=$result1->fetch_assoc())
  {
    $cat_cur="<li><h4>".$row1['name']."</h4><ul>";
    $catid=$row1['cat_id'];
    $query2="SELECT code, name FROM `events` WHERE `cat_id`='$row1[cat_id]'";
    $result2=$mysqli->query($query2);
    while($row2=$result2->fetch_assoc())
    {
      $name=str_replace(' ', '_', $row2['name']);
      $cat_cur.="<li><a id='$row2[code]' class='event'>".$row2['name']."</a></li>";
    }
    $result2->free();
    $cat_lis .= $cat_cur."</ul></li>";
  }
  $result1->free();

  $query1="SELECT name,cat_id FROM `event_cats` WHERE `cat_id`='2' OR `cat_id`='15'";
  $result1=$mysqli->query($query1);
  $wks_lis="";
  while($row1=$result1->fetch_assoc())
  {
    $cat_cur="<li><h4>".$row1['name']."</h4><ul>";
    $catid=$row1['cat_id'];
    $query2="SELECT code, name FROM `events` WHERE `cat_id`='$row1[cat_id]'";
    $result2=$mysqli->query($query2);
    while($row2=$result2->fetch_assoc())
    {
      $name=str_replace(' ', '_', $row2['name']);
      $cat_cur.="<li><a id='$row2[code]'>".$row2['name']."</a></li>";
    }
    $result2->free();
    $wks_lis .= $cat_cur."</ul></li>";
  }
  $result1->free();
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
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/fadebox.js"></script>
		<script type="text/javascript" src="js/tweenmax.js"></script>
		<script type="text/javascript" src="js/scrollmagic.js"></script>
		<script type="text/javascript" src="js/scrollmagic.debug.js"></script>
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<link rel="stylesheet" type="text/css" href="css/ticker.css"/>
		<script type="text/javascript" src="js/ScrollToPlugin.js"></script>
		<script type="text/javascript" src="js/cssplugin.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	</head>
	<body>
		<div id="fadebox"></div>
		<div id="backgrounds">
			<div id="grad1" class="background"></div>
			<div id="grad2" class="background"></div>
			<div id="grad3" class="background"></div>
			<div id="grad4" class="background"></div>
			<div id="grad5" class="background"></div>
		</div>
		<div id="rest">
			<div id="Events" class="sec">
				<div style="position:absolute;left:0;height:100%;width:30%;background:green;float:left"></div>
				<div style="position:absolute;left:30%;height:100%;width:70%;background:blue;float:left">
					<ul id="elist">
		    			<?php echo $cat_lis; ?>
		  			</ul>
				</div>
				<div id="eventContent" style="position:absolute;left:30%;height:100%;width:70%;background:red;float:left;display:none">
				<div id="content_wrap" style="background-image: none; background-color: rgb(243, 156, 18);">
					  <div id="event_wrap">
					  <div id="event_head">
					  	<span id="event_logo" style="display: block;"></span>
					    <span id="event_title">Acoustics</span>
					    <span id="reg_response"></span>
					  </div>
					  <div id="event_main">
					    <div id="event_text">
					      <span id="event_text_left"><span id="cat_bg" style="background-color: rgb(241, 196, 15);"><img src="img/illustrations/9.png" width="200px"></span><span id="participation" min="1" max="12" style="display: none; background-color: rgb(241, 196, 15);"></span><span id="Prize_Money" style="background-color: rgb(241, 196, 15);"><h2>Prize Money</h2><p>First: INR 10000<br>
					Second : INR 6000<br>
					Third : INR 4000</p></span><span id="Contacts" style="background-color: rgb(241, 196, 15);"><h2>Contacts</h2><p>Tom Sebastian<br>9037102360<br>acoustics@ragam.org.in<br><br></p><p>Nirmal Sabu<br>9895420189<br>acoustics@ragam.org.in<br><br></p></span></span>
					      <span id="event_text_right" style="background-color: rgb(241, 196, 15);">
					          <div id="event_register">

					          <div id="close"></div>
					          <span class="arrow"></span>
					          </div>        
					      <span id="Introduction" style="background-color: rgb(241, 196, 15);"><h2>Introduction</h2><p>Perfect rhythm, powerful chords and rockstar style; bring these three together to conquer the Acoustics stage this Ragam '14. 

					Own the stage and captivate our hearts as your instruments take centre stage. So bring out your coolest guitars, pack those drums, and let your music reverberate in our minds. Impress these crowds and you walk away with hundreds of dedicated fans, a handsome cash prize and an incredible experience.
					</p></span><span id="Rules_and Regulations" style="background-color: rgb(241, 196, 15);"><h2>Rules and Regulations</h2><p></p><ul>
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
					</ul><p></p></span></span>
					    </div>
					  </div>
					  </div>
					</div>
				</div>
			</div>
			<div id="Workshops" class="sec">
				<div style="height:100%;width:70%;background:red;float:left">
					<ul id="wlist">
		    			<?php echo $wks_lis; ?>
		  			</ul>
				</div>
				<div style="height:100%;width:30%;background:yellow;float:left">
					
				</div>
			</div>
			<div id="Proshows" class="sec">Proshows</div>
			<div id="Info" class="sec">General Info</div>
			<div id="Sponsors" class="sec">Sponsors</div>
		</div>
		<?php include ('ticker.html'); ?>

	</body>
	<script type="text/javascript" src="js/commonscript.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript">
	$(".event").click(function () {
		$('#eventContent').show('slide', {direction: 'right'}, 1000);
	});
	</script>
	
</html>