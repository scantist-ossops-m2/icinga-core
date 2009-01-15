<?php
include_once(dirname(__FILE__).'/includes/utils.inc.php');

$link_target="main";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML>

<HEAD>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<TITLE>Nagios</TITLE>
<link href="/nagios/stylesheets/common.css" type="text/css" rel="stylesheet">
</HEAD>

<BODY class='navbar'>

<SCRIPT LANGUAGE="JavaScript">
<!--

if(parseInt(navigator.appVersion.substring(0,1))>=3){
  doton = new Image(13,14);
  doton.src = "images/orangedot.gif";
  dotoff = new Image(13,14);
  dotoff.src = "images/greendot.gif";
  }

function switchdot(name,on){
  if(parseInt(navigator.appVersion.substring(0,1))>=3){
    image = eval("" + (on == 1 ? "doton.src" : "dotoff.src"));
    document[name].src=image;
    }
  }

//-->
</SCRIPT>



<div class="navbarlogo">
<a href="http://www.nagios.org" target="_blank"><img src="images/sblogo.png" border="0" alt="Nagios"></a>
</div>

<div class="navsection">
<div class="navsectiontitle">General</div>
<div class="navsectionlinks">
<ul class="navsectionlinks">
<li><a href="main.php" target="<?php echo $link_target;?>">Home</a></li>
<li><a href="docs/" target="<?php echo $link_target;?>">Documentation</a></li>
</ul>
</div>
</div>


<div class="navsection">
<div class="navsectiontitle">Current Status</div>
<div class="navsectionlinks">
<ul class="navsectionlinks">
<li><a href="<?php echo $cfg["cgi_base_url"];?>/tac.cgi" target="<?php echo $link_target;?>">Tactical Overview</a></li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/statusmap.cgi?host=all" target="<?php echo $link_target;?>">Map</a></li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&style=hostdetail" target="<?php echo $link_target;?>">Hosts</a></li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?host=all" target="<?php echo $link_target;?>">Services</a></li>
<li>
<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&style=overview" target="<?php echo $link_target;?>">Host Groups</a>
<ul>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&style=summary" target="<?php echo $link_target;?>">Summary</a></li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&style=grid" target="<?php echo $link_target;?>">Grid</a></li>
</ul>
</li>
<li>
<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?servicegroup=all&style=overview" target="<?php echo $link_target;?>">Service Groups</a>
<ul>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?servicegroup=all&style=summary" target="<?php echo $link_target;?>">Summary</a></li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?servicegroup=all&style=grid" target="<?php echo $link_target;?>">Grid</a></li>
</ul>
</li>
<li>
<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?host=all&servicestatustypes=28" target="<?php echo $link_target;?>">Problems</a>
<ul>
<li>
<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?host=all&servicestatustypes=28" target="<?php echo $link_target;?>">Services</a> (<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?host=all&type=detail&hoststatustypes=3&serviceprops=42&servicestatustypes=28" target="<?php echo $link_target;?>">Unhandled</a>)
</li>
<li>
<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&style=hostdetail&hoststatustypes=12" target="<?php echo $link_target;?>">Hosts</a> (<a href="<?php echo $cfg["cgi_base_url"];?>/status.cgi?hostgroup=all&style=hostdetail&hoststatustypes=12&hostprops=42" target="<?php echo $link_target;?>">Unhandled</a>)
</li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/outages.cgi" target="<?php echo $link_target;?>">Network Outages</a></li>
</ul>
</li>
</ul>
</div>


<div class="navbarsearch">
<form method="get" action="<?php echo $cfg["cgi_base_url"];?>/status.cgi" target="<?php echo $link_target;?>">
<fieldset>
<legend>Quick Search:</legend>
<input type='hidden' name='navbarsearch' value='1'>
<input type='text' name='host' size='15' class="NavBarSearchItem">
</fieldset>
</form>
</div>

</div>


<div class="navsection">
<div class="navsectiontitle">Reports</div>
<div class="navsectionlinks">
<ul class="navsectionlinks">
<li><a href="<?php echo $cfg["cgi_base_url"];?>/avail.cgi" target="<?php echo $link_target;?>">Availability</a></li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/trends.cgi" target="<?php echo $link_target;?>">Trends</a></li>

<li>
<a href="<?php echo $cfg["cgi_base_url"];?>/history.cgi?host=all" target="<?php echo $link_target;?>">Alerts</a>
<ul>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/history.cgi?host=all" target="<?php echo $link_target;?>">History</a></li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/summary.cgi" target="<?php echo $link_target;?>">Summary</a></li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/histogram.cgi" target="<?php echo $link_target;?>">Histogram</a></li>
</ul>
</li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/notifications.cgi?contact=all" target="<?php echo $link_target;?>">Notifications</a></li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/showlog.cgi" target="<?php echo $link_target;?>">Event Log</a></li>
</li>
</ul>
</div>
</div>


<div class="navsection">
<div class="navsectiontitle">System</div>
<div class="navsectionlinks">
<ul class="navsectionlinks">
<li><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=3" target="<?php echo $link_target;?>">Comments</a></li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=6" target="<?php echo $link_target;?>">Downtime</a></li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=0" target="<?php echo $link_target;?>">Process Info</a></li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=4" target="<?php echo $link_target;?>">Performance Info</a></li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/extinfo.cgi?type=7" target="<?php echo $link_target;?>">Scheduling Queue</a></li>
<li><a href="<?php echo $cfg["cgi_base_url"];?>/config.cgi" target="<?php echo $link_target;?>">Configuration</a></li>
</ul>
</div>
</div>




</BODY>
</HTML>
