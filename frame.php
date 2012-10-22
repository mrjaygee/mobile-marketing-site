<?php 
	$title="Frame | TeamSnap";
	$description="TeamSnap";
	$page="frame";
	$h1="H1 description goes here";
	include "_includes/header_mobile.php"; 
?>
<!-- Page Specific CSS & Scripts
================================================== -->
<style>
	.gray { background-color: #999; border-right:10px solid white; }
</style>
<!-- End Page Specific CSS & Scripts -->
</head>
<body>
	<?php include ("_includes/topbar.php"); ?>
<!-- BEGIN MAIN CONTENT -->
	<div class="full-width">
		<img src="_images/masthead_01.jpg">
		<h1>Test headline</h1>
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