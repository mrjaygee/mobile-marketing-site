<?php 
	$title="Mobile App for iPhone and iPod touch for managing your sports team | TeamSnap";
	$description="TeamSnap Mobile for iPhone.";
	$page="iphone_interstitial";
	$h1="Mobile App for iPhone and iPod touch for your sports team | TeamSnap";
	include "_includes/header_mobile.php"; 
?>
<!-- Page Specific CSS & Scripts
================================================== -->
<link href='_css/custom.css' rel='stylesheet' type='text/css'>
<script language="javascript" type="text/javascript">
// Mobile Interstitial Page
$(document).ready(function(){
	var getApp = $.cookie('getApp');
	$(".no_thanks_cookie").click(function() {
		$.cookie('getApp', 'noThanks', {expires:183, path: '/'});	
		window.location.href = "index.php";	
	});  			
	if (getApp == 'noThanks') {
		window.location.href = "index.php";	
//	}
});
</script>
</head>
<body>
	<div id="main">
		<div class="container">
			<div id="download">
				<h1 class="primary museo">MANAGE YOUR TEAM ON YOUR IPHONE</h1>
				<a  id="main_download"class="button sunny no_thanks_cookie" title="Download the iPhone App" href="http://itunes.apple.com/us/app/teamsnap/id393048976?mt=8">Download the App<br><span class="small">available on the Apple App Store</span></a>
				<a id="no_thanks" class="button no_thanks_cookie" href="#" ><span class="small">No thanks. Just take me to the site.</span></a>
			</div>
		</div>
	</div>	
	<div id="features">
		<h2 class="secondary museo alt">NEW &amp; IMPROVED FEATURES:</h2>
		<div class="grid_1"><img src="_images/icon-ios-score.png"></div>
		<div class="grid_4">
			<h3>Enter Scores</h3>
			<p>As soon as the game is over, you can enter the score right from your phone. Or before the game, if you're feeling clairvoyant.</p>
		</div>
		<div class="grid_1"><img src="_images/icon-ios-push.png"></div>
		<div class="grid_4">
			<h3>Push Notifications</h3>
			<p>Receive important notifications (e.g. game canceled) directly on your phone - never  miss key team updates again.</p>
	  </div>
		<div class="clear"></div>
		<!--<h2 class="secondary museo alt">IMPROVED FEATURES:</h2>-->
		<div class="grid_1"><img src="_images/icon-ios-schedule.png"></div>
		<div class="grid_4">
			<h3>Add and Edit Games and Events</h3>
			<p>No need to head back to your computer when that make-up game gets added or yourpractice time changes.</p>
		</div>
		<div class="grid_1"><img src="_images/icon-ios-roster.png"></div>
		<div class="grid_4">
			<h3>Add and Edit Rosters</h3>
			<p>Add new players to the roster as soon as they join the team, or edit all of the information for any of your players (or yourself).</p>
		</div>
		<div class="grid_1"><img src="_images/icon-ios-player.png"></div>
		<div class="grid_4">
			<h3>Player Availability</h3>
			<p>Never forfeit again! Track your player availability for every game and practice.</p>
		</div>		
		<div align="center">
			<a  title="Download the iPhone App" href="http://itunes.apple.com/us/app/teamsnap/id393048976?mt=8"  class="no_thanks_cookie"><img src="_images/app_store.gif"></a>
			<p><a href="#" class="no_thanks_cookie">No thanks. Just take me to the site.</a></p>
		</div>
		<div class="clear"></div>
	</div>
</div>
<!-- END MAIN CONTENT -->
<?php include "_includes/footer.php"; ?>