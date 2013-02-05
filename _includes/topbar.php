<script>
  dataLayer = [{
    'subdomain': 'mobile-marketing'
  }];
</script>

<%= yield :data_layer -%>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WJ3N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WJ3N');</script>
<!-- End Google Tag Manager -->

<header>
<?php if ($page!="home"): ?>
	<?php include 'main_menu.php'; ?>	
<?php endif ?>
	<div class="container">
 		<a href="index.php"><img src="_images/logo.png" width="110" id="logo" border="0" /></a>
	</div>
</header>