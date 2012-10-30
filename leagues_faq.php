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
	$( ".accordion" ).accordion({
	    autoHeight: false,
	    clearStyle: true
	});
});
</script>
<style>
	.ui-accordion .ui-accordion-header {
		background: transparent url(http://www.teamsnap.com/_images/leagues/icon-faq.png) 13px 18px no-repeat;
		background-size: 21px 21px;
		border-bottom: 1px solid #CCC;
		padding: .8em .5em .8em 3em;
		text-shadow: none;
	}
	.ui-accordion .ui-accordion-header.ui-accordion-header-active {
		background-image: url(http://www.teamsnap.com/_images/leagues/icon-faq.png);
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
			<h2 class="add-top">FAQ</h2>
		</div>
		<div class="clear"></div>	
	</div>
	</div>
	<div class="full-width">
	    <div class="accordion">
	    	<h4>I see that the league and club solution has both a league and a team component. Do I need to use the team component?</h4>
			<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
				<div class="container">	    	
			    	<div class="sixteen columns add-top">
			    		<p>No, you certainly don't need to use the team component. In this case you will want to elect the free team plan. However, bear in mind that coaches, players, and parents love the team solution, and if coaches, players, and parents love what you are doing, your club or league will grow!</p>
			    	</div>
				</div>
	    	</div>
	    	<h4>Are there any per transaction charges for TeamSnap Registration?
	    	</h4>
	    	<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
	    		<div class="container">	    	
	    	    	<div class="sixteen columns add-top">
	    	    		<p>Unlike other providers, we do not charge a per transaction fee for using TeamSnap Registration. We like to keep things simple! However, you do need to pay PayPal for credit card processing costs. A PayPal business account is free to set up, but they do charge to process transactions. Users can pay either via their PayPal account or with a regular-old credit card.</p>

			    	</div>
			    </div>
	    	</div>
	    	<h4>Can I pay for the league and club solution for just certain times of the year?</h4>
	    	<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
	    		<div class="container">	    	
	    	    	<div class="sixteen columns add-top">
	    	    		<p>Yes, you can. You will want to opt for a monthly billing plan. However, bear in mind that if you stop paying for the solution, you will lose access to the league and club functionality. Your teams will all revert to the free team plan. We will keep your league/ club data around and you can re-activate at any time.</p>
	    	    	</div>
	    	    </div>
	    	</div>
	    	<h4>How does billing work?</h4>
	    	<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
	    		<div class="container">	    	
	    	    	<div class="sixteen columns add-top">
	    	    		<p>You need to pay for monthly and annual plans in advance of the upcoming month or year, respectively. If you wish to cancel, we will keep your TeamSnap league and club functionality active until the end of the period that you have paid for (i.e., the end of the month or year that you have paid for).</p>
	    	    	</div>
	    	    </div>
	    	</div>
	    	<h4>Does the solution come with a customized domain?</h4>
	    	<div><!-- needs empty div because accordion function destroys skeleton.css formatting -->
	    		<div class="container">	    	
	    	    	<div class="sixteen columns add-top">
	    	    		<p>Sorry, while we do support customized domains, you need to acquire your domain from a domain registration company. Once you have your domain, we can help you use it with your TeamSnap public site.</p>
	    	    	</div>
	    	    </div>
	    	</div>
	    </div>
	</div>
<!-- END MAIN CONTENT -->
<?php include "_includes/footer.php"; ?>