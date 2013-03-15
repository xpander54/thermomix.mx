<!doctype html>
<html lang="es-mx">
<head>
	<meta charset="utf-8">
	<title>Thermomix</title>
	<?php
		echo $this->Html->css('style');
	?>
</head>
<body>
	<div class="wrapper">
		<header class="main">
			<h1><a href="/">Thermomix</a></h1>
			<span class="telefono Three-Dee">5512·3645</span>
		</header> <!-- Fin header.main -->
		<section class="main content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content') ?>
		</section><!-- Fin sections.main.content -->
		<footer class="main">
		</footer><!-- Fin footer.main -->
	</div>
</body>
</html>