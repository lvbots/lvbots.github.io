<?php
	// Setup include path to find our code from any subdirectory
	$path = '/home/lvbots/www';
	set_include_path( get_include_path() . PATH_SEPARATOR . $path );
	include( "baseCode.php" );
?> 	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php	insert_head_tags();	?> 	
	<title>LVBots: Events</title>
</head>
<body>
<div id="container">
	<div id="rightColumn">
		<div id="header">
			<?php	insert_header();	?> 	
		</div>
		<div id="content">
			<div align="center">
			<font size=+3>LVBots Challenge 2.0</font><br/>
			<font size=+1>Saturday, May 6, 2006 - 9 AM to 2 PM</font><br/>
			<font size=+1>Durango Hills Community Center / YMCA <br/> 3521 N. Durango, Between Gowan and Cheyenne</font><br/>
			<font size=+1><a href="http://maps.google.com/maps?f=l&hl=en&q=durango+hills+community+center&near=las+vegas,+nv&ll=36.223227,-115.234566&spn=0.096661,0.151234&om=1">Click Here For Map</a></font><br/>
			</div>
			<br/>
			<img src="lvbc3.jpg" align="right"  hspace="5"/>
			LVBots is happy to annouce our next autonomous robotics competition.  
			Like the last two, this competition is open to anyone interested in robotics.  
			We expect to have all levels of robot builders participating, from beginners to experts.
			If you have a robot to compete in any of the events, we would love to see it.
			If you are new to robotics, or just want to see what robot builders in Las Vegas have been working on,  please join us.
			<br clear="right">
			<br/>
			<img src="lvbc2.jpg" align="left" hspace="5"/>
			We will be having a line following event, in which robots race each other around a track made with a 1/2" black line.
			We will also have a mini sumo competition, where robots will try to push their opponents out of a round ring.
			The line maze event will challenge a robot to navigate a maze made of black tape to find the shortest path to the goal.
			There will be prizes donated by our sponsers for the contest winners.
			<br clear="left">
			<h3>The rules for the different events are available here:</h3>
			<a href="sumo_rules.php">Mini-Sumo Rules</a><br/>
			<a href="line_following_rules.php">Line Following Rules</a><br/>
			<a href="line_maze_rules.php">Line Maze Rules</a><br/>
			<br clear="both">
			<div align="center">
			<img src="lvbc1.jpg"/>
			<br/>
			<br/>
			If you are interested to participate in the next LVBots Challenge, but don't know where to begin, 
			look at some of these <a href="samples.php">Sample Robot Ideas here.</a><br/>

			<br/><h1>Prizes for the LVBots Challenge have been <br/>donated by Our Sponsors</h1>
			<table width="100%">
			<tr><td width="50%" align="center">
				<font size="+1">
				<a href="http://www.pololu.com/"><img src="/sponser banners/pololu.gif" border=0 alt="Pololu"><br/>Pololu</a><br/>
				</font>
			</td><td width="50%" align="center">
				<font size="+1">
				<a href="http://www.solarbotics.com/"><img src="/sponser banners/solarbotics.gif" border=0 alt="Solarbotics"><br/>Solarbotics</a><br/>
				</font>
			</td></tr><tr><td width="50%" align="center">
				<font size="+1">
				<a href="http://www.parallax.com/"><img src="/sponser banners/parallax.gif" border=0 alt="Parallax"><br/>Parallax</a><br/>
				</font>
			</td><td width="50%" align="center">
				<font size="+1">
				<a href="http://www.wrighthobbies.net/"><img src="/sponser banners/wright.gif" border=0 alt="Wright Hobbies Robotics"><br/>Wright Hobbies Robotics</a><br/>
				</font>
			</td></tr><tr><td width="50%" align="center">
				<font size="+1">
				<a href="http://www.nubotics.com/"><img src="/sponser banners/nubotics.gif" border=0 alt="Nubotics"><br/>Nubotics</a><br/>
				</font>
			</td><td width="50%" align="center">
				<font size="+1">
				<a href="http://www.makezine.com/"><img src="/sponser banners/make.gif" border=0 alt="Make: Magazine"><br/>Make: Magazine</a><br/>
				</font>
			</td></tr><tr><td width="50%" align="center" colspan=2>
				<font size="+1">
				<a href="http://www.smallrobot.com/"><img src="/sponser banners/norland.gif" border=0 alt="D.C. Waterjet"><br/>Norland Research</a><br/>
				</font>
			</td></tr></table>
			<br/>

			</div>


			<p>&nbsp;</p>
		</div>
	</div>
	<div id="leftColumn">
		<?php include("eventNavigation.html"); ?>
		<?php	insert_left();	?> 	
	</div>
</div>
</body>
</html>
