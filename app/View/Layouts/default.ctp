<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de Administración | thermomix.mx</title>
	<?php
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>

	<?php
		$sesion = $this->Session->read()
	?>

</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h1>Sistema de Administracion | thermomix.mx</h1>
			<?php if (isset($sesion['Auth']['User'])): ?>	
			<ul class="menu-administracion">
				<?php if ($sesion['Auth']['User']['role'] == 'admin'): ?>	
				<li>
					<?php
						echo $this->Html->link(
							'Usuarios',
							array(
								'controller' => 'users',
								'action'     => 'index'
							)
						)
					?>
				</li>
				<?php endif ?>
				<li>
					<?php
						echo $this->Html->link(
							'Citas',
							array(
								'controller' => 'appointments',
								'action'     => 'index'
							)
						)
					?>
				</li>
			</ul>
			<ul class="menu-usuario">
				<li>
					<?php echo $this->Html->link('Salir', array('controller' => 'users', 'action' => 'logout')) ?>
				</li>				
			</ul>
			<?php endif ?>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<p>Desarrollado por Holbox Design.</p>
		</div>
	</div>
</body>
</html>
