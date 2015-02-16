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
      $cat_cur.="<li><a id='e_$row2[code]' href='events/$name'>".$row2['name']."</a></li>";
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
      $cat_cur.="<li><a id='e_$row2[code]' href='workshops/$name'>".$row2['name']."</a></li>";
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
				
				<div style="height:100%;width:30%;background:green;float:left"></div>
				<div style="height:100%;width:70%;background:blue;float:left">
					<ul id="elist">
		    			<?php echo $cat_lis; ?>
		  			</ul>
				</div>
			</div>
			<div id="Workshops" class="sec">
				<div style="height:100%;width:70%;background:red;float:left">
					<ul id="wlist">
		    			<?php echo $wks_lis; ?>
		  			</ul>
				</div>
				<div style="height:100%;width:30%;background:yellow;float:left"></div>

			</div>
			<div id="Proshows" class="sec">Proshows</div>
			<div id="Info" class="sec">General Info</div>
			<div id="Sponsors" class="sec">Sponsors</div>
		</div>

	</body>
	<script type="text/javascript" src="js/commonscript.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	
</html>