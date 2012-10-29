<?php 
	$title="Trial Finish | TeamSnap";
	$description="TeamSnap";
	$page="trial";
	$h1="Trial Finish";
	include "_includes/header_mobile.php"; 
?>
<!-- Page Specific CSS & Scripts
================================================== -->
<style>
	form small {
		font-size: 65%;
	}
</style>
<!-- End Page Specific CSS & Scripts -->
</head>
<body>
	<?php include ("_includes/topbar.php"); ?>
<!-- BEGIN MAIN CONTENT -->
	<div class="container">
		<div class="sixteen columns add-top">
			<h3>FANTASTIC! Now let's customize a few things...</h3>
			<hr>
				<form>
				<div class="row">
					<h5 class="green">Tell us where [Team Name] is located</h5>
					<label for="selectList">Time Zone:</label>
					<select id="selectList">
						<option value="Option 1">Option 1</option>
						<option value="Option 2">Option 2</option>
						<option value="Option 3">Option 3</option>
						<option value="Option 4">Option 4</option>
					</select>
					<label for="selectList">Country:</label>
					<select id="selectList">
						<option value="Option 1">Option 1</option>
						<option value="Option 2">Option 2</option>
						<option value="Option 3">Option 3</option>
						<option value="Option 4">Option 4</option>
					</select>
					<label for="user_email">ZIP/Postal Code:</label>
					<input id="user_email" name="user[email]" size="40" type="text">
				</div>	
				<div class="row">
					<h5 class="green">Tell us about yourself!</h5>
					<p><small>Nothing about you or your team is ever shared publicly.</small></p>
					<label for="user_email">Your First Name:</label>
					<input id="user_email" name="user[email]" size="40" type="text">
					<label for="user_email">Your Last Name:</label>
					<input id="user_email" name="user[email]" size="40" type="text">
					<label for="selectList">Birth Month &amp; Year:</label>
					<select id="selectList">
						<option value="Option 1">December</option>
						<option value="Option 2">Option 2</option>
						<option value="Option 3">Option 3</option>
						<option value="Option 4">Option 4</option>
					</select>
					<select id="selectList">
						<option value="Option 1">1999</option>
						<option value="Option 2">2012</option>
						<option value="Option 3">1776</option>
						<option value="Option 4">1066</option>
					</select>	
					<p><small><strong>You must be 13 or older to create an account.</strong> Children under 13 should have a parent create an account on their behalf, using the parent's birthdate.</small></p>
					<label for="regularCheckbox">
						<input type="checkbox" id="regularCheckbox" value="checkbox 1">
						<span>Send me occasional TeamSnap news. I like knowing stuff.</span>
					</label>
				</div>
				<div class="row add-bottom">
					<h5 class="center add-bottom"><em>And you're done!</em></h5>
					<a href="#" class="button sunny">Create new team</a>
				</div>
			</form>
			<p><small>By clicking this button I agree to the <a href="#">TeamSnap Terms of Service</a>.</small></p>
		</div>
	</div>
<!-- END MAIN CONTENT -->
<?php include "_includes/footer.php"; ?>