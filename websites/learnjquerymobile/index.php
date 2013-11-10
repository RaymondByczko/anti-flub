<?php
/**
@company self
@author Raymond Byczko
@start_date 2013-11
@work_history 2013-11-10 RByczko, Added several CSS3 gradients.
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Learning JQueryM</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.js"></script>
	<meta name="viewport" content="widht=device-width, initial-scale=1, user-scalable=no">
	<style>
	img.resized {width:100%; }
	img.resized50 {width:50%;}
	.center {position: static; margin-left:auto; margin-right:auto;}
	.centerm {margin-left:auto; margin-right:auto;}
	.centertwo {position: static;}
	.centertwoo {}
	.blueradial {
		background:-webkit-radial-gradient(blue, black);
		height:50px;
		width:100%;
	}
	.blackstripe {
		background:black;
		height:50px;
		width:100%;
	}
	@-webkit-keyframes growbarrier {
		0% { height: 50px; }
		100% { height: 100px; }
	}
	@-webkit-keyframes thinblack {
		0% { height: 50px; }
		100% { height: 0px; }
	}
	#blueradial_id {
		-webkit-animation-name: growbarrier;
		-webkit-animation-duration: 4s;
	}
	#cthinblack_id {
		-webkit-animation-name: thinblack;
		-webkit-animation-duration: 4s;
	}
		
	</style>
</head>
<body>
<div data-role="page" id="index">
	<div data-role="header">
	<a href="#settings">Settings</a>
	<h1>Learning JQMobile</h1>
	</div>
	<div data-role="content">
	<div data-role="controlgroup">
	<a href="#fishing" data-role="button">Fishing</a>
	<a href="#astronomy" data-role="button">Astronomy</a>
	<a href="#cthree" data-role="button">CSS3</a>
	</div>
	<p>This is a JQueryMobile based website used
	for learning.  It displays various technique as to
	how to present content and controls in the form factor
	typically found on smartphones and tablets.  Because
	offshore fishing and astronomy are some of my hobbies,
	the content is based on these.  Enjoy!</p>
	</div>
	<div data-role="footer" data-position="fixed" position="fixed">
	<a href="#index">Home</a>
	<span>copyright Raymond Byczko 2013</span>
	</div>
</div>
<div data-role="page" id="fishing">
	<div data-role="header" data-position="fixed">
	<a href="#settings">Settings</a>
	<h1>Fishing: JQuMobile</h1>
	</div>
	<div data-role="content">
	<div data-role="controlgroup">
	<a href="#astronomy" data-role="button">Astronomy</a>
	<a href="#cthree" data-role="button">CSS3</a>
	</div>
	<img class="resized" src="/images/tuna01.JPG"/>
	<div data-role="collapsible" data-collapsed="true">
	<h2>The big fish</h2>
	<p>On Oct 6th, 2013, a 260 lbs bigeye was caught on the
	SeaDevil in the northern Canyons off of New Jersey</p>
	<p>The fish took 4 men to bring in and the fight lasted
	approximately 3 hours.  Near the end of the fight, the
	rod broke mid-section, with the line still going through
	the bottom two guides.
	<p>At the end of the fight, the fish was cleaned and
	shared among everyone on the boat.  The right thing to
	do.</p>
	</div>
	<div data-role="collapsible" data-collapsed="true">
	<h2>Fishing lines for tuna</h2>
	<p>Nothing particularly fancy was used to catch this fish.
	The line used was 80lbs monofilament purchased from Cabelas.
	To reduce cost I purchased Cabela's Salt Striker which
	is $24.99 for a 1lbs spool (that is 600 yards).  Ande, which
	I use for bluefish and striped bass, goes for $39.99.  On
	a previous trip, the bright green was commented by a fellow
	angler, who thought it might not be the best.  As this trip proved
	out it was more than satifactory!</p>
	<p>The thing to remember when fishing on a party boat 'platform'
	is that you have no control exactly where that fish will go! Line
	scrapes are inevitable.  Further, even when no fish is caught by
	you, someone else may get one, drag your line for a ride, and quite
	probably result in a tangled mess.  The only way to extricate
	yourself and get back in is to cut the mess.</p>
	<p>In the end, you will end up buying a lot of line and replacing it
	often.  There is nothing wrong with fairly cheap and pretty good versus
	more expensive and excellent.</p>
	</div>
	</div>
	<div data-role="footer" data-position="fixed" position="fixed">
	<a href="#index">Home</a>
	<span>copyright Raymond Byczko 2013</span>
	</div>
</div>
<div data-role="page" id="astronomy">
	<div data-role="header" data-position="fixed">
		<a href="#settings">Settings</a>
		<h1>Stars: JQuMobile</h1>
	</div>
	<div data-role="content">
		<div data-role="controlgroup">
		<a href="#fishing" data-role="button">Fishing</a>
		<a href="#cthree" data-role="button">CSS3</a>
		</div>
		<img class="resized" src="/images/moon01.JPG"/>
		<div data-role="collapsible" data-collapsed="true">
		<h2>Lets look up!</h2>
		<p>Our nearest celestial neighbor never ceases to make
		me feel awe!</p>
		<p>This fall there are many wonders to see as Orion becomes
		visible in the south earlier in the night.</p>
		<p>Shortly after sunset, venus can be observed approximate
		22 degrees elevation off the horizon between southwest and
		west.  I 'discovered' venus one night - seeing a crescent
		was the clue!</p>
		</div>
		<div data-role="collapsible" data-collapsed="true">
		<h2>Astrophotography</h2>
		<p>
		The picture of the moon above was taken with a HP digital camera
		from Walmart.  Although ISO can be set on it, along with 'near'
		and 'far' settings, and a few other items, it is far from from
		a SLR normally used to capture night sky.
		</p>
		<p>Still, holding the camera in front of the eyepiece produced
		the above image.</p>
		</div>
	</div>
	<div data-role="footer" data-position="fixed" position="fixed">
		<a href="#index">Home</a>
		<span>copyright Raymond Byczko 2013</span>
	</div>
</div>


<div data-role="page" id="cthree">
	<div data-role="header" data-position="fixed">
		<a href="#settings">Settings</a>
		<h1>CSS3: JQuMobile</h1>
	</div>
	<div data-role="content">
		<div data-role="controlgroup">
			<a href="#fishing" data-role="button">Fishing</a>
			<a href="#astronomy" data-role="button">Astronomy</a>
		</div>
		<div data-role="collapsible" data-collapsed="true">
			<h2>CSS Stuff here</h2>
			<p>Here are the CSS links</p>
			<div data-role="controlgroup">
				<a href="#cssreflection" data-role="button">Text Reflection</a>
				<a href="#imagereflection" data-role="button">Img Reflection</a>
				<a href="#riverreflection" data-role="button">Rvr Reflection</a>
				<a href="#blueradial" data-role="button">Blue Radial</a>
				<a href="#thebarrier" data-role="button">Barrier</a>
			</div>
		</div>
		<div data-role="collapsible" data-collapsed="true">
			<h2>More CSS Stuff here</h2>
			<p>
			The picture of the moon above was taken with a HP digital camera
			from Walmart.  Although ISO can be set on it, along with 'near'
			and 'far' settings, and a few other items, it is far from from
			a SLR normally used to capture night sky.
			</p>
		</div>
	</div>
	<div data-role="footer" data-position="fixed" position="fixed">
		<a href="#index">Home</a>
		<span>copyright Raymond Byczko 2013</span>
	</div>
</div>
<div data-role="page" id="cssreflection">
	<div data-role="header" data-position="fixed">
		<a href="#settings">Settings</a>
		<h1>CSS3: Reflection</h1>
	</div>
	<div data-role="content">
		<div data-role="controlgroup">
			<a href="#fishing" data-role="button">Fishing</a>
			<a href="#astronomy" data-role="button">Astronomy</a>
		</div>
		<p style="-webkit-box-reflect: below;">
		Reflected text
		</p>
	</div>
	<div data-role="footer" data-position="fixed" position="fixed">
		<a href="#index">Home</a>
		<span>copyright Raymond Byczko 2013</span>
	</div>
</div>
<div data-role="page" id="imagereflection">
	<div data-role="header" data-position="fixed">
		<a href="#settings">Settings</a>
		<h1>CSS3: Img Reflection</h1>
	</div>
	<div data-role="content">
		<div data-role="controlgroup">
			<a href="#fishing" data-role="button">Fishing</a>
			<a href="#astronomy" data-role="button">Astronomy</a>
		</div>
		<div class="centerm">
		<img  class="centertwoo" src="/images/breakfast01.JPG" style="-webkit-box-reflect: below 0px;"/>
		</div>
		<div>
		<img  class="centertwoo"  style="opacity:0.50" src="/images/blank01.JPG" />
		</div>
	</div>
	<div data-role="footer" data-position="fixed" position="fixed">
		<a href="#index">Home</a>
		<span>copyright Raymond Byczko 2013</span>
	</div>
</div>
<div data-role="page" id="riverreflection">
	<div data-role="header" data-position="fixed">
		<a href="#settings">Settings</a>
		<h1>CSS3: River Reflection</h1>
	</div>
	<div data-role="content">
		<div data-role="controlgroup">
			<a href="#fishing" data-role="button">Fishing</a>
			<a href="#astronomy" data-role="button">Astronomy</a>
		</div>
		<img  style="display: block; -webkit-box-reflect: below 0px;" src="/images/river01.JPG" />
		<img  style="opacity:0.50; display: block" src="/images/blue01.JPG" />
	</div>
	<div data-role="footer" data-position="fixed" position="fixed">
		<a href="#index">Home</a>
		<span>copyright Raymond Byczko 2013</span>
	</div>
</div>
<div data-role="page" id="blueradial">
	<div data-role="header" data-position="fixed">
		<a href="#settings">Settings</a>
		<h1>CSS3: Blue Radial</h1>
	</div>
	<div data-role="content">
		<div data-role="controlgroup">
			<a href="#fishing" data-role="button">Fishing</a>
			<a href="#astronomy" data-role="button">Astronomy</a>
		</div>
		<div class="blueradial">
		</div>
	</div>
	<div data-role="footer" data-position="fixed" position="fixed">
		<a href="#index">Home</a>
		<span>copyright Raymond Byczko 2013</span>
	</div>
</div>
<div data-role="page" id="thebarrier">
	<div data-role="header" data-position="fixed">
		<a href="#settings">Settings</a>
		<h1>CSS3: The Barrier</h1>
	</div>
	<div data-role="content">
		<div data-role="controlgroup">
			<a href="#fishing" data-role="button">Fishing</a>
			<a href="#astronomy" data-role="button">Astronomy</a>
		</div>

		<div class="blackstripe">
		</div>
		<div class="blueradial" id="blueradial_id">
		</div>
		<div class="blackstripe" id="cthinblack_id">
		</div>
		<div class="blackstripe">
		</div>
		<div class="blackstripe">
		</div>
	</div>
	<div data-role="footer" data-position="fixed" position="fixed">
		<a href="#index">Home</a>
		<span>copyright Raymond Byczko 2013</span>
	</div>
</div>
</body>
</html>
</body>
</html>
