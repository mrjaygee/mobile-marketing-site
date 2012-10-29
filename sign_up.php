<?php 
	$title="Sign Up | TeamSnap";
	$description="TeamSnap";
	$page="frame";
	$h1="Sign Up";
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
			<h3>Start Your Free Trial - No Credit Card Required!</h3>
			<hr>
			<div class="row">
				<form>
				<h5 class="green">Create My Team</h5>
					<label for="regularInput">Team Name:</label>
					<input id="team_team_name" name="team[team_name]" class="remove-bottom"  size="35" type="text">
					<p><small>This can always be changed later.</small></p>
					<label for="sportselect">Sport:</label>
					<select id="sportselect" name="team[sport_id]">
						<option value=""></option>
						<option value="52">Non-Sport Group</option>
						<option value="-1" disabled="">--------------</option>
						<option value="26">Australian Football</option>
						<option value="27">Badminton</option>
						<option value="28">Bandy</option>
						<option value="5">Baseball</option>
						<option value="1">Basketball</option>
						<option value="29">Bocce</option>
						<option value="13">Bowling</option>
						<option value="30">Broomball</option>
						<option value="31">Cheerleading</option>
						<option value="32">Chess</option>
						<option value="54">Cow Tipping</option>
						<option value="8">Cricket</option>
						<option value="33">Croquet</option>
						<option value="34">Curling</option>
						<option value="35">Cycling</option>
						<option value="14">Dodgeball</option>
						<option value="25">Dragon Boat</option>
						<option value="36">Fencing</option>
						<option value="15">Field Hockey</option>
						<option value="44">Floorball</option>
						<option value="37">Foosball</option>
						<option value="7">Football</option>
						<option value="46">Golf</option>
						<option value="56">Gymnastics-Men</option>
						<option value="57">Gymnastics-Women</option>
						<option value="38">Hurling</option>
						<option value="16">Ice Hockey</option>
						<option value="39">Indoor Soccer</option>
						<option value="17">Inline Hockey</option>
						<option value="50">Ki-O-Rahi</option>
						<option value="18">Kickball</option>
						<option value="10">Lacrosse</option>
						<option value="40">Netball</option>
						<option value="53">Outrigger</option>
						<option value="19">Paintball</option>
						<option value="45">Petanque</option>
						<option value="20">Polo</option>
						<option value="55">Racquetball</option>
						<option value="51">Ringette</option>
						<option value="48">Roller Derby</option>
						<option value="21">Rowing</option>
						<option value="9">Rugby</option>
						<option value="41">Running</option>
						<option value="47">Sailing</option>
						<option value="2">Soccer</option>
						<option value="4">Softball</option>
						<option value="42">Swimming</option>
						<option value="43">Tennis</option>
						<option value="22">Ultimate</option>
						<option value="6">Volleyball</option>
						<option value="23">Water Polo</option>
						<option value="11">Wiffleball</option>
						<option value="49">Wrestling</option>
						<option value="-1" disabled="">--------------</option>
						<option value="24">Other Sport</option>
					</select>
				<h5 class="green">Create My TeamSnap Login</h5>
					<label for="user_email">Email Address:</label>
					<input id="user_email" name="user[email]"  size="35" type="text">
					<label for="user_password">Create a Password: </label>
					<input id="user_password" name="user[password]"  size="35" type="password">
					<label for="regularInput">Confirm Password:</label>
					<input id="user_password_confirmation" name="user[password_confirmation]" size="35" type="password">
				</form>
			</div>
			<div class="row add-bottom add-top">
				<a href="#" class="button sunny">Continue &raquo;</a>
			</div>
		</div>
	</div>
<!-- END MAIN CONTENT -->
<?php include "_includes/footer.php"; ?>