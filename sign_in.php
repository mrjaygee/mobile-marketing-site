<?php 
	$title="Sign In | TeamSnap";
	$description="TeamSnap";
	$page="sign_in";
	$h1="Sign In";
	include "_includes/header_mobile.php"; 
?>
<!-- Page Specific CSS & Scripts
================================================== -->
<!-- End Page Specific CSS & Scripts -->
</head>
<body>
	<?php include ("_includes/topbar.php"); ?>
<!-- BEGIN MAIN CONTENT -->
	<div class="container">
		<div class="sixteen columns add-top">
			<h1>Sign In</h1>
			<p>You'll be redirected to our non-mobile web version of TeamSnap. Want the best mobile experience? <a href="#">Download our mobile apps</a>.</p>
			<hr>
			<div class="row">
				<form>
					<label for="user_email">Email Address:</label>
					<input id="user_email" name="user[email]" size="40" type="text">
					<label for="user_password">Password:</label>
					<input id="user_password" name="user[password]" size="40" type="password">
				</form>
			</div>
			<div class="row add-bottom add-top">
				<a href="#" class="button sunny">Sign In</a>
			</div>
		</div>
	</div>
<!-- END MAIN CONTENT -->
<?php include "_includes/footer.php"; ?>