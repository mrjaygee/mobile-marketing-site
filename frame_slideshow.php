<?php 
	$title="Frame Slideshow | TeamSnap";
	$description="TeamSnap";
	$page="frame";
	$h1="H1 description goes here";
	include "_includes/header_mobile.php"; 
?>
<!-- Page Specific CSS & Scripts
================================================== -->
<link rel="stylesheet" href="_includes/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<script src="_includes/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>

<style>
	.button, a.button { position: absolute; bottom: 10px; z-index: 1111; }
	.gray { background-color: #999; }
	.nivo-caption {
		background: transparent;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		color: white;
		display: none;
		font-family: 'Raleway', sans-serif; 
		font-size: 1.6em;
		line-height: 1em;
		opacity: 1;
		overflow: hidden;
		padding: 5px 10px;
		left: 10px;
		top: 10px;
		text-shadow: 0px 1px 2px #000, 0px 0px 13px rgba(0, 0, 0, 0.35);
		text-transform: uppercase;
		width: 100%;
		z-index: 8;
	}
</style>

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
</head>
<body>
	<?php include ("_includes/topbar.php"); ?>
<!-- BEGIN MAIN CONTENT -->
	<div class="full-width">
		<div class="slider-wrapper">
		    <div id="slider" class="nivoSlider">
		        <img src="_images/masthead_01.jpg" alt="" title="The best way to manage your team or group." />
		        <img src="_images/masthead_02.jpg" alt="" title="Easy to use. Packed with powerful features." />
		        <img src="_images/masthead_03.jpg" title="100% web and mobile-based tools." />
		    </div>
		</div>
		<a href="#" class="button sunny">Sign Up Free!<br><small>Free &amp; paid plans available.</small></a>
		<div class="clear"></div>
	</div>
	<div class="container">
		<div class="sixteen columns">
			<h1 class="remove-bottom add-top">Framework</h1>
			<h5>Version 1.2</h5>
			<hr />
		</div>
		<div class="sixteen columns">
			<h1>H1 Headline Lorem ipsum dolor</h1>
			<h2>H2 Headline Sed sagittis nisl ultricies</h2>
			<h3>H3 Headline Aenean varius nunc eu nisl ultricies</h3>
			<h4>H4 Headline porttitor nunc, sed mollis justo porttitor ut.</h4>
			<h5>H5 Headline Vestibulum interdum velit feugiat tortor rutrum</h5>
			<h6>H6 Headline feugiat tortor rutrum non tempor erat auctor.</h6>
			<p>Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Sed sagittis nisl vitae diam iaculis ut pellentesque lorem fermentum. Aenean varius nunc eu nisl ultricies malesuada luctus ligula rhoncus. Suspendisse ultricies ligula at lacus blandit a dignissim lorem tincidunt. Pellentesque <a href="#">sagittis</a> porttitor nunc, sed mollis justo porttitor ut. Vestibulum interdum velit feugiat tortor rutrum non tempor erat auctor.</p>
			<div class="row">
				<div class="one-quarter column alpha gray">one</div>
				<div class="one-quarter column gray">one</div>
				<div class="one-quarter column gray">one</div>
				<div class="one-quarter column omega gray">one</div>
			</div>
			<div class="row">
				<div class="one-quarter column alpha gray">one</div>
				<div class="three-quarters column omega gray">three</div>
			</div>
			<div class="row">
				<div class="three-quarters column alpha gray">three</div>
				<div class="one-quarter column omega gray">one</div>
			</div>			
			<div class="row">
				<div class="one-half column alpha gray">half</div>
				<div class="one-half column omega gray">half</div>
			</div>	
			<div class="row">
				<div class="one-third column alpha gray">one</div>
				<div class="two-thirds column omega gray">two</div>
			</div>
			<div class="row">
				<div class="one-third column alpha gray">one</div>
				<div class="one-third column gray">one</div>
				<div class="one-third column omega gray">one</div>
			</div>
			<div class="row">
				<div class="two-thirds column alpha gray">two</div>
				<div class="one-third column omega gray">one</div>
			</div>
			<hr>
			<div class="row">
				<h3>Vestibulum interdum velit</h3>
				<div class="one-quarter column alpha"><img src="_images/icon-ios-push.png"></div>
				<div class="three-quarters column omega"><p>Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Sed sagittis nisl vitae diam iaculis ut pellentesque lorem fermentum.</p></div>
			</div>
			<div class="row">
				<img src="_images/masthead_02.jpg">
			</div>
		</div>
	</div>
<!-- END MAIN CONTENT -->
<?php include "_includes/footer.php"; ?>