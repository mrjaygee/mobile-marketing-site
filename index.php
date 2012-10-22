<?php 
	$title="Manage Your Team With TeamSnap";
	$description="TeamSnap";
	$page="home";
	$h1="H1 description goes here";
	include "_includes/header_mobile.php"; 
?>
<!-- Page Specific CSS & Scripts
================================================== -->
<link rel="stylesheet" href="_includes/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<style>
	.button, a.button { position: absolute; bottom: 10px; z-index: 1111; }
	.nivo-caption {
		background: transparent;
		font-family: 'Raleway', sans-serif; 
		font-size: 1.6em;
		line-height: 1em;
		opacity: 1;
		left: 10px;
		top: 10px;
		text-shadow: 0px 1px 2px #000, 0px 0px 13px rgba(0, 0, 0, 0.35);
		text-transform: uppercase;
	}
</style>
<script src="_includes/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script type="text/javascript">
	$(window).load(function() {
	    $('#slider').nivoSlider({
	            effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
	            animSpeed: 1000, // Slide transition speed
	            pauseTime: 5000, // How long each slide will show
	            startSlide: 0, // Set starting Slide (0 index)
	            directionNav: false, // Next & Prev navigation
	            controlNav: false, // 1,2,3... navigation
	            controlNavThumbs: false, // Use thumbnails for Control Nav
	            pauseOnHover: true, // Stop animation while hovering
	            manualAdvance: false, // Force manual transitions
	            prevText: 'Prev', // Prev directionNav text
	            nextText: 'Next', // Next directionNav text
	            randomStart: false, // Start on a random slide
	            beforeChange: function(){}, // Triggers before a slide transition
	            afterChange: function(){}, // Triggers after a slide transition
	            slideshowEnd: function(){}, // Triggers after all slides have been shown
	            lastSlide: function(){}, // Triggers when last slide is shown
	            afterLoad: function(){} // Triggers when slider has loaded
	        });
	});
</script>
<!-- End Page Specific CSS & Scripts -->
</head>
<body>
	<?php include ("_includes/topbar.php"); ?>
<!-- BEGIN MAIN CONTENT -->
	<div id="home-header" class="full-width">
		<div id="slider" class="nivoSlider">
		    <img src="_images/masthead_01.jpg" alt="" title="The best way to manage your team or group." />
		    <img src="_images/masthead_04.jpg" alt="" title="Easy to use. Packed with powerful features." />
		    <img src="_images/masthead_05.jpg" title="100% web and mobile-based tools." />
		</div>
		<a href="#" class="button sunny">Sign Up Free!<br><small>Free &amp; paid plans available.</small></a>
	</div>
<!-- END MAIN CONTENT -->
	<div id="home-menu" class="full-width">
		<?php include ("_includes/home_menu.php"); ?>
	</div>
<?php include "_includes/footer.php"; ?>