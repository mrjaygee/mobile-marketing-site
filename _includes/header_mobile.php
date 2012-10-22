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
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="format-detection" content="telephone=no, audio=yes" />
	<meta name='viewport' content='width=device-width, user-scalable=no,initial-scale=1, maximum-scale=1, minimum-scale=1' />

	<!-- Favicons
	================================================== -->	
	<link rel="Shortcut Icon" href="http://www.teamsnap.com/favicon.ico">
	
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="_css/base.css">
	<link rel="stylesheet" href="_css/skeleton.css">
	<link rel="stylesheet" href="_css/layout.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:900|Open+Sans:800' rel='stylesheet' type='text/css'>

	<!-- Scripts
	================================================== -->
	<script src="_includes/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="_includes/jquery.cookie.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script language="javascript" type="text/javascript">
	// universal scripts
		if (navigator.userAgent.indexOf('iPhone') != -1){
		    addEventListener("load", function(){
		    setTimeout(hideURLbar, 0);}, false);
		}
		function hideURLbar(){
		    window.scrollTo(0, 1);
		}
		// retina display specific stuff
		var retina = window.devicePixelRatio > 1 ? true : false;
		if (retina) {  // the user has a retina display ***left this at scale=1 to make things easier
		    /* document.write("<meta name='viewport' content='width=device-width, user-scalable=no,initial-scale=.5, maximum-scale=.5, minimum-scale=.5' />"); */ }
		else {  // the user has a non-retina display
		    /* document.write("<meta name='viewport' content='width=device-width, user-scalable=no,initial-scale=1, maximum-scale=1, minimum-scale=1' />"); */ }	  
	</script>
	<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#menu-tab").click(function(event){
			$("nav").toggleClass('show');
			return false;
		}); 
		$("#menu-close").click(function(event){
			$("nav").toggleClass('show');
			//$(this).toggleClass('show');
			return false;
		}); 
	}); 
	</script>
    
