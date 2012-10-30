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
			<p>We make league management easy by streamlining administration and giving you the features that matter most. Have more questions? Check out our <a href="leagues_faq.php">League FAQ</a> or <a href="contact.php">Contact Us</a>.
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
							<p>We offer a simple pricing structure that fits organizations of all sizes. See our <a href="leagues_faq.php">FAQ</a> for specific billing questions.</p>
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
					<h4>Custom Solution</h4>
					<div><!-- needs empty div because accordion function destroys skeleton.css formatting --> 
						<div class="container add-top">
							<p>Contact us and we'll provide a custom quote for your League or Club solution.</p>
							<a href="sign_up.php" class="button sunny">Contact Us<br><small>for a custom quote</small></a>
							<hr class="add-top remove-bottom">
							<table id="chart" class="add-top add-bottom" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr>
										<td width="15%"><img src="http://www.teamsnap.com/_images/icon-feature-maxteams.png"></td>
										<td width="75%">Max Teams</td>
										<td width="10%">Unlimited</td>
									</tr>
									<tr>
										<td><img src="http://www.teamsnap.com/_images/icon-feature-maxplayers.png"></td>
										<td>Max Players</td>
										<td>Unlimited</td>
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
										<td><img src="http://www.teamsnap.com/_images/bullet-checkmark.gif"></td>
									</tr>
								</tbody>
							</table>
							<hr class="remove-top add-bottom">
						</div>
					</div>
				</div>		    
			</div>
		</div>
	</div>
<!-- END MAIN CONTENT -->
<?php include "_includes/footer.php"; ?>