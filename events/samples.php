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
	<title>LVBots: Sample Bots</title>
</head>
<body>
<div id="container">
	<div id="rightColumn">
		<div id="header">
			<?php	insert_header();	?> 	
		</div>
		<div id="content">
			<div align="center">

				<h1>Sample Robots</h1>
				<p>
				Here are a few of the many choices you have to pick from if you want to participate in the LVBots Challenge.
				</p>
                <hr>

                You can build and program a bot with <a href="http://mindstorms.lego.com/eng/default.asp">Lego Mindstroms</a>!  
				This is a very popular way for kids and teens to create an autonomous robot.  
				They can be programmed with the easy Lego graphical "drag and drop" programming language, 
				or, for more control, with the Not Quite C (NQC) language. <br>
				<img src="images/lego2.jpg">
				<img src="images/lego3.jpg">
                <hr>

                You can also purchase a robot kit, and even modify it with your own ideas.   
				Some popular robot kits are:
                <br>
                <br>
                <A HREF="http://www.solarbotics.com/products/index.php?scdfa-250100084-viewDetail-productzq3728zq4categoryzq31=true">
                <IMG SRC="images/sumovore.jpg" border=0 align="right">
                <b>The Solarbotics Sumovore - $89</b></a>
				This is a great little sumo robot kit that can compete with no programming required.  It also will do line following standard.
				You can also get a microcontroller brain board for it, and program it with your own code.  The kit requires soldering.
				<br clear="right">
  
				<br>
				<br>
				<A HREF="http://www.junun.org/MarkIII/">
				<IMG SRC="images/markiii_sumo.jpg" border=0 align="right">
				<b>The Mark III - $92</b> 
				</a>
				This is another nice sumo robot kit that comes with a PIC microcontroller.  It programs with the computer serial port, 
				and sample code is available.  It cam be programmed in BASIC, C, Assembly and other languages.  The kit requires soldering.
				<br clear="right">
  
				<br>
				<br>
				<A HREF="http://www.parallax.com/detail.asp?product_id=27400">
				<IMG SRC="images/sumobot.jpg" border=0 align="right">
				<b>The Parallax SumoBot - $149</b> 
				</a>
				A great beginnaer Sumo kit.  Two can be purchased as a competition kit.
				Available in USB or serial version.  BASIC stamp based, so very easy to program.  No soldering Required
				<br clear="right">
  
				<br>
				<br>
				<A HREF="http://www.budgetbot.com/CBA_Kit.html">
				<IMG SRC="images/cba.jpg" border=0 align="right">
				<b>The CBA Robot - $89</b> 
				</a>
				This robot kits looks to be too large for a mini sumo, but is programmed with the BASIC Stamp, a very easy controller for beginners.
				The kit requires soldering.
				<br clear="right">
  
				<br>
				<br>
				<A HREF="http://www.parallax.com/detail.asp?product_id=28832">
				<IMG SRC="images/boebot.jpg" border=0 align="right">
				<b>The BOE-Bot robot kit - $199</b><br>
				</a>
				<A HREF="http://www.radioshack.com/product.asp?catalog%5Fname=CTLG&category%5Fname=&product%5Fid=276%2D629&hp=search">
				<b>Also from RadioShack - $150</b><br>
				</a>
				Another popular robot kit.  Too big for mini-sumo, but available with lots of options, including line following.
				Available in USB or serial version.  Also BASIC stamp based, so very easy to program.
				<br clear="right">

				<br>
				<br>
				You can also find robot kits from:<br>
				<A HREF="http://www.lynxmotion.com/">http://www.lynxmotion.com/</a><br>
				<A HREF="http://www.budgetrobotics.com">http://www.budgetrobotics.com</a><br>
				<A HREF="http://www.robotstore.com">http://www.robotstore.com</a><br>
				<A HREF="http://www.acroname.com">http://www.acroname.com</a>
                <hr>

                Finally, you can build your own bot using plastic, metal, or wood.  
				Buy a controller or build your own to design the entire robot from the ground up.
				<br>
                <img src="images/bot1.jpg" >
                <img src="images/bot2.jpg" >
                <img src="images/bot3.jpg" >
				<br>
				<a href="http://www.pololu.com/products/elec.html#botcontrol"><img src="images/orangutan.jpg" align="left" border=0></a>
				If you choose to buy a controller, the 
				<a href="http://www.pololu.com/products/elec.html#botcontrol">Pololu Orangutan and Baby Orangutan</a> are good choices for an inexpensive, yet powerful robot brain.  
				Pololu also has 
				<a href="http://www.pololu.com/products/pololu/#motocon">Motor Controllers</a>
				
				for all sizes of motors.



				<p>&nbsp;</p>
			</div>
		</div>
	</div>
	<div id="leftColumn">
		<?php include("eventNavigation.html"); ?>
		<?php	insert_left();	?> 	
	</div>
</div>
</body>
</html>
