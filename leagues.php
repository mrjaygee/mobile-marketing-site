<?php 
	$title="Leagues & Clubs | TeamSnap";
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
<style>
	#chart td {
		padding-bottom: 10px;
	}
	#chart img {
		max-width: 16px;
	}
</style>
<!-- End Page Specific CSS & Scripts -->
</head>
<body>
	<?php include ("_includes/topbar.php"); ?>
<!-- BEGIN MAIN CONTENT -->
	<div class="full-width">
		<img src="_images/masthead_leagues.jpg">
		<h1>Leagues &amp Clubs</h1>
	</div>
	<div class="container">
		<div class="sixteen columns remove-top">
			<h5 class="add-top">Everything you need to manage your League or Club.</h5>
			<p>We make league management easy by streamlining administration and giving you the features that matter most.</p>
			<div class="row">
				<div class="one-half column alpha">
					<h6 class="remove-bottom" style="background:url(_images/features-arrow.gif) 85% 100% no-repeat;background-size: 30px 30px;">Check out<br>the features
				</div>
				<div class="one-half column omega">
					<a href="sign_up.php" class="button sunny half">Start a Free Trial</a>
				</div>
			</div>
			<div class="clear"></div>	
		</div>
	</div>
	<div class="full-width">
		<div id="tabs">
		    <ul>
		        <li><a href="#tabs-1">Features</a></li>
		        <li><a href="#tabs-2">Pricing</a></li>
		    </ul>
		    <div id="tabs-1">
			    <div class="accordion">
			    	<h4>Team Integration</h4>
					<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
						<div class="container">	    	
					    	<div class="sixteen columns add-top">
					    		<h5>Cleanly integrated from top to bottom.</h5>
					    		<p>Keep all of your coaches and managers organized by putting your entire league under one roof with our league and club management products.</p>
					    		<p>Administrators can easily assign rosters and managers on a team level, perform scheduling duties on a division level, and keep everyone informed on a league level.</p>
					    	</div>
						</div>
			    	</div>
			    	<h4>Registration</h4>
			    	<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
			    		<div class="container">	    	
			    	    	<div class="sixteen columns add-top">
			    	    		<h5>Eliminate Paperwork and Headaches.</h5>
			    	    		<p>Our automated registration process is a piece-of-cake for players, and a huge time saver for administrators.</p>
					    		<h5>Stamp out data entry and re-entry.</h5>
					    		<p>Have players or parents enter the data, not you. When players register, the data they enter flows into the same database used for our roster management module. No syncing required. No need to manage multiple spreadsheets and re-key data from one system to another.</p>
								<h5>Super easy for parents and players.</h5>
								<p>Our automated registration process is a piece-of-cake for players, and a huge time saver for administrators.</p>

					    	</div>
					    </div>
			    	</div>
			    	<h4>Public Website</h4>
			    	<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
			    		<div class="container">	    	
			    	    	<div class="sixteen columns add-top">
			    	    		<p>TeamSnap lets you quickly and easily create a professional marketing site for your league or club. It's hard to recruit new players, teams, and coaches into your organization. A modern, professional image on the web is key to your recruitment efforts.</p>
			    	    	</div>
			    	    </div>
			    	</div>
			    	<h4>Schedules &amp; Rosters</h4>
			    	<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
			    		<div class="container">	    	
			    	    	<div class="sixteen columns add-top">
			    	    		<h5>A powerful roster system.</h5>
			    	    		<p>Watch your rosters auto-populate as players register for your league. Our powerful database will retrieve any roster member within seconds, saving you time.</p>
			    	    		<p>Parents and players will never be left in the dark about important events because they missed an email or phone call. TeamSnap automatically keeps them informed about all team and league activities (including last minute changes), and provides them access at home or on the go through our mobile apps.</p>
			    	    	</div>
			    	    </div>
			    	</div>
			    	
			    </div>
		    </div>
		    <div id="tabs-2">
				<div class="accordion">
					<h4>League Solution</h4>
					<div><!-- needs empty div because accordion function destroys skeleton.css formatting --> 
						<div class="container add-top">
							<p>We offer a simple pricing structure that fits organizations of all sizes. See our FAQ for specific billing questions.</p>
							<h5 class="green">Annual Plan: $249</h5>
							<h5 class="green">Monthly Plan: $31.99</h5>
							<hr class="add-top remove-bottom">
							<table id="chart" class="add-top add-bottom" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr>
										<td width="15%"><img src="http://www.teamsnap.com/_images/icon-feature-maxteams.png"></td>
										<td width="75%">Max Teams</td>
										<td width="10%">50</td>
									</tr>
									<tr>
										<td><img src="http://www.teamsnap.com/_images/icon-feature-maxplayers.png"></td>
										<td>Max Players</td>
										<td>1000</td>
									</tr>
									<tr>
										<td><img src="http://www.teamsnap.com/_images/icon-feature-publicwebsite.png"></td>
										<td>Public Website</td>
										<td><img src="http://www.teamsnap.com/_images/bullet-checkmark.gif"></td>
									</tr>
									<tr>
										<td><img src="http://www.teamsnap.com/_images/icon-feature-schedule.gif"></td>
										<td>Centralized Schedule</td>
										<td><img src="http://www.teamsnap.com/_images/bullet-checkmark.gif"></td>
									</tr>
									<tr>
										<td><img src="http://www.teamsnap.com/_images/icon-feature-roster.gif"></td>
										<td>Roster Management</td>
										<td><img src="http://www.teamsnap.com/_images/bullet-checkmark.gif"></td>
									</tr>
									<tr>
										<td><img src="http://www.teamsnap.com/_images/icon-feature-messages.gif"></td>
										<td>League Messaging</td>
										<td><img src="http://www.teamsnap.com/_images/bullet-checkmark.gif"></td>
									</tr>
									<tr>
										<td><img src="http://www.teamsnap.com/_images/icon-feature-registration.png"></td>
										<td>Registration</td>
										<td>+$250.00/yr</td>
									</tr>
								</tbody>
							</table>
							<hr class="remove-top add-bottom">
							<div class="sixteen columns add-bottom">
								<h6 class="center green add-bottom">Ready? Get Started Now. </h6>
								<a href="sign_up.php" class="button sunny">Start a Free Trial</a>
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