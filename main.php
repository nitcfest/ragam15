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
    $cat_cur="<li><ul>";
    $catid=$row1['cat_id'];
    $query2="SELECT code, name FROM `events` WHERE `cat_id`='$row1[cat_id]'";
    $result2=$mysqli->query($query2);
    while($row2=$result2->fetch_assoc())
    {
      $name=str_replace(' ', '_', $row2['name']);
      $cat_cur.="<li><a id='$row2[code]' class=\"pageload-link\">".$row2['name']."</a></li>";
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
		<script type="text/javascript" src="js/commonscript.js"></script>
		<script type="text/javascript" src="js/tweenmax.js"></script>
		<script type="text/javascript" src="js/scrollmagic.js"></script>
		<script type="text/javascript" src="js/scrollmagic.debug.js"></script>
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<link rel="stylesheet" type="text/css" href="css/ticker.css"/>
		<script type="text/javascript" src="js/f_eve_list.js"></script>
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
			<div id="grad6" class="background"></div>
		</div>
		<div id="rest">

<!--**********************************************1EVENTS START*******************-->				
			<div id="Events" class="sec">
				<div class="sec-wrapper">
					<div style="height:98%;width:28%;float:left;">
						Events
						</br>
						</br>
						</br>
						</br>
						</br> Events of the india are of ragam and the best in the world. General description and motivational phrase inviting to participate in the events goes here!
					</div>
					<div style="height:100%;width:70%;float:left">
						<ul id="elist">
			    		<?php echo $cat_lis; ?>
			  			</ul>
					</div>
					<!--start-->
		<?php include ('eventbox.php'); ?>
					


					<!--end -->
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
			<div style="height:100%;width:30%;float:left">
				Workshops
			</div>
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
	<script type="text/javascript" src="js/main.js"></script>	
</html>