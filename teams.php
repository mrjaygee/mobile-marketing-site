<?php 
	$title="Teams & Groups | TeamSnap";
	$description="TeamSnap";
	$page="frame";
	$h1="H1 description goes here";
	include "_includes/header_mobile.php"; 
?>
<!-- Page Specific CSS & Scripts
================================================== -->
<link rel="stylesheet" href="_includes/jquery-ui/css/no-theme/jquery-ui-1.9.0.custom.css" type="text/css" />
<script src="_includes/jquery-ui/js/jquery-ui-1.9.0.custom.js" type="text/javascript"></script>
<script>
$(function() {
	//$( ".accordion" ).accordion({ header: "h4", navigation: true });
	$( ".accordion" ).accordion({
	    autoHeight: false,
	    clearStyle: true
	});
	$( "#tabs" ).tabs();
	// Hover states on the static widgets
	$( "#dialog-link, #icons li" ).hover(
		function() {
			$( this ).addClass( "ui-state-hover" );
		},
		function() {
			$( this ).removeClass( "ui-state-hover" );
		}
	);
});
</script>
<!-- End Page Specific CSS & Scripts -->
</head>
<body>
	<?php include ("_includes/topbar.php"); ?>
<!-- BEGIN MAIN CONTENT -->
	<div class="full-width">
		<img src="_images/masthead_07.jpg">
		<h1>Teams &amp; Groups</h1>
	</div>
	<div class="container">
		<div class="sixteen columns remove-top">
			<h5 class="add-top">Everything you need to manage your team.</h5>
			<p>No more phone trees, paper sign-up sheets, or driving to the wrong game location. TeamSnap's team websites and mobile apps make it easy to manage your team and get organized.</p>
			<div class="row">
				<div class="one-half column alpha">
					<h6 class="remove-bottom" style="background:url(_images/features-arrow.gif) 85% 100% no-repeat;background-size: 30px 30px;">Check out<br>the features
				</div>
				<div class="one-half column omega">
					<a href="sign_up.php" class="button sunny half">Sign Up Free!</a>
				</div>
			</div>
			<div class="clear"></div>	
		</div>
	</div>
	<div class="full-width">
		<div id="tabs">
		    <ul>
		        <li><a href="#tabs-1">Features</a></li>
		        <li><a href="#tabs-2">Plans</a></li>
		    </ul>
		    <div id="tabs-1">
			    <div class="accordion">
			    	<h4>Team Home Page</h4>
					<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
						<div class="container">	    	
					    	<div class="sixteen columns add-top">
					    		<p>Instantly produce a website to display all of your team information.</p>
					    		<ul class="bullet-circle">
						    		<li>Display a custom photo of your team</li>
						    		<li>See what your team record is to date</li>
						    		<li>Review the last game played and next upcoming game or event</li>
						    		<li>View recent messages from your team members and access them with a click</li>
					    		</ul>
					    	</div>
						</div>
			    	</div>
			    	<h4>Team Roster</h4>
			    	<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
			    		<div class="container">	    	
			    	    	<div class="sixteen columns add-top">
			    	    		<p>Call up your team roster anytime - online or from your phone.</p>
					    		<ul class="bullet-circle">
				    				<li>Essential contact information is easy to access, with clickable email links</li>
				    				<li>Each player with his/her own customizable photo for quick recognition</li>
				    				<li>Detailed player profiles, accessible with a single click</li>
				    				<li>"Custom fields" for things like "Jersey Size", "Parent's Name", or anything else</li>
					    		</ul>
					    	</div>
					    </div>
			    	</div>
			    	<h4>Easy Team Scheduling</h4>
			    	<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
			    		<div class="container">	    	
			    	    	<div class="sixteen columns add-top">
			    	    		<p>Publish the schedule to your team including games, practices and events.</p>
			    	    		<ul class="bullet-circle">
			    					<li>Organize and automate your team's schedule</li>
			    					<li>Use our sports team scheduling software where you want to - on the web or using our mobile apps</li>
			    					<li>See game info, including opponent, date/time, location and result for your team or group</li>
			    					<li>View your sports team schedule in either list or monthly calendar format</li>
			    	    		</ul>
			    	    	</div>
			    	    </div>
			    	</div>
			    	<h4>Know Who's Available</h4>
			    	<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
			    		<div class="container">	    	
			    	    	<div class="sixteen columns add-top">
			    	    		<p>Never forfeit again. Track your player availability for every game and practice.</p>
			    	    		<ul class="bullet-circle">
			    					<li>See who can attend which games/events and who can't</li>
			    					<li>See past availability to track attendance</li>
			    					<li>Enter notes with more information on availability</li>
			    					<li>Eliminate forfeiting because of too few players</li>
			    					<li>Count the total number of players per game</li>
			    					<li>For coed teams, display the number of male/female players for each game</li>
			    					<li>Know when you need substitutes</li>
			    	    		</ul>
			    	    	</div>
			    	    </div>
			    	</div>
			    	
			    </div>
		    </div>
		    <div id="tabs-2">
				<div class="accordion">
					<h4>Free Plan</h4>
					<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
						<div class="container add-top">
							<p>TeamSnap is totally free, but we do offer premium plans to save you even more time. Get started today! No committment, no credit card required.</p>
							<h5>What's Included?</h5>
							<ul class="bullet-check">
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-roster.gif);">Team Roster</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-schedule.gif);">Schedule</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-messages.gif);">Messages</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-security.gif);">Privacy &amp; Security</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-fansite.gif);">Team Home Page</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-facebook-16.png);">Facebook Integration</li>
							</ul>
							<div class="sixteen columns add-bottom">
								<h6 class="center green add-bottom">Ready? Get Started Now. </h6>
								<a href="sign_up.php" class="button sunny">Sign Up Free!</a>
							</div>
						</div>
						
					</div>
					<h4>Basic Plan</h4>
					<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
						<div class="container add-top">
							<p>Just the essentials. The Teamsnap Basic Plan gives you all of the features of our free plan, plus email reminders, text messaging, photos and more. </p>
							<h5 class="green">Annual Plan: $55</h5>
							<h5 class="green">Monthly Plan: $6.95 per team</h5>
							<h5>What's Included?</h5>
							<ul class="bullet-check">
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-roster.gif);">Team Roster</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-schedule.gif);">Schedule</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-messages.gif);">Messages</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-security.gif);">Privacy &amp; Security</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-fansite.gif);">Team Home Page</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-facebook-16.png);">Facebook Integration</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-availability.gif);">Player Availability</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-email.gif);">Email Reminders</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-phone.gif);">Text Messaging</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-photos.gif);">Photos &amp; Files</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-payments.gif);">Payment Tracking</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-payments.gif);">Online Collections</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-refreshments.gif);">Refreshments</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-support.gif);">Priority Email Support</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-advertising.gif);">No Banner Advertising</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-storage.gif);">Season Archiving</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-customization.gif);">Store Customization</li>
							</ul>
							<div class="sixteen columns add-bottom">
								<h6 class="center green add-bottom">Ready? Get Started Now. </h6>
								<a href="sign_up.php" class="button sunny">Sign Up</a>
							</div>
						</div>
					</div>
					<h4>Premium Plan</h4>
					<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
						<div class="container add-top">
							<p>You get everything! Great for teams that need a greater degree of customization and statistics.</p>
							<h5 class="green">Annual Plan: $79</h5>
							<h5 class="green">Monthly Plan: $9.95 per team</h5>
							<h5>What's Included?</h5>
							<ul class="bullet-check">
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-roster.gif);">Team Roster</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-schedule.gif);">Schedule</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-messages.gif);">Messages</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-security.gif);">Privacy &amp; Security</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-fansite.gif);">Team Home Page</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-facebook-16.png);">Facebook Integration</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-availability.gif);">Player Availability</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-email.gif);">Email Reminders</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-phone.gif);">Text Messaging</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-photos.gif);">Photos &amp; Files</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-payments.gif);">Payment Tracking</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-payments.gif);">Online Collections</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-refreshments.gif);">Refreshments</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-support.gif);">Priority Email Support</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-advertising.gif);">No Banner Advertising</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-storage.gif);">Season Archiving</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-customization.gif);">Store Customization</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-weather.gif);">Weather Forecasts</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-statistics.gif);">Statistics</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-smiley.gif);">Custom Domain Name</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-customize_logo.gif);">Customized Team Logo</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-customize_colors.gif);">Customized Team Colors</li>
								<li style="list-style-image:url(http://www.teamsnap.com/_images/icon-feature-customize_player_info.gif);">Customized Player Fields</li>
							</ul>
							<div class="sixteen columns add-bottom">
								<h6 class="center green add-bottom">Ready? Get Started Now. </h6>
								<a href="sign_up.php" class="button sunny">Sign Up</a>
							</div>
						</div>
					</div>
				</div>		    
			</div>
		</div>
	</div>
<!-- END MAIN CONTENT -->
<?php include "_includes/footer.php"; ?>