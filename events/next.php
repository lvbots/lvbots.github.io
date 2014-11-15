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
			<font size=+3>LVBots Challenge 4.5</font><br/>
			<font size=+1>Dec 6, 2008  -  9AM - 12PM</font><br/>
			<font size=+1>Jack Lund Schofield Middle School Gym</font><br/>
			<font size=+1>8625 Spencer St. Las Vegas, NV 89123</font><br/>
     		</div>
			<br/>
			<img src="lvbc3.jpg" align="left"  hspace="5"/>
			LVBots is planning our next autonomous robotics competition.  
			Like the last, this competition is open to anyone interested in robotics.  There is no charge for entrants, or spectators.
			We expect to have all levels of robot builders participating, from beginners to experts.
			If you have a robot to compete in any of the events, we would love to see it.
			If you are new to robotics, or just want to see what robot builders in Las Vegas have been working on,  please join us.
			<br clear="right">
			<br/>
			<img src="lvbc2.jpg" align="right" hspace="5"/>
			We will be having 6 Robot Events:
			<ul>
			<li> <b>Mini Sumo</b> - robots will try to push their opponents out of a round ring.
			<li> <b>Line following</b> - robots race each other around a track made with a 1/2" black line.
			<li> <b>Line maze</b> - robots will navigate a maze made of black tape to find the shortest path to the goal.
			<li> <b>Pool racing</b> - robots will race around a course, avoiding other bots.
			<li> <b>Dead reckoning</b> - robots will try to "bee-line" back to the start after following a black line leading them away.
			<li> <b>Walking</b> - See who can build the fastest walking robot.
			</ul>
			There will be prizes donated by <a href="http://www.pololu.com/" target="_blank">Pololu Robotics</a> & <a href="http://www.atbatt.com/" target="_blank">AT Battery Company</a>, our sponser.
			<br clear="left">
			<h3>The rules for the different events are available here:</h3>
			<a href="sumo_rules.php">Mini-Sumo Rules</a><br/>
			<a href="line_following_rules.php">Line Following Rules</a><br/>
			<a href="line_maze_rules.php">Line Maze Rules</a><br/>
			<a href="dead_reckoning_rules.pdf">Dead Reckoning Rules</a><br/>
			<br clear="both">
			<div align="center">
			<img src="lvbc1.jpg"/>
			<br/>
			<br/>
			If you are interested to participate in the next LVBots Challenge, but don't know where to begin, 
			look at some of these <a href="samples.php">Sample Robot Ideas here.</a><br/>

			<br/><h1>Prizes for the LVBots Challenge have been <br/>donated by Our Sponsors</h1>
			<div align="center">
			<font size="+1">
			<a href="http://www.pololu.com/"><img src="/sponser banners/pololu.gif" border=0 alt="Pololu"><br/>Pololu</a><br/>
			<a href="http://www.atbatt.com/"><img src="/sponser banners/atbatt.gif" border=0 alt="Pololu"><br/>AT Battery Company</a><br/>
			</font>
			</div>
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
