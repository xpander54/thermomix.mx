<!doctype html>
<html lang="es-mx">
<head>
	<meta charset="utf-8">
	<title>Thermomix</title>
	<?php
		echo $this->Html->css(
			array(
				'bootstrap.min',
				'style'
			)
		);
	?>
</head>
<body>

	<!-- Google Tag Manager -->
	<noscript>
		<iframe 
			src="//www.googletagmanager.com/ns.html?id=GTM-L5RZ"
			height="0"
			width="0"
			style="display:none;visibility:hidden">
		</iframe>
	</noscript>
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-L5RZ');
	</script>
	<!-- End Google Tag Manager -->

	<div class="wrapper">
		<header class="main nav navbar-fixed-top">
			<div class="container row-fluid">
				<div class="span6">
					<h1><a href="/">Thermomix</a></h1>
				</div>
				<div class="span6">
					<p class="telefono">5512·3645</p>
				</div>
			</div>
		</header> <!-- Fin header.main -->
		<img src="img/thermomixBg3.jpg" class="img-bg1" />
		<section class="main content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content') ?>
		</section><!-- Fin sections.main.content -->
		<footer class="main">
		</footer><!-- Fin footer.main -->
	</div>
</body>
</html>