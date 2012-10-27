<?php 
	$title="Trial Finish | TeamSnap";
	$description="TeamSnap";
	$page="frame";
	$h1="Trial Finish";
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
			<h3>FANTASTIC! Now let's customize a few things...</h3>
			<hr>
			<div class="row">
				<form>
				<h5><span class="steps">1</span> Create My Team</h5>
					<label for="selectList">Select List</label>
					<select id="selectList">
						<option value="Option 1">Option 1</option>
						<option value="Option 2">Option 2</option>
						<option value="Option 3">Option 3</option>
						<option value="Option 4">Option 4</option>
					</select>
				<h5><span class="steps">2</span> Create My TeamSnap Login</h5>
					<label for="regularInput">Regular Input 1</label>
					<input type="text" id="regularInput">
					<label for="regularInput">Regular Input 2</label>
					<input type="text" id="regularInput">
					<label for="regularInput">Regular Input 3</label>
					<input type="text" id="regularInput">
				</form>
			</div>
			<div class="row add-bottom">
				<a href="#" class="button sunny">Continue &raquo;</a>
			</div>
		</div>
	</div>
<!-- END MAIN CONTENT -->
<?php include "_includes/footer.php"; ?>