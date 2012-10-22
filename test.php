<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script src="//cdn.optimizely.com/js/8631401.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title><?php echo $title; ?></title>
    <?php if ($canonical<>""): ?>
	<link rel="canonical" href="<?php echo $canonical; ?>" />
	<?php endif ?>
    <?php if ($description<>""): ?>
	<meta name="description" content="<?php echo $description; ?>" />
	<?php endif ?>
	<meta name="format-detection" content="telephone=no, audio=yes" />
	<link rel="Shortcut Icon" href="http://www.teamsnap.com/favicon.ico">
	<link href='_css/styles.css' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:900|Open+Sans:800' rel='stylesheet' type='text/css'>
	<script src="_includes/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="_includes/jquery.cookie.js" type="text/javascript"></script>

	<script language="javascript" type="text/javascript">	
	var retina = window.devicePixelRatio > 1 ? true : false;
	if (retina) {
	    // the user has a retina display
	    document.write("<meta name='viewport' content='width=device-width, user-scalable=no,initial-scale=.5, maximum-scale=.5, minimum-scale=.5' />");
	}
	else {
	    // the user has a non-retina display
	    document.write("<meta name='viewport' content='width=device-width, user-scalable=no,initial-scale=1, maximum-scale=1, minimum-scale=1' />");
	}

	
	// Mobile Interstitial Page
	$(document).ready(function(){	
		var getApp = $.cookie('getApp');
		if (navigator.userAgent.indexOf('iPhone') != -1 && getApp != 'noThanks'){
		    alert("welcome iphone user! let's show you the app.");
			window.location.href = "iphone_interstitial.php";		
		}
		else if (navigator.userAgent.indexOf('iPhone') != -1 && getApp == 'noThanks'){
		    alert("you've already said no thanks. stay on the homepage");
		}	
	});
	</script>
</head>
<body>
<div id="main">
	<div class="container">
		<div>
			<h1 class="primary museo">HERE'S THE MAIN PAGE</h1>
			<a  id="main_download"class="button" title="Download the iPhone App" href="iphone_interstitial.php">Try to go to the iphone page<br><span class="small">if cookie set, i'll be back.</span></a>
		</div>
	</div>
</div>	